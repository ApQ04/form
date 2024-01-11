<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";
    function _construct() //MyController
    { 
      
    }
    public function index(){
        return view('welcome');
    }
    public function store($request $req){
        $data['myinput'] = $req->input('myinput')
        return view('myroute',$data)
    }
}
