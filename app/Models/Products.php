<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Authors::class,'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class,'product_category');

    }
}
