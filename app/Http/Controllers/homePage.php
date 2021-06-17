<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\slider;
use Illuminate\Support\Facades\DB;
use App\Models\order;
use App\Models\customer;
use App\Models\cart;
use Session;
class homePage extends Controller
{
    function show(Request $req){
        $search = request()->query("search");
     
     
        if($search ){
            $product= product::where('category' , 'LIKE' , "%{$search}%")->Paginate(12);
           
                   } 
    elseif($search = "all"){
        $product= product::Paginate(12);
    }
        else{
            $product= product::Paginate(12);
        }

        $alldata= $product;
        $data = product::all();
      
        $customer_id = session()->get('user')->id;
        $count = cart::where('customer_id',$customer_id)->count();
     return view('homePage',["products"=>$data,"Allproducts"=>$alldata,"count"=>$count,"customer_id"=>$customer_id]);
        

    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
        $cart = new cart;
        $cart->customer_id=$req->session()->get('user')->id;
        //$value = Session::get('variableSetOnPageA');
        $cart->product_id=$req->product_id;
        $cart->total_price=$req->get('price');
        $cart->quantity=1;
        $cart->save();
        return redirect('/homePage');
        }
    else
    {
        return redirect('/customer_login');
    }

}
// static function CartItem(){
   
//     return view('homePage',["count"=>$count]);



// }
  
}
