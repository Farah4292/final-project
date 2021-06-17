<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;



class commentController extends Controller
{
   function addComment(Request $req, $id){
       
    $data = $req->input();
    $comment = $data['comment'];  
    $addComment = new comment;

    
    if($req->session()->has('user')){
        
        $addComment->customer_id=$req->session()->get('user')->id;
        $addComment->product_id=$id;
        $addComment->comment=$comment;
        $addComment->save();
        return back();

    }
    else{
     return redirect("/customer_login");   

    }
   }
}
