<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'news_id';
    protected $fillable = array('news_title','news_image','posting_date','created_at','updated_at');
    public $timestamps = true;
}
