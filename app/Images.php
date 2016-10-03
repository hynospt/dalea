<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = array('id','image_name', 'created_at', 'updated_at');
    public $timestamps = true;

}
