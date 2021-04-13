<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function myProfile(){

        return view('profile.view_profile');
    }

    public function passwordChangeForm(){

        return view('profile.passwordChangeForm'); 
    }

    public function passwordChangeRequest(Request $request){

        DB::table('users')->where('id',Auth::user()->id)->update(['p'=>$request->new_password]);

        $email = Auth::user()->email;
        $inputEmail = $request->email;

        if($email!=$inputEmail){

            $notification=array(
                'messege'=>'Email not found!',
                'alert-type'=>'error'
                 );
                 return Redirect()->back()->with($notification);
        }

        $password=Auth::user()->password;

        $oldpass=$request->old_password;
        $newpass=$request->new_password;
        $confirm=$request->con_password;
  
        if (Hash::check($oldpass,$password)) {
             if ($newpass === $confirm) {
                        if(strlen($newpass)<8){
                          $notification=array(
                              'messege'=>'Password length must be greater or equeal 8',
                              'alert-type'=>'error'
                               );
                               return Redirect()->back()->with($notification);
                        }else{
                          $user=User::find(Auth::id());
                          $user->password=Hash::make($request->new_password);
                          $user->save();
                          Auth::logout(); 

                          $notification=array(
                            'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                            'alert-type'=>'success'
                             );
                           return Redirect()->route('login')->with($notification); 
                          }
                        
                   }else{
                       $notification=array(
                          'messege'=>'New password and Confirm Password not matched!',
                          'alert-type'=>'error'
                           );
                         return Redirect()->back()->with($notification);
                      }     
              }else{
                      $notification=array(
                              'messege'=>'Old Password not matched!',
                              'alert-type'=>'error'
                              );
                          return Redirect()->back()->with($notification);
                  }

    }
}
