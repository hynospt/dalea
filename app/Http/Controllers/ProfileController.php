<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        //
    }
    public function edit($id)
    {
        return view('profile.edit')->with(['profile'=>User::findOrFail($id)]);
    }
    public function update(){
        $input = Input::all();
        $rules = array(
            'confirmNewPassword'=>'same:new_password',
            'new_password'=>'same:confirmNewPassword'
        );
        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            $messages = $validator->messages();
            return redirect()->back()->withErrors($validator);
        }else{
            if(empty($input['new_password'])){
                User::find($input['id'])->update(['name'=>$input['name'], 'email'=>$input['email']]);
                return redirect('profile/edit/'.$input['id']);
            }
            User::find($input['id'])->update(['name'=>$input['name'], 'email'=>$input['email'], 'password'=>bcrypt($input['new_password'])]);
            return redirect('profile/edit/'.$input['id']);
        }

    }

}
