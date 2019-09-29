<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use App\Wishlist;

class WishlistController extends Controller
{
    public function storeWishlist(Request $request,$id)
    {
       $post = Post::where('id',$id)->first();

       $title = $post->title;
       $post_id = $post->id;
       $price = $post->price;
       $image = $post->image;
       $customer_id = Session::get('id');

       $wishlist = new Wishlist;
       $wishlist->post_id = $post_id;
       $wishlist->title = $title;
       $wishlist->image = $image;
       $wishlist->price =$price;
       $wishlist->customer_id = $customer_id;
       $wishlist->save();
       Session::flash('success','Add product your Wishlist');
       return redirect()->back();

    } 
    public function wishlist() {
       
        $customer_id = Session::get('id');
    	$data['posts'] = @Wishlist::where('customer_id',$customer_id)->get();
         return view('front.wishlist',$data);
     }


     public function deleteWishlist($id)
     {
     	 $customer_id = Session::get('id');
     	$deleteWishList = Wishlist:: where('post_id', $id)->where('customer_id', $customer_id)->delete();
     	 Session::flash('success','Delete Wishlist');
       return redirect()->back();

     }


}
