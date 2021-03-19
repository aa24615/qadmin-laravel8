<?php


namespace App\Http\Controllers;


class Html extends Controller
{
    public function index(){
        return view('html.index');
    }
    public function empty(){
        $data['name'] = request()->path();
        return view('html.empty',$data);
    }
}
