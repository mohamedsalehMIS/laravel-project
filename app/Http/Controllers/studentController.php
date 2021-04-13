<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    /* public function creatStudent(Request $request) {
        echo 
                'student title: '   . $request->title   . '<br>' .
                'student cat: '     . $request->cat     . '<br>' .
                'student age: '     . $request->age     . '<br>';
    }

    public function display() {
        //return view('index', ['name' => 'ah', 'age' => 'ahmed', 'email' => 'ahmed']);
    } */

    public function request(Request $request) {
        echo $request->url();
    }
}

