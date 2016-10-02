<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\footer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Social;
class ConfigurationController extends Controller
{
    public function footer_index($id){
        $footer = footer::find($id);
        return view('configurations.footer')->with(['footer'=>$footer]);
    }
    public function footer_update(){
        $input = Input::all();

        $rules = array(
            'content'=>'required'
        );
        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect()->back()->withErrors($validator);
        }else{
            footer::find($input['footer_id'])->update(['content'=>$input['content']]);
            return redirect('configurations/social/index');
        }
    }

    public function social_index(){
        $socialList = Social::all();
        return view('configurations.social')->with(['socialList'=>$socialList]);
    }

    public function social_edit($id){
        $socialList = Social::find($id);

        return view('configurations.socialEdit')->with(['socialList'=>$socialList]);
    }

    public function social_update(){
        $input = Input::all();

        $rules = array(
            'social_link'=>'required'
        );
        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect()->back()->withErrors($validator);
        }else{
            Social::find($input['social_id'])->update(['social_link'=>$input['social_link']]);
            return redirect('configurations/social/index');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
}
