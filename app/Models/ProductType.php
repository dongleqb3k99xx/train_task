<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
        protected $table = 'product_type';
	protected $fillable = ['type_id','type_name', 'note_1'];
}
