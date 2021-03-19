<?php


namespace App\Http\Controllers;


class Iframe extends Controller
{
    public function index(){
        return view('iframe.index');
    }
    public function main(){
        return view('iframe.main');
    }
    public function empty(){
        $data['name'] = request()->path();
        return view('iframe.empty',$data);
    }
}
