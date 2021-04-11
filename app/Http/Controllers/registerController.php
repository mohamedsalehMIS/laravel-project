<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function createUser() {
        return view('formRegister', ['title' => 'register']);
    }

    public function store(Request $request) {
        $this->validate(request(), [
            'name'          => 'required|min:6|max:15|string',
            'age'           => 'required|string|max:120',
            'phone'         => 'required|string|max:12',
            'national-id'   => 'required|string|min:14|max:15',
            'password'      => 'required|string|min:8|max:50',
            'address'       => 'required|string|max:30',
            'about-me'      => 'string|max:50'
        ]);
    }
}
