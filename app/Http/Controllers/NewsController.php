<?php

namespace App\Http\Controllers;

use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news.index')->with(['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = Input::all();
        $file = ['slider_name' => Input::file('slider_name')];

        $rules = array(
            'news_title'=>'required',
            'news_image'=>'required|mimes:jpg,jpeg,png',
            'posting_date'=>'required|date'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect('news/create')->withErrors($validator);
        }else{

            $destinationPath = public_path().'/images/news';
            $extension = Input::file('news_image')->getClientOriginalExtension();
            $fileName = Carbon::now()->format('Y-m-d').rand(11111,99999).'.'.$extension;
            Input::file('news_image')->move($destinationPath, $fileName);
            $file = ['news_image' => $fileName];

            $newsTitle = Input::input('news_title');
            $dateposting = Input::input('posting_date');

//            return $dateposting;exit;

            $input = ['news_title'=>$newsTitle, 'news_image'=>$fileName, 'posting_date'=>$dateposting];

            News::create($input);
            return redirect('news/index');
        }
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
        $news = News::find($id);
        return view('news.edit')->with(['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $input = Input::all();
        $file = Input::file('news_image');


        if($file){
            $destinationPath = public_path().'\images\news';
            $extension = Input::file('news_image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('news_image')->move($destinationPath, $fileName);

            $fileNM = $input['old_image'];
            $dist_del = public_path().'/images/news/'.$fileNM;

            if(file_exists($dist_del)) {
                unlink($dist_del);
            }

            $news = News::find($input['news_id']);
            $news->news_image = $fileName;
            $news->news_title = $input['news_title'];
            $news->posting_date = $input['posting_date'];
            $news->update();
            return redirect('news/index');
        }elseif(!$file){
            $news = News::find($input['news_id']);
            $news->news_title = $input['news_title'];
            $news->posting_date = $input['posting_date'];
            $news->update();
            return redirect('news/index');
        }else{
            return redirect('/news/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $dist_del = public_path().'/images/news/'.$news['news_image'];

        if(file_exists($dist_del)){
            unlink($dist_del);
        }
        $news->delete();
        return redirect('news/index');
    }
}
