<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(10);

        return view('Student.display', ['Students' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.add', ['title' => 'Add Student']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $this->validate(request(),[
            'name'     => 'required|min:5|max:25',
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        $data['password'] = bcrypt($data['password']);

        $op =  User::create($data);

        if($op){

            $message = "data inserted";

        }else{

            $message = "Error in insertion"; 
        }
        return redirect('Student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('Student.edit', ['student_data' => $data, 'title' => 'Edit Student']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =  $this->validate(request(),[
            'name'     => 'required|min:5|max:25',
            'email'    => 'required|email',
        ]);

        $op =  User::where('id', $id)->update($data);

        if($op){

            $message = "data inserted";

        }else{

            $message = "Error in insertion"; 
        }

        return redirect('Student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->delete();

        return redirect('Student');
    }
}
