<?php

namespace App\Http\Controllers;

use App\Career;
use App\Inbox;
use App\News;
use App\ProductDetails;
use App\Products;
use App\Slider;
use App\Social;
use Illuminate\Http\Request;
use App\Images;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\About;
use App\footer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Mews\Captcha\Facades\Captcha;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $about = About::all()->toArray();
        $abouts = [];
        foreach($about as $category => $value){
            $abouts[$value['category_id']] = array('content'=>$value['content']);
        }

        $footer = footer::all();

        $socials = Social::all()->toArray();

        $slider = Slider::all();
        $slider[0]->active = '1';

        $careers = Career::all();

        $products = DB::table('product')->where('status','=','Published')->take(3)->get();

        $news = News::all();

        $image1 = Images::find(1);
        $image2 = Images::find(2);
        
        return view('home.index', compact('abouts','footer','socials', 'slider', 'careers' ,'i', 'products', 'news', 'image1', 'image2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function emailPost(){
        $input = Input::all();

        $rules = array(
            'fullname'=>'required',
            'email'=>'required|email',
            'message'=>'required',
            'captcha'=>'required|captcha'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect()->back()->withErrors($validator);
        }else{

//            Mail::send('home.index', array(
//                'fullname'=>Input::input('fullname'),
//                'email'=>Input::input('email'),
//                'message'=>Input::input('message')
//            ), function($message){
//               $message->from('hynospt@gmail.com');
//                $message->to('hynospt@gmail.com', 'Admin')->subject('Feed back');
//            });
            $fullname = Input::input('fullname');
            $email = Input::input('email');
            $content = Input::input('message');
            $params = ['first_name' => $fullname, 'from' => $email];
            Mail::send('email.index',['fullname'=>$fullname, 'email'=>$email, 'body'=>$content], function($message)use($params)
                {
                    $message->to('hynospt@gmail.com', 'Haryono')->cc('nemanjazharyono@gmail.com')->from($params['from'],$params['first_name'])->subject('Dalea Contact Form');
                }
            );

            Mail::send('email.response',['fullname'=>$fullname, 'email'=>$email, 'body'=>$content], function($message)use($params)
                {
                    $message->to($params['from'], $params['first_name'])->from('hynospt@gmail.com','Haryono')->subject('Dalea Contact Form');
                }
            );

            Inbox::create($input);
            return redirect('/');
        }
    }
}