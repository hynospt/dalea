<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    protected $table = 'product_detail';
    protected $primaryKey = 'product_detail_id';
    protected $fillable = array('product_id','product_detail_slider_image','product_tag','product_detail_header','product_detail_description','product_detail_image','product_detail_map','created_at','updated_at');
    public $timestamps = true;

    public function product(){
        return $this->belongsTo('App\Products', 'product_id');
    }
}
