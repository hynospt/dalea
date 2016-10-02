<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $fillable = array('category_id','content');
    public $timestamps = true;

    public function about_category(){
        return $this->hasOne('App\AboutCategory', 'category_id');
    }

}
