<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
	protected $fillable = [
        'name', 'sku_code', 'product_description', 'disclaimer', 'meta_title', 'meta_keyword', 'meta_description','is_active','home_show_product', 'created_at', 'updated_at'
    ];

}
