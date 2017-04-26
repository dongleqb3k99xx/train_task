<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'product_2';
	protected $fillable = ['product_id','type_id','product_name', 'price', 'img_link','note_1'];
}
