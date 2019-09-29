<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function craeteProduct()
    {
    	$data['products'] = @Product::all();
    	$data['main_products'] = @Product::paginate(5);


    	return view('admin.product.create_product',$data);
    }

    //store product

    public function storeProduct(Request $request)
    {
        $request->validate([
      	'product_name'=>'required',
     ]);
    	$product = new Product;
    	$product->product_name = $request->product_name;
    	$product->refer_id = $request->refer_id;
    	$product->save();
    	return redirect()->back()->with('message','Product Add Successfully');
    }

    //edit Product

    public function editProduct($id){
    	$data['edit_product'] = Product::find($id);
        $data['products'] = @Product::all();
    	return view('admin.product.edit_product',$data);

    }

    public function deleteProduct($id)
    {

         $updateProduct = Product::where('id',$id)
                  ->update(['status' =>1]);
      
      $num_row = Product::count();

       for ($i=0; $i <$num_row ; $i++) {          
        $main_id = $id;
        $products = Product::where('refer_id',$main_id)->get();
         foreach ($products as  $value) {
             $refer_id = $value->refer_id;
             $refer_id = explode(',',$refer_id);

              $updateProduct = Product::whereIn('refer_id',$refer_id)
                  ->update(['status' =>1]);
             $id = $value->id;

            
           }
         }

         
    }
}
