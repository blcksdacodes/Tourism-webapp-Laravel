<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function profil(){
        return view('profil');
    }

    public function updateProfil(Request $request, $user_id){
        DB::table('users')->where('id', $user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return view('home');
    }

    public function adminHome(){
        $users = User::all();
        return view('adminHome')->with('users', $users);
    }

    public function deleteUser($user_id){

        DB::table('users')->where('id', $user_id)->delete();
        return view('home');
    }
}
