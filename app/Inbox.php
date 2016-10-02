<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = 'inbox';
    protected $primaryKey = 'inbox_id';
    protected $fillable = array('fullname','email','message','created_at','updated_at');
    public $timestamps = true;
}
