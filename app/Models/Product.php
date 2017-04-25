<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'product_2';
	protected $fillable = ['product_name', 'price', 'img_link'];
}
