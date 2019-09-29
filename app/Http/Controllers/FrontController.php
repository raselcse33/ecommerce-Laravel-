<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\Post;
use Session;
use App\UserRegistration;
use DB;
use App\Order;
use App\Contact;
use App\BasicSetting;


class FrontController extends Controller
{
    public function index() {
        $data['latest_product'] = DB::table('posts')
        ->leftJoin('categories','posts.category_id','=','categories.id')
        ->leftJoin('sub_categories','posts.sub_category_id','=','sub_categories.id')
        ->leftJoin('sub_sub_categories','posts.sub_sub_category_id','=','sub_sub_categories.id')
        ->where('posts.status',0)
        ->select('posts.*','categories.category_name', 'sub_categories.sub_category_name', 'sub_sub_categories.sub_sub_category_name')
        ->orderBy('id','desc')
        ->limit(8)
        ->get();

        $data['random_product'] = DB::table('posts')
        ->leftJoin('categories','posts.category_id','=','categories.id')
        ->leftJoin('sub_categories','posts.sub_category_id','=','sub_categories.id')
        ->leftJoin('sub_sub_categories','posts.sub_sub_category_id','=','sub_sub_categories.id')
         ->where('posts.status',0)
        ->select('posts.*','categories.category_name', 'sub_categories.sub_category_name', 'sub_sub_categories.sub_sub_category_name')
        ->limit(12)
        ->inRandomOrder()->get();
        $data['categorys'] = Category::where('status',0)->orderBy('id', 'desc')->get();
        return view('front.welcome',$data);
    }

    public function productByCategory($id)
    {
        $data['categorys'] = Category::where('status',0)->orderBy('id', 'desc')->get();
        return view('front.product_by_category', $data);
    }











    //search

    public function search(Request $request)
    {
        $search_result = $request->text;
         $data['latests_posts'] = DB::table('posts')
        ->leftJoin('categories','posts.category_id','=','categories.id')
        ->leftJoin('sub_categories','posts.sub_category_id','=','sub_categories.id')
        ->leftJoin('sub_sub_categories','posts.sub_sub_category_id','=','sub_sub_categories.id')
         ->where('posts.status',0)
        ->select('posts.*','categories.category_name', 'sub_categories.sub_category_name', 'sub_sub_categories.sub_sub_category_name')
        ->where('title','like','%'.$search_result.'%')
        ->orwhere('content','like','%'.$search_result.'%')
        ->get();
        return view('front.search',$data);

    }
    
    public function cart() {
        return view('front.cart');
    }
    
    public function order() {
        return view('front.order');
    }
    
    // public function wishlist() {
    //     return view('front.wishlist');
    // }
    
   
    //single page

    public function detailsPage($id)
    {
        $data['post'] = Post::find($id);
        return view('front.detail_page',$data);
    }

    //all post

    public function allCategoryost($id)
    {
        $data['posts'] = Post::where('category_id',$id)->where('status',0)->get();
        return view('front.all_post',$data);
    }

    public function allSubCategory($id){
         
        $data['posts'] = Post::where('sub_category_id',$id)->where('status',0)->get();
         return view('front.all_post',$data);
    }

    public function allSubSubCategory($id)
    {
        $data['posts'] = Post::where('sub_sub_category_id',$id)->where('status',0)->get();
        return view('front.all_post',$data);
    }

    public function createAddress()
    {
        $user_id = Session::get('id');
        $data['user'] = @UserRegistration::where('id',$user_id)->first();
        return view('front.address',$data);
    }


     public function contact() {
        $data['address'] = BasicSetting::first();
        return view('front.contact',$data);
    }

    
}
