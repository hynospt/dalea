<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';
    protected $primaryKey = 'career_id';
    protected $fillable = array('role','posting_date','created_at','updated_at');
    public $timestamps = true;

    public function about_category(){
        return $this->hasOne('App\AboutCategory', 'category_id');
    }
}
