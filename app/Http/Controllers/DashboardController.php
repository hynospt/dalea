<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Helper\Helper;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::guest())
        {
            return redirect('/');
        }
        $public = public_path();

        return view('dashboard.index', compact('public'));
    }
}
