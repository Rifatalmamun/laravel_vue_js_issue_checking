<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Cart;
class WelcomeController extends Controller
{
    public function index(){

        //$category = DB::table('categories')->get();

        return view('welcome'); 
    }

    public function test(){ 

        $data = Cart::content(); 
        return response()->json($data); 
        return $data; 

        return view('test');
    }

    public function testDelete($id){

        //return response('f32ba1b28f1b41f11faec012c6d09049');

        if(Cart::get($id)){
            Cart::remove($id);  
            // Cart::destroy();
            return response('Done');
        }else{
            return response('Not found Row ID');
        }

        }
}
