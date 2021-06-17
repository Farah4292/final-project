<?php

namespace App\Http\Controllers;
use App\Models\slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\product;
class sliderController extends Controller
{

//     function editSlider($id)
//     {
//         $product= product::all();
//         $data= slider::find($id);
//         return view('updateSlider',['data'=>$data],['products'=>$product]);
//     }
//     //////////////////////update slider///////////////////////
//        function updateSlider(Request $req, $id)
//        {
//            $data = $req->input();
//            $image = $data['image'];
//            $position = $data['position'];
//            $product_id = $data['product_id'];
//           DB::update("update sliders set image='{$image}',position='{$position}',product_id='{$product_id}' where id={$id}");
//            return redirect("adminDashbord");
//        }
//        function deleteSlider($id)
//         {

//             $data=slider::find($id);
//             $data->delete();
//             return redirect('adminDashbord');
//         }
//         ////////////show data from product table for the select on update page////////////////       
// function showPro(){
//     $data= product::all();
//  return view('addSlider',["products"=>$data]);
// }

// function showProForupdate(){
//     $products= product::all();
//  return $products;
// }
// ////////////////////////////////////add date on slider table//////////////////
// function addDataSlider(Request $req)
//    {
//        $addSlider = new slider;
//        $addSlider->position=$req->position;
//        $addSlider->product_id=$req->product_id;
//        //$path = $req->file('image')->store('img');
//        if($req->hasFile('image'))
//        {
//            $filenamewithExt = $req->file('image')->getClientOriginalName();
//            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
//            $extension = $req->file('image')->getClientOriginalExtension();
//            $filenameToStore = $filename . '.' . $extension;
//            $path = $req->file('image')->storeAs('public/uploads',$filenameToStore);
//            $addSlider->image=$filenameToStore;
//        }
//        else{
//            $filenameToStore = 1;
//        }
//        $addSlider->save();
//            return redirect('adminDashbord');    
//    }
}
