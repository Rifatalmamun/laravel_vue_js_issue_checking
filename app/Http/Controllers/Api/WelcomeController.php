<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class WelcomeController extends Controller
{
    public function getWelcomeProduct(){
        
        $data = DB::table('products')->get(); 

        return response()->json($data); 
    }   
}
