<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\cart;
use App\Models\comment;
use App\Models\customer;
use Session;
class detailscontroller extends Controller
{
   



    function detail($id)
    {

        $data = product::find($id);
        $customer_id = session()->get('user')->id;
        $count = cart::where('customer_id',$customer_id)->count();
        $comment = DB::select("select co.id, co.comment, co.created_at, cu.name From comments as co inner join customers as cu on co.customer_id=cu.id where co.product_id={$id}");
        return view('details',['product'=>$data,'count'=>$count,"customer_id"=>$customer_id,'comment'=>$comment]);
      
       
    }
    function delete($id)
{

    $data=comment::find($id);
    $data->delete();
    return redirect('details');
}

    function addToCartOrComment(Request $req, $id)
    {
        if($req->get('type') == 1){
            $data = $req->all();
     
            $addToCart = new cart;
        
            
            if($req->session()->has('user')){
                
                $addToCart->customer_id=$req->session()->get('user')->id;
                $addToCart->product_id=$id;
                $addToCart->quantity=1;
                $addToCart->total_price=$req->get('price');
                $addToCart->save();
                return back();

            }
            else{
            return redirect("/customer_login");   

            }
        }
         else if($req->get('type') == 2){
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

    
}
