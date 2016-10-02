<?php

namespace App\Http\Controllers;

use App\footer;
use App\Products;
use App\ProductDetails;
use App\Social;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::with('product_detail')->get();
//        return $products;exit;
        return view('product.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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

        $rules = array(
            'product_name'=>'required',
            'product_image'=>'required|mimes:jpg,jpeg,png',
            'product_over_image'=>'required|mimes:jpg,jpeg,png',
            'product_slider_1' =>'required|mimes:jpg,jpeg,png',
            'product_slider_2' =>'required|mimes:jpg,jpeg,png',
            'product_slider_3' =>'required|mimes:jpg,jpeg,png',
            'product_detail_header' =>'required|mimes:jpg,jpeg,png',
            'product_detail_image' =>'required|mimes:jpg,jpeg,png',
            'product_tag'=>'required',
            'product_detail_map'=>'required'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect('product/create')->withErrors($validator);
        }else{
            $destinationPath = public_path().'/images/products';
            $sliderPath = public_path().'/images/products/slider';
            $extension = Input::file('product_image')->getClientOriginalExtension();
            $extension_2 = Input::file('product_over_image')->getClientOriginalExtension();

            $slider1_ext = Input::file('product_slider_1')->getClientOriginalExtension();
            $slider2_ext = Input::file('product_slider_2')->getClientOriginalExtension();
            $slider3_ext = Input::file('product_slider_3')->getClientOriginalExtension();

            $logoExt = Input::file('product_detail_header')->getClientOriginalExtension();
            $detailImageExt = Input::file('product_detail_image')->getClientOriginalExtension();

            $fileName = 'main-product'.rand(11111,99999).'.'.$extension;
            $fileName_2 = 'overlay-product'.rand(11111,99999).'.'.$extension_2;

            $fileName_slider_1 = 'product-slider'.rand(11111, 99999).'.'.$slider1_ext;
            $fileName_slider_2 = 'product-slider'.rand(11111, 99999).'.'.$slider2_ext;
            $fileName_slider_3 = 'product-slider'.rand(11111, 99999).'.'.$slider3_ext;

            $fileNameLogo = 'product-logo'.rand(11111,99999).'.'.$logoExt;
            $fileNameDetailImage = 'product-detail'.rand(11111,99999).'.'.$detailImageExt;

            Input::file('product_slider_1')->move($sliderPath, $fileName_slider_1);
            Input::file('product_slider_2')->move($sliderPath, $fileName_slider_2);
            Input::file('product_slider_3')->move($sliderPath, $fileName_slider_3);
            Input::file('product_image')->move($destinationPath, $fileName);
            Input::file('product_over_image')->move($destinationPath, $fileName_2);
            Input::file('product_detail_header')->move($destinationPath, $fileNameLogo);
            Input::file('product_detail_image')->move($destinationPath, $fileNameDetailImage);

            $productSliders = [$fileName_slider_1, $fileName_slider_2, $fileName_slider_3];
//            return $productSliders;exit;
            $productName = Input::input('product_name');
            $productTag = Input::input('product_tag');
            $product_detail_description = Input::input('product_detail_description');
            $product_detail_map = Input::input('product_detail_map');

            $input = [
                'product_image'=>$fileName,
                'product_over_image'=>$fileName_2,
                'product_name'=>$productName,

                //Create Detail Attribute
                'product_detail_slider_image'=>json_encode($productSliders),
                'product_tag'=>$productTag,
                'product_detail_description'=>$product_detail_description,
                'product_detail_map'=>$product_detail_map,
                'product_detail_header'=>$fileNameLogo,
                'product_detail_image'=>$fileNameDetailImage,
            ];

            //Products::create($input);
            Products::create($input)->product_detail()->create($input);
            return redirect('product/index');
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
//        $productDetail = ProductDetails::find($id);

        $products = Products::with('product_detail')->findOrFail($id);

        $footer = footer::all();

        $socials = Social::all()->toArray();

        $publishedProducts = DB::table('product')->where('status','=','Published')->take(3)->get();

        return view('product.detail')->with(['product'=>$products, 'socials'=>$socials, 'footer'=>$footer, 'publishedProducts'=>$publishedProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::with('product_detail')->find($id);
//        $img=json_decode($product->product_detail->product_detail_slider_image);
//        dd($img[0]);exit;
        return view('product.edit')->with(['product'=>$product]);
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
        DB::beginTransaction();
        try {
            $product_image = Input::file('product_image');
            $product_over_image = Input::file('product_over_image');

            $product_detail_header = Input::file('product_detail_header');
            $product_detail_image = Input::file('product_detail_image');

//            $product = Products::find($input['product_id']);
            $product = Products::with('product_detail')->find($input['product_id']);

            $destinationPath = public_path() . '/images/products';

            if ($product_image) {
                $product_image_extension = Input::file('product_image')->getClientOriginalExtension();
                $product_image_filename = 'main-product' . rand(11111, 99999) . '.' . $product_image_extension;
                Input::file('product_image')->move($destinationPath, $product_image_filename);
                $product_image_filename_old = Input::input('product_image_old');
                $product_image_delPath = public_path() . '/images/products/' . $product_image_filename_old;
                if (file_exists($product_image_delPath)) {
                    unlink($product_image_delPath);
                }
                $product->product_image = $product_image_filename;
            }

            if ($product_over_image) {
                $product_over_image_extension = Input::file('product_over_image')->getClientOriginalExtension();
                $overlay_image_filename = 'overlay-product' . rand(11111, 99999) . '.' . $product_over_image_extension;
                Input::file('product_over_image')->move($destinationPath, $overlay_image_filename);
                $overlay_image_filename_old = Input::input('product_over_image_old');
                $product_over_image_delPath = public_path() . '/images/products/' . $overlay_image_filename_old;
                if (file_exists($product_over_image_delPath)) {
                    unlink($product_over_image_delPath);
                }
                $product->product_over_image = $overlay_image_filename;
            }

            if ($product_detail_header) {
                $product_detail_header_extension = Input::file('product_detail_header')->getClientOriginalExtension();
                $product_header_filename = 'product-header' . rand(11111, 99999) . '.' . $product_detail_header_extension;
                Input::file('product_detail_header')->move($destinationPath, $product_header_filename);
                $product_header_filename_old = Input::input('product_detail_header_old');
                $product_detail_header_delPath = public_path() . '/images/products/' . $product_header_filename_old;
                if (file_exists($product_detail_header_delPath)) {
                    unlink($product_detail_header_delPath);
                }
                $product->product_image = $product_header_filename;
            }

            if ($product_detail_image) {
                $product_detail_image_extension = Input::file('product_detail_image')->getClientOriginalExtension();
                $product_detail_image_filename = 'product-det' . rand(11111, 99999) . '.' . $product_detail_image_extension;
                Input::file('product_detail_image')->move($destinationPath, $product_detail_image_filename);
                $product_detail_image_filename_old = Input::input('product_detail_image_old');
                $product_detail_image_filename_delPath = public_path() . '/images/products/' . $product_detail_image_filename_old;
                if (file_exists($product_detail_image_filename_delPath)) {
                    unlink($product_detail_image_filename_delPath);
                }
                $product->product_over_image = $product_detail_image_filename_old;
            }

            $product_slider1 = Input::file('product_slider_0');
            $product_slider2 = Input::file('product_slider_1');
            $product_slider3 = Input::file('product_slider_2');
            $slider= [];
            if ($product_slider1) {
                $product_slider1_extension = Input::file('product_slider_0')->getClientOriginalExtension();
                $product_slider1_filename = 'slider' . rand(11111, 99999) . '.' . $product_slider1_extension;
                Input::file('product_slider_0')->move($destinationPath.'/slider/', $product_slider1_filename);
                $product_slider1_old = Input::input('product_slider_old_0');
                $product_slider1_delPath = public_path() . '/images/products/slider/' . $product_slider1_old;
                if (file_exists($product_slider1_delPath)) {
                    unlink($product_slider1_delPath);
                }
                $slider[0]=$product_slider1_filename;
            }else{
                $slider[0]= $input['product_slider_old_0'];
            }

            if ($product_slider2) {
                $product_slider2_extension = Input::file('product_slider_1')->getClientOriginalExtension();
                $product_slider2_filename = 'slider' . rand(11111, 99999) . '.' . $product_slider2_extension;
                Input::file('product_slider_1')->move($destinationPath.'/slider/', $product_slider2_filename);
                $product_slider2_filename_old = Input::input('product_slider_old_1');
                $product_slider2_filename_delPath = public_path() . '/images/products/slider/' . $product_slider2_filename_old;
                if (file_exists($product_slider2_filename_delPath)) {
                    unlink($product_slider2_filename_delPath);
                }
                $slider[1]=$product_slider2_filename;
            }else{
                $slider[1]= $input['product_slider_old_1'];
            }
            if ($product_slider3) {
                $product_slider3_extension = Input::file('product_slider_2')->getClientOriginalExtension();
                $product_slider3_filename = 'slider' . rand(11111, 99999) . '.' . $product_slider3_extension;
                Input::file('product_slider_2')->move($destinationPath.'/slider/', $product_slider3_filename);
                $product_slider3_old = Input::input('product_slider_old_2');
                $product_slider3_delPath = public_path() . '/images/products/slider/' . $product_slider3_old;
                if (file_exists($product_slider3_delPath)) {
                    unlink($product_slider3_delPath);
                }
                $slider[2]=$product_slider3_filename;
            }else{
                $slider[2]= $input['product_slider_old_2'];
            }

            $product->product_detail()->update([
               'product_detail_slider_image' => json_encode($slider)
            ]);
            $product->product_name = trim($input['product_name']);
            $product->product_detail->product_tag = trim($input['product_tag']);
            $product->product_detail->product_detail_description = trim($input['product_detail_description']);
            $product->product_detail->product_detail_map = $input['product_detail_map'];
            $product->product_detail->update();
            DB::commit();
            return redirect('product/index');
        }catch (\Exception $msg){
            DB::rollback();
            return redirect()->back();
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

        //$product = Products::find($id);
        $product = Products::with('product_detail')->findOrFail($id);
        $detail_prodSlider = json_decode($product->product_detail->product_detail_slider_image);
        $dist_del = public_path().'/images/products/'.$product['product_image'];
        $dist_del2 = public_path().'/images/products/'.$product['product_over_image'];

        $product_image_delPath = public_path() . '/images/products/' . $product->product_image;

        $product_over_image_delPath = public_path() . '/images/products/' . $product->product_over_image;

        $product_detail_header_delPath = public_path() . '/images/products/' . $product->product_detail->product_detail_header;

        $product_detail_image_filename_delPath = public_path() . '/images/products/' . $product->product_detail->product_detail_image;

        $product_slider1_delPath = public_path() . '/images/products/slider/' . $detail_prodSlider[0];

        $product_slider2_delPath = public_path() . '/images/products/slider/' . $detail_prodSlider[1];

        $product_slider3_delPath = public_path() . '/images/products/slider/' . $detail_prodSlider[2];

        if(file_exists($product_image_delPath)) {
            unlink($product_image_delPath);
        }
        if(file_exists($product_over_image_delPath)){
            unlink($product_over_image_delPath);
        }
        if(file_exists($product_detail_header_delPath)){
            unlink($product_detail_header_delPath);
        }
        if(file_exists($product_detail_image_filename_delPath)){
            unlink($product_detail_image_filename_delPath);
        }
        if(file_exists($product_slider1_delPath)){
            unlink($product_slider1_delPath);
        }
        if(file_exists($product_slider2_delPath)){
            unlink($product_slider2_delPath);
        }
        if(file_exists($product_slider3_delPath)){
            unlink($product_slider3_delPath);
        }
        $product->delete();

        return redirect('product/index');
    }

    public function publish($id){
        $publish = Products::find($id);

        $publishCheck = DB::table('product')->where('status','=','Published')->count();
//        return $publishCheck; exit;
        if($publishCheck < 3){
            $publish->status = "Published";
            $publish->update();
        }
        return redirect('product/index');
    }

    public function remove($id){
        $publish = Products::find($id);

        $publish->status = "Unpublished";
        $publish->update();

        return redirect('product/index');
    }

}
