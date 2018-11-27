<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Response;
use Cookie;
use CookieJar;
use Illuminate\Http\Request;
use DB;

class mainController extends Controller
{
    public function index(){
        $value = Cookie::get('userLogon');
        if(!empty($value)){
            return redirect('/dashboard');
        }else{
            echo $value;
            return view('welcome');
        }

    }
    public function editdata(Request $request){
        $viewer  = DB::table('guests_dbs')->where('id',$request->id)->first();
        if(!empty($viewer)){
            try{
                return view('edit',['viewer' => $viewer]);
            }
            catch(Exception $e){
                abort("we Dont Know!");
            }
        }else{
            return redirect('/');
        }
    }
    public function store(Request $request){
        $response = new \Illuminate\Http\Response(view('dashboard'));
        $time = 15;
        $storeNama = $request->Name;
        $response->withCookie(cookie('userLogon',$storeNama,$time));
        return $response;
    }
}
