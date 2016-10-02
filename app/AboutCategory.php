<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutCategory extends Model
{
    protected $table = 'about_category';
    protected $primaryKey = 'about_category_id';
    protected $fillable = array('about_category_name');

    public function about(){
        return $this->belongsTo('App\About', 'id');
    }
}
