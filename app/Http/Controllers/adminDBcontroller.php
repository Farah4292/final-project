<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
//use App\Models\slider;
use Illuminate\Support\Facades\DB;
use App\Models\order;
use App\Models\customer;
class adminDBcontroller extends Controller
{
    function show(){
        $data= product::Paginate(12);
       // $dataslider= slider::all();
        $order=order::Paginate(12);
     return view('adminDashbord',["products"=>$data , "order"=>$order]);
      
       
    }
   
    ////////////////////
    function addData(Request $req)
   {
       $addproduct = new product;
       $addproduct->name=$req->name;
       $addproduct->states=$req->states;
       $addproduct->price=$req->price;
       $addproduct->description=$req->description;
       $addproduct->brand=$req->brand;
       $addproduct->category=$req->category;
       //$path = $req->file('image')->store('img');
       if($req->hasFile('image'))
       {
           $filenamewithExt = $req->file('image')->getClientOriginalName();
           $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
           $extension = $req->file('image')->getClientOriginalExtension();
           $filenameToStore = $filename . '.' . $extension;
           $path = $req->file('image')->storeAs('public/uploads',$filenameToStore);
           $addproduct->image=$filenameToStore;
       }
       else{
           $filenameToStore = 1;
       }
       $addproduct->save();
           return redirect('adminDashbord');    
   }
/////////////////update data in the table////////////

function delete($id)
{

    $data=product::find($id);
    $data->delete();
    return redirect('adminDashbord');
}
function deleteOrder($id)
{

    $data=order::find($id);
    $data->delete();
    return redirect('adminDashbord');
}
function editData($id)
{
    $data= product::find($id);
    return view('update',['data'=>$data]);
}
   function update(Request $req)
   {
      $data = product::find($req->id);
       $data->name = $req->name;
       $data->states = $req->states;
       $data->description = $req->description;
       $data->price = $req->price;
       $data->brand = $req->brand;
       $data->category = $req->category;
       $data->image = $req->image;
       $data->save();
       return redirect('adminDashbord');
   }

   ///////////
    

   
}
