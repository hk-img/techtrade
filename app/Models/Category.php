<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = ['name','linl','slug','status','parent_id'];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
