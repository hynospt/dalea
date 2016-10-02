<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $fillable = array('product_name','product_image','product_over_image','status','published_at');
    public $timestamps = true;

    public function product_detail(){
        return $this->hasOne('App\ProductDetails', 'product_id');
    }
}
