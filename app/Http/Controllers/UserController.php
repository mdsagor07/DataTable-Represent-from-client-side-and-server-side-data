<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store( Request $request)
    {

        //dd($request->all());

        $users = new User;

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password =  bcrypt($request->password);


        $users->save();

        return redirect()->back();


    }

    public function delete($id)
    {

        $users=User::FindOrFail($id);
        $users->delete();
        return redirect()->back();


    }

    public function update(Request $request,$id)
    {
        $users=User::FindOrFail($id);
        // $users->name=$request->name;
        // $users->email=$request->email;
        // $users->password=$request->password;
        // $users->update();
        $users->update($request->all());
        
        return redirect()->back();
    }
}
