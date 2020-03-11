<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogorcatController extends Controller
{
    //
    public function index()
    {
      return view('index');
      //indexを書き換えると色々なページが作れる
    }
    
   
}