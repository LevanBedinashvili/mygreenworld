<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{

    protected $table = "products";
    protected $primaryKey = 'products_id';
    protected $guarded=[];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
