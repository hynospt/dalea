<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    protected $table = 'footer';
    protected $primaryKey = 'footer_id';
    protected $fillable = array('content','created_at','updated_at');
    public $timestamps = true;

}
