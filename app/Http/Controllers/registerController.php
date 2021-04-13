<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function createUser() {
        return view('formRegister', ['title' => 'register']);
    }

    public function store(Request $request) {

        $data = $this->validate(request(), [

            'name'          => 'required|min:6|max:25|string',
            'age'           => 'required|string|max:120',
            'phone'         => 'required|digits:11',
            'national_id'   => 'required|digits:14',
            'password'      => 'required|string|min:8|max:50',
            'address'       => 'required|string|max:30',
            'about'         => 'string|nullable|max:50'
        ]);

        $data['password'] = bcrypt($data['password']);

        $op = users::create($data);

        if($op) {
            $message = 'Data inserted';
        } else {
            $message = 'Error in insert data';
        }

        return redirect('displayUsers');
    }

    public function display() {
        $data = users::paginate(15);
        return view('displayUsers', ['userData' => $data]);
    }

    public function delete(Request $request) {
        $id = $request->id;

        $op = users::where('id', $id)->delete();

        return redirect('displayUsers');

    }

    public function edit(Request $request) {

        $data = users::find($request->id);

        return view('editUser', ['user_data' => $data, 'title' => 'edit user']);
    }


    public function update(Request $request) {

        $data = $this->validate(request(), [

            'name'          => 'required|min:6|max:25|string',
            'age'           => 'required|string|max:120',
            'phone'         => 'required|digits:11',
            'national_id'   => 'required|digits:14',
            'address'       => 'required|string|max:30',
            'about'         => 'string|nullable|max:50'
        ]);

        $op = users::where('id', $request->id)->update($data);

        if($op) {
            echo 'data inserted';
        } else {
            echo 'error in insert';
        }
        return redirect('displayUsers');
    }

}
