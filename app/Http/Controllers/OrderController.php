<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Cart;
use DB;
use Session;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
    	$request->validate([
			'name'=>'required',
			'email'=>'required|email',
			'phone'=>'required|regex:/(01)[0-9]{9}/|min:11|max:11',
			'address'=>'required'
		]);
     
      $customer_name = $request->name;
      $customer_number = $request->phone;
      $customer_email = $request->email;
      $customer_address = $request->address;

      $content = Cart::content();
      $order = array();

      foreach ($content as $value) {
      	$order['customer_name'] = $customer_name;
      	$order['customer_number'] = $customer_number;
      	$order['customer_address'] = $customer_address;
      	$order['customer_email'] = $customer_email;
      	$order['product_name'] = $value->name;
      	$order['product_qty'] = $value->qty;
      	$order['product_price'] = $value->qty*$value->price;
      	$order['product_image'] = $value->options->image;
      	$order['order_date'] = date("Y/m/d");

      	DB::table('orders')
      	->insert($order);
      }

	 Session::flash('success','Your Order is Successfully Complete.....! We Provide Your Product with 5 Days');
	 Cart::destroy();
      return redirect('/cart');
      
    }

      public function orderList()
    {
        $data['ordes'] = Order::where('status',0)->paginate(15);
        return view('admin.order.order',$data);
    }
    public function detailsOrder($id)
    {
      $data['details_order'] = Order::where('id',$id)->first();
        return view('admin.order.details_order',$data);
    }

    public function shiftOrder($id)
    {
      $result = Order::find($id);
      $result->status = 1;
      $result->save();
      return redirect()->back()->with('message','Product Shift Successfully');
    }

    public function shiftOrderList()
    {
       $data['ordes'] = Order::where('status',1)->paginate(15);
      return view('admin.order.shift_order',$data);
    }

    public function shiftDetailsOrder($id)
    {
       $data['details_order'] = Order::where('id',$id)->first();
        return view('admin.order.shift_order_details',$data);
    }
}
