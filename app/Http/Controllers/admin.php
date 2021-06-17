<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class admin extends Controller
{
    function login(Request $req){
        // get data from db
        $query = DB::select("select email, password from admins");
        //split data returned from db as array of object
        $email = $query[0]->email;
        $password = $query[0]->password;

        //get data from client 
        $data=$req->input();
        //check if data from client as the same with data from db
        if($data['email'] == $email && $data['password'] == $password){
            $req->session()->put('email', $data['email']);
            return redirect('adminDashbord');
        }
        else {
            return redirect('admin/login');
        }
    }
}
