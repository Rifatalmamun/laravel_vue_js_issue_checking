<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
class MainController extends Controller
{
    public function userLogout(){

        Auth::logout();
        
        return Redirect()->route('welcome');

    }

    public function VueUserLogout(){
        Auth::logout();
    }
}
