<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\customer;
use App\Models\product;
use App\Models\order;

use Session;
class cartController extends Controller
{
    
        function show(Request $req){

          if($req->session()->has('user')){
            $cart = new cart;
            $orders = new order;
            $customer_id=$req->session()->get('user')->id;
            $carts= DB::select("select c.id, c.total_price, c.quantity, p.name,p.price, p.image, p.description From carts as c inner join products as p on c.product_id=p.id where c.customer_id=${customer_id}");
         return view('Cart',["carts"=>$carts,"order"=>$orders]);
        
          }
          else
          {
              return redirect('/customer_login');
          }
        }
        function deleteCart($id)
                {

                    $data=cart::find($id);
                    $data->delete();
                    return redirect('Cart');
                }


                function AddOrder(Request $req )
                {
                  $id = $req->input('id');  //id cart
                 
                  $Customerlocation = $req->input('Customerlocation');  //id cart
                    $UserId =session()->get('user')->id;
                    $cart = cart :: where('customer_id',$UserId)->where('id', $id)->get();
                    $customer = customer :: where('id',$UserId)->get();
                     $order = new order;
                     $order -> customer_id =  $UserId;
                     $order -> product_id =  $cart[0]->product_id;
                    
                     $order -> states = 'on the queue';
                     $order -> total_price= $cart[0]->total_price * $req->quantity ;
                     $order->quantity=$req->quantity;
                     $order->phone=$customer[0]->phone;
                     $order->name=$customer[0]->name;
                     $order->address=$Customerlocation;
                     $tot = $req->quantity;
                     $order->save();
                   return redirect('checkout');
                }
              }

