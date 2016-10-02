<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Redirect;
use Illuminate\Http\Response;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $file = ['slider_name' => Input::file('slider_name')];
        $rules = array(
            'slider_name'=>'required|mimes:jpg,jpeg,png'
        );
        $validator = Validator::make($file, $rules);
        if($validator->fails()){
            $messages = $validator->messages();
            return redirect('slider/create')->withErrors($validator);
        }else{
            $destinationPath = public_path().'/images/slider';
            $extension = Input::file('slider_name')->getClientOriginalExtension();
            $fileName = Carbon::now()->format('Y-m-d').rand(11111,99999).'.'.$extension;
            Input::file('slider_name')->move($destinationPath, $fileName);
            $file = ['slider_name' => $fileName];
            Slider::create($file);
            return redirect('slider/index');
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
        $slider = Slider::find($id);
        return view('slider.edit')->with(['slider'=>$slider]);
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
        $file = Input::file('slider_name');


        if($file){
            $destinationPath = public_path().'\images\slider';
            $extension = Input::file('slider_name')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('slider_name')->move($destinationPath, $fileName);

            $fileNM = $input['old_slider'];
            $dist_del = public_path().'/images/slider/'.$fileNM;

            if(file_exists($dist_del)) {
                unlink($dist_del);
            }

            $slide = Slider::find($input['slider_id']);
            $slide->slider_name = $fileName;
            $slide->update();
            return redirect('slider/index');
        }else{
            return redirect('/slider/index');
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
        $sliders = Slider::find($id);
        $dist_del = public_path().'/images/slider/'.$sliders['slider_name'];

        if(file_exists($dist_del)){
            unlink($dist_del);
        }
        $sliders->delete();
        return redirect('slider/index');
    }
}
