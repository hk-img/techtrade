<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use \App\Models\Product;
use \App\Models\Category;
use \App\Models\Brand;
use \App\Models\Blog;
use Illuminate\Support\Facades\Log;

class siteMapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:site-map-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try{
            $this->info('Sitemap generation started.');
            Log::info('Sitemap generation started.');

            // Create the main sitemap index
            $sitemapIndex = Sitemap::create();
            
            // Static Pages Sitemap
            $this->info('Generating static pages sitemap...');
            Log::info('Generating static pages sitemap...');
            
            $pages = [
                "/", "pages/about", "categories/index", "user-dasboard", "blogs",
                "prescriptions", "wishlist", "carts", "pages/faq", "pages/policy",
                "pages/term", "pages/returnpolicy", "recently-viewed", "users/profile",
                "my-orders", "uploaded-prescriptions", "my-diagnostic-reports", "address-list"
            ];

            $pagesSitemap = Sitemap::create();
            foreach ($pages as $val) {
                $url = url($val);
                $this->info("Adding page: $url");
                Log::info("Adding page: $url");

                $pagesSitemap->add(
                    Url::create($url)
                        ->setPriority(0.9)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                );
            }
            $pagesSitemap->writeToFile(public_path('sitemap-pages.xml'));
            $sitemapIndex->add(Url::create(url('/sitemap-pages.xml')));
            
            // Products Sitemap
            $limit = 2000; // Number of products per sitemap file
            $page = 1;

            $this->info('Generating paginated products sitemap...');
            Log::info('Generating paginated products sitemap...');

            do {
                $offset = ($page - 1) * $limit;
                $products = Product::skip($offset)->take($limit)->get();

                if ($products->isEmpty()) {
                    break;
                }

                $productSitemap = Sitemap::create();
                
                foreach ($products as $product) {
                    $url = url("/products/single/".str_replace('_','-',$product->slug));
                    Log::info("Adding product: $url");

                    $productSitemap->add(
                        Url::create($url)
                            ->setPriority(0.9)
                            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    );
                }

                $sitemapFile = "sitemap-products-{$page}.xml";
                $productSitemap->writeToFile(public_path($sitemapFile));
                $sitemapIndex->add(Url::create(url("/{$sitemapFile}")));

                $this->info("Created {$sitemapFile}");
                Log::info("Created {$sitemapFile}");

                $page++;

            } while ($products->count() === $limit);

            // Categories Sitemap
            $this->info('Generating categories sitemap...');
            Log::info('Generating categories sitemap...');
            
            $categorySitemap = Sitemap::create();
            Category::get()->each(function (Category $category) use ($categorySitemap) {
                $url = url("/category/{$category->slug}");
                Log::info("Adding category: $url");

                $categorySitemap->add(
                    Url::create($url)
                        ->setPriority(0.8)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                );
            });
            $categorySitemap->writeToFile(public_path('sitemap-categories.xml'));
            $sitemapIndex->add(Url::create(url('/sitemap-categories.xml')));

            // Brands Sitemap
            $this->info('Generating brands sitemap...');
            Log::info('Generating brands sitemap...');
            
            $brandSitemap = Sitemap::create();
            Brand::get()->each(function (Brand $brand) use ($brandSitemap) {
                $url = url("/categories/brand/medicines/{$brand->slug}");
                Log::info("Adding brand: $url");

                $brandSitemap->add(
                    Url::create($url)
                        ->setPriority(0.7)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                );
            });
            $brandSitemap->writeToFile(public_path('sitemap-brands.xml'));
            $sitemapIndex->add(Url::create(url('/sitemap-brands.xml')));

            // Blogs Sitemap
            $this->info('Generating blogs sitemap...');
            Log::info('Generating blogs sitemap...');
            
            $blogSitemap = Sitemap::create();
            Blog::get()->each(function (Blog $blog) use ($blogSitemap) {
                $url = url("/blog/single/{$blog->slug}");
                Log::info("Adding blog: $url");

                $blogSitemap->add(
                    Url::create($url)
                        ->setPriority(0.7)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                );
            });
            $blogSitemap->writeToFile(public_path('sitemap-blogs.xml'));
            $sitemapIndex->add(Url::create(url('/sitemap-blogs.xml')));

            // Save the sitemap index
            $this->info('Writing final sitemap index file...');
            Log::info('Writing final sitemap index file...');

            $sitemapIndex->writeToFile(public_path('sitemap.xml'));

            $this->info('Sitemap generation completed successfully!');
            Log::info('Sitemap generation completed successfully!');
        } catch (\Exception $e) {
            $this->error('Error during sitemap generation: ' . $e->getMessage());
            Log::error('Error during sitemap generation: ' . $e->getMessage());
        }
    }

}
