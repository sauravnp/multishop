<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id', 'name', 'price', 'short_description', 'description', 'sizes', 'colors', 'available_quantity', 'image_one', 'image_two', 'image_three', 'created_at', 'updated_at'];

}
