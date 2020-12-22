<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\customer;

class CustomerController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'username' => 'required|min:5',
            'name'     => 'required',
            'password' => 'required|min:8|max:16',
            'email'    => 'required',
            'mobile'   => 'required|min:10|max:14',
        ]);

        customer::create([
            "fullName" => $request->name,
            "email"    => $request->email,
            "password" => $request->password,
            "mobile"   => $request->mobile,
        ]);

//        return "done";
        return redirect('table');
    }

    public function view(){

        $user = customer::all();

        return view('users.index', [
            "x" => $user
        ]);
    }

    public function show($id){

        $x = customer::where('userid', $id)->get()->first();

        return view('users.show', [
            "user"=>$x
        ]);
    }

    public function viewData($id){

        $AllUsers = customer::where('userid', $id)->get()->first();

        return view('users.update', [
            "user"=>$AllUsers
        ]);
    }

    public function update(Request $request, $id){

        customer::where('userid', $id)->update([
            "fullName" => $request->fullName,
            "email"    => $request->email,
            "password" => $request->password,
            "mobile"   => $request->mobile,
        ]);

//        return "done";
        return redirect('table');
    }


    public function destroy($id) {

        customer::where('userid', $id)->delete();

        return redirect('table');
    }

}
