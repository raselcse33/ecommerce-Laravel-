<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\BasicSetting;
use App\User;
use Auth;

class SettingController extends Controller
{
    public function createProfile(){

        $data['user'] = User::where('email',Auth::user()->email)->first();
    	return view('admin.profile.create_profile',$data);
    }

   //update profile
    public function updateProfile(Request $request,$id)
    {
      
      $request->validate([
      	'name'=>'required',
      	'email'=> 'required|email|unique:users,email,'.$id,
        'password'=>'nullable|min:6',
        'password_confirmation'=>'nullable|min:6'
     ]);

      $id = $request->id;
      $data['password'] = $request->password;
      $data['password_confirmation'] = $request->password_confirmation;
      
      if($data['password'] === $data['password_confirmation']){
         
         $user = User::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         if($data['password']){
         	 $user->password =  Hash::make($data['password']);
         }
        
         $user->save();
         return redirect()->back()->with('message','update Successfully');

      }else{
      	return redirect()->back()->with('alert','oops! something went wrong');
      }


    }


    //Basic Setting Page Create

    public function createBasicSetting(){

      $data['setting'] = BasicSetting::first();
      return view('admin.settings.basic_setting',$data);
    }

    //store basic setting

    public function storeBasicSetting(Request $request){

         $this->validate($request, [
            'name' => 'required|string',
            'slogan' => 'required|string',
            'email' => 'required',
            'phone' => 'required|max:11|min:11',
            'content' => 'required',
            'address' => 'required',
            'map_link'=>'required',
            'logo' => 'mimes:jpg,png,jpeg',
            'icon' => 'mimes:jpg,png,jpeg',
        ]);

        $old_setting = BasicSetting::first();
        $image = $request->file('logo');
        $icon = $request->file('icon');
        if ($image) {
            $uploadPath = 'public/images/setting/logo/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = 'logo'.time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $imageun = @$old_setting->logo;
            @unlink('public/images/setting/logo/' . $imageun);
        } else {
            $imageUrl = @$old_setting->logo;
        }
       
        if ($icon) {
            $uploadPath = 'public/images/setting/icon/';
            $imageEx = $icon->getClientOriginalExtension();
            $imageName = 'icon'.time() . '.' . $imageEx;
            $iconUrl = $imageName;
            $icon->move($uploadPath, $imageName);
            $imageun = @$old_setting->icon;
            @unlink('public/images/setting/icon/' . $imageun);
        } else {
            $iconUrl = @$old_setting->icon;
        }

        $setting = BasicSetting::firstOrNew(array('name' => @$old_setting->name));
        $setting->name = $request->name;
        $setting->slogan = $request->slogan;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->content = $request->content;
        $setting->address = $request->address;
        $setting->map_link = $request->map_link;

        $setting->logo = $imageUrl;
        $setting->icon = $iconUrl;
        $setting->save();
        return redirect('/basic/setting')->with('message', 'Basic Setting Saved Successfully');
    }
  
}
