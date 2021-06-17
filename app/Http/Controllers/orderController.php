<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\order;
class orderController extends Controller
{
    function show(){
        $order=order::Paginate(5);
     return view('ordertable',["order"=>$order]);
      
       
    }
    function editOrder($id)
{
    $data= order::find($id);
    return view('updateOrder',['data'=>$data]);
}
   function updateOrder(Request $req, $id)
   {
       $data = $req->input();
       $states = $data['states'];
      DB::update("update orders set states='{$states}' where id={$id}");
       return redirect("ordertable");
   }
}
