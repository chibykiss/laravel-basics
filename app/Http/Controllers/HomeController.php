<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(Request $request){
        // if($request->get('page')){
        //     return $request->get('page');
        // }
        if($request->page){
            return $request->page;
        }
       
    }
    public function getParamContact($id){
        $name = 'Vibe';
        //return view('contactWithParams', compact('id'));
        return view('contactWithParams')->with([
            'id' => $id,
            'name' => $name
        ]);
    }
}
