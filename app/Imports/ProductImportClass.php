<?php

namespace App\Imports;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;

class ProductImportClass implements ToCollection, WithHeadingRow, WithChunkReading,WithValidation, ShouldQueue
{
    /**
     * @param Collection $collection
     */
    use Importable;

    public function collection(Collection $rows)
    {
        // Remove duplicates in the 'name' column within the imported data
        
        $uniqueRows = $rows->unique('name');

        // Extract unique category IDs from the imported data
        $uniqueCategoryIds = $uniqueRows->pluck('category_id')->unique()->filter();

        // Extract unique brand IDs from the imported data
        $uniqueBrandIds = $uniqueRows->pluck('brand_id')->unique()->filter();

        // Extract unique salt IDs from the imported data
        $uniqueSaltIds = $uniqueRows->pluck('salt_id')->unique()->filter();

        // Check the active status of the categories in the database
        $inactiveCategories = Category::whereIn('id', $uniqueCategoryIds)
            ->where('status', '!=', '1') // Assuming 'status' column defines 1/0 for active/inactive categories
            ->pluck('id')
            ->toArray();

        if (!empty($inactiveCategories)) {
            throw new \Exception(
                "The following categories are not active: " . implode(', ', $inactiveCategories)
            );
        }

        // Check the active status of the brands in the database
        $inactiveBrands = Brand::whereIn('id', $uniqueBrandIds)
            ->where('status', '!=', '1') // Assuming 'status' column defines 1/0 for active/inactive brands
            ->pluck('id')
            ->toArray();

        if (!empty($inactiveBrands)) {
            throw new \Exception(
                "The following brands are not active: " . implode(', ', $inactiveBrands)
            );
        }

        // Check the active status of the salts in the database
        $inactiveSalts = Category::whereIn('id', $uniqueSaltIds)
            ->where('status', '!=', '1') // Assuming 'status' column defines 1/0 for active/inactive salts
            ->pluck('id')
            ->toArray();

        if (!empty($inactiveSalts)) {
            throw new \Exception(
                "The following salts are not active: " . implode(', ', $inactiveSalts)
            );
        }
        
        // Fetch existing product names from the database
        $existingProductNames = Product::whereIn('name', $uniqueRows->pluck('name'))->pluck('name')->toArray();

        $errors = [];
        foreach ($uniqueRows as $key => $row) {
            $line = $key + 2; // Line number in the Excel sheet (considering 1-based index and heading row)

            // Check if the product name already exists
            if (in_array($row['name'], $existingProductNames)) {
                $errors[] = "Duplicate entry found for name '{$row['name']}' on line {$line}.";
                continue;
            }

            // Prepare the data for insertion
            $data = [
                'category_id' => $row['category_id'] ?? null,
                'brand_id' => $row['brand_id'] ?? null,
                'salt_id' => $row['salt_id'] ?? null,
                'name' => $row['name'] ?? null,
                'mrp' => $row['mrp'] ?? 0.00,
                'description' => $row['description'] ?? 'N/A',
                'introduction' => $row['introduction'] ?? null,
                'side_effect' => $row['side_effect'] ?? null,
                'product_usage' => $row['product_usage'] ?? null,
                'product_faq' => $row['product_faq'] ?? null,
                'packaging_type' => $row['packaging_type'] ?? null,
                'quantity' => $row['quantity'] ?? null,
                'min_quantity' => $row['min_quantity'] ?? null,
                'offer' => $row['offer'] ?? null,
                'offer_value' => $row['offer_value'] ?? 'per',
                'offer_status' => $row['offer_status'] ?? null,
                'in_stock' => $row['in_stock'] ?? 0,
                'featured' => $row['featured'] ?? 0,
                'min_status' => $row['min_status'] ?? 0,
                'deals_of_the_day' => $row['deals_oftheday'] ?? 0,
                'new_arrival' => $row['new_arrival'] ?? 0,
            ];

            // Insert the record if valid
            Product::create($data);
        }

        // Return errors if any
        if (!empty($errors)) {
            throw new \Exception(implode("\n", $errors));
        }
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    /**
     * Define the validation rules for each row.
     */
    public function rules(): array
    {
        return [
            'category_id' => [
                'required',
                'integer',
            ],
            // 'category_id' => [
            //     'required',
            //     'integer',
            //     Rule::exists('categories', 'id')->where(function ($query) {
            //         $query->where('status', '1');
            //     }),
            // ],
            'brand_id' => 'required|integer|exists:brands,id',
            'salt_id' => 'required|integer|exists:salts,id',
            // 'name' => 'required|string|max:255|unique:products,name',
            'name' => 'required|string|max:255',
            'mrp' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'min_quantity' => 'nullable|integer|min:1',
            'in_stock' => 'nullable|boolean',
            'featured' => 'nullable|boolean',
            'deals_oftheday' => 'nullable|boolean',
            'new_arrival' => 'nullable|boolean',
            'description' => 'required',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function customValidationMessages(): array
    {
        return [
            'category_id.required' => 'The category_id field is mandatory.',
            // 'category_id.exists' => 'The category_id must exist and be active.',
            'brand_id.required' => 'The brand_id field is mandatory.',
            'brand_id.exists' => 'The brand_id must exist in the database.',
            'salt_id.required' => 'The salt_id field is mandatory.',
            'salt_id.exists' => 'The salt_id must exist in the database.',
            'name.required' => 'The name field is mandatory.',
            'name.unique' => 'The product name must be unique.',
            'mrp.required' => 'The MRP field is mandatory.',
            'quantity.required' => 'The quantity field is mandatory.',
        ];
    }

    /**
     * Handle validation failures.
     */
    public function onFailure(\Maatwebsite\Excel\Validators\ValidationException $e)
    {
        $failures = $e->failures();

        foreach ($failures as $failure) {
            $row = $failure->row(); // row number at which validation failed
            $attributes = $failure->attribute(); // attribute(s) that failed validation
            $errors = $failure->errors(); // errors for that row/attribute

            // Log or handle errors
            \Log::error("Validation error on row {$row}: " . implode(', ', $errors));
        }
    }

}
