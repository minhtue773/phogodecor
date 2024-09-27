<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesProduct extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'image'];
    protected $table = 'images_product';
    public $timestamps = false;
}
