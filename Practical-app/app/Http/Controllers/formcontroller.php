<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formcontroller extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function data(Request $request)
    {
        print_r($request->all());
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required | email',
            'password' => 'required'
        ]);
        $_students = new form();
        $_students->firstname = $request['firstname'];
        $_students->lastname = $request['lastname'];
        $_students->email = $request['email'];
        $_students->password = $request['password'];
        $_students->save();
        return redirect('std/view');
    }

    public function std_view()
    {
        $stdData = form::all();
        $data = compact('stdData');
        return view('std-view')->with($data);
    }

    public function std_dlt($id)
    {
        $find = form::find($id)->delete();
        print_r($find);
        return redirect('std/view');
    }
    public function std_edit($id)
    {
        $edit = form::find($id);
        $url = url("std/update") . "/" . $id;
        $records = compact('edit', 'url');
        return view('update')->with($records);
    }
    public function std_update($id, request $request)
    {
        $_student = form::find($id);
        $_student->firstname = $request['firstname'];
        $_student->lastname = $request['lastname'];
        $_student->email = $request['email'];
        $_student->password = $request['password'];
        $_student->save();
        return redirect('std/view');
    }
}
