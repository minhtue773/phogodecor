<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['category_id', 'name', 'description', 'price', 'discount_price', 'stock', 'image', 'status', 'is_hidden', 'deleted_at'];
    public function Category() {
        return $this->belongsTo(Category::class);
    }
}
