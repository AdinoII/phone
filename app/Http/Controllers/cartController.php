<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\dProduct;
use App\dProductColor;
use App\dBrand;
use App\dImage;
use App\dGroupProduct;
use App\dOrders;
use App\dOrderItem;
use App\User;
use Session;
use Cart;
class cartController extends Controller
{
    public function DeleteCart($id)
    {
        Cart::remove($id);
        return redirect('page/cart');
    }
    public function getTemp($id)
    {
        $product =dProduct::find($id);
        Session::put('product',$product);
        return redirect('page/cart');
    }
    public function getCart()
    {
        if(Session('product')){
          $product =Session('product');
          foreach ($product->image as $value){
           $image = $value->image;
           break;
       } 
   }else{
        return view('pages.page404');
   }
    return view('pages.cart',['product' =>$product,'image' =>$image]);
    }
    public function Ajaxgiohang($number,$price)
    {
        echo "<th class=\"rs\" >".number_format($number*$price, 0, ',', '.')."đ</th>";
    }
    public function postCart(Request $request)
    {
      // try{
          if(Auth::check()){
          $product =Session('product');
          $procolor =dProductColor::where('id_product',$product->id)->orwhere('id_color',$request->color)->first();
          $order = new dOrders;
          $order->id_user = Auth::user()->id;
          $order->payment = "unpaid";
          $order->total = $request->txtqty*$product->price;
          $order->save();
          $orderItem = new dOrderItem;
          $id_order = dOrders::orderBy('id','DESC')->first();
          $orderItem->id_product_color = $procolor->id;
          $orderItem->id_orders = $id_order->id;
          $orderItem->qty =$request->txtqty;
          $orderItem->price =$product->price;
          $orderItem->save();
          return redirect('pages.home');
        }else{
          $this->validate($request,
          [
            'txtname' =>'required',
            'txtphone' =>'required',
            'txtaddress' =>'required',
          ],
          [
            'txtname.required' =>'Bạn chưa nhập tên',
            'txtphone.required' =>'Bạn chưa nhập phone',
            'txtaddress.required' =>'Bạn chưa nhập address',
          ]);
          $product =Session('product');
          $procolor =dProductColor::where('id_product',$product->id)->orwhere('id_color',$request->color)->first();
          $user = new User;
          $user->fullname = $request->txtname;
          $user->phone =$request->txtphone; 
          $user->email = "unknow";
          $user->password = "unknow";
          $user->avatar = "unknow";
          $user->address =$request->txtaddress;  
          $user->role = "traveller";
          $user->save();
          $khach = User::orderBy('id','DESC')->first();
          $order = new dOrders;
          $order->id_user = $khach->id;
          $order->payment = "unpaid";
          $order->total = $request->txtqty*$product->price;
          $order->save();
          $orderItem = new dOrderItem;
          $id_order = dOrders::orderBy('id','DESC')->first();
          $orderItem->id_product_color = $procolor->id;
          $orderItem->id_orders = $id_order->id;
          $orderItem->qty =$request->txtqty;
          $orderItem->price =$product->price;
          $orderItem->save();
          return redirect('pages.home');
        }
      // }catch(\Illuminate\Database\QueryException $err){
      //     return view('pages.page404');
      // }
    }
}