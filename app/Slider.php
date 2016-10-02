<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table ='slider';
    protected $primaryKey = 'slider_id';
    protected $fillable = array('slider_name','published_at','created_at','updated_at');
    public $timestamps = true;
}
