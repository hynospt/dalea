<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function index(){
        $myPath = 'C://REPOSITORY/Dalea/laravel/public/';

        return view('layouts.master', compact('myPath'));
    }
}
