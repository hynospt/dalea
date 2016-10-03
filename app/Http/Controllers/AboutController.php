<?php

namespace App\Http\Controllers;

//temp
use App\About;
use App\AboutCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Redirect;
use App\Images;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $image1 = Images::find(1);
        $image2 = Images::find(2);
        
        $about = DB::table('about')->leftJoin('about_category', 'about_category.about_category_id' ,'=', 'about.category_id')
            ->select( 'about.id','about_category.about_category_name')->get();
//        return $about;
//        $about = About::all();
        return view('about.index')->with(['about'=>$about, 'image1'=>$image1, 'image2'=>$image2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = AboutCategory::all();

        return view('about/create')->with('categories', $categories);
    }

    public function create_image(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Requests\CreateHistoryRequest $request)
    public function store()
    {
        $input = Input::all();

        $id_exist = DB::table('about')->where('category_id', $input['category_id'])->count();


        $rules = array(
            'category_id'=>'required|unique:about',
            'content'=>'required',
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect('about/create')->withErrors($validator);
        }else{
            About::create($input);
            return redirect()->back();
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

        $image1 = Images::find(1);
        $image2 = Images::find(2);

        // print_r($images);exit;

        $about = DB::table('about')->leftJoin('about_category', 'about_category.about_category_id' ,'=', 'about.category_id')
            ->select('about.id','about_category.about_category_name','about.content')->where('about.id',$id)->first();

        return view('about.edit')->with(['about'=>$about , 'image1' => $image1, 'image2' => $image2]);
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

//        return $input;
//        exit;
        $rules = array(
            'content'=>'required',
        );
        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect()->back()->withErrors($validator);
        }else{
            About::find($input['id'])->update(['content'=>$input['content'] ]);
            return redirect('about/index');
        }
    }

    public function update_image(){
        
        $input = Input::all();
        $firstImg = Images::find(1);
        $secondImg = Images::find(2);

        $image1 = Input::file('image1');
        $image2 = Input::file('image2');
        $destinationPath = public_path() . '/images/directors';

        if($image1){
            $extension_1 = Input::file('image1')->getClientOriginalExtension();
            $fileName_1 = 'director'.rand(11111,99999).'.'.$extension_1;
            Input::file('image1')->move($destinationPath, $fileName_1);

            $image1_old = Input::input('image1_old');
            $image1_old_path = public_path() . '/images/directors/' . $image1_old;

            if(file_exists($image1_old_path)){
                unlink($image1_old_path);
            }

            $firstImg->image_name = $fileName_1;
            $firstImg->update();
        }

        if($image2){
            $extension_2 = Input::file('image2')->getClientOriginalExtension();
            $fileName_2 = 'director'.rand(11111,99999).'.'.$extension_2;
            Input::file('image2')->move($destinationPath, $fileName_2);

            $image2_old = Input::input('image2_old');
            $image2_old_path = public_path() . '/images/directors/' . $image2_old;

            if(file_exists($image2_old_path)){
                unlink($image2_old_path);
            }

            $secondImg->image_name = $fileName_2;
            $secondImg->update();
        }

        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrfail($id);

        $about->delete();

        return redirect('about/index');
    }
}
