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

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $about = DB::table('about')->leftJoin('about_category', 'about_category.about_category_id' ,'=', 'about.category_id')
            ->select( 'about.id','about_category.about_category_name')->get();
//        return $about;
//        $about = About::all();
        return view('about.index')->with(['about'=>$about]);
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
        $about = DB::table('about')->leftJoin('about_category', 'about_category.about_category_id' ,'=', 'about.category_id')
            ->select('about.id','about_category.about_category_name','about.content')->where('about.id',$id)->first();

        return view('about.edit')->with(['about'=>$about]);
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
