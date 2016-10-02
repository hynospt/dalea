<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social';
    protected $primaryKey = 'social_id';
    protected $fillable = array('social_name','social_nicename', 'social_link', 'created_at', 'updated_at');
    public $timestamps = true;

}
