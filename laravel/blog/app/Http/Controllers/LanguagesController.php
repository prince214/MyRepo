<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function List(){
    $languages = ['Java','Python','C++','C#'];
    return view('welcome',['lang'=>$languages]);
    }
}
