<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\Post;
use DB;

class PostController extends Controller
{
	public function createPost(){
		$data['categorys'] = Category::all();
        //$data['post']=Post::all();
		$data['posts'] = DB::table('posts')
		->leftJoin('categories','posts.category_id','=','categories.id')
		->leftJoin('sub_categories','posts.sub_category_id','=','sub_categories.id')
		->leftJoin('sub_sub_categories','posts.sub_sub_category_id','=','sub_sub_categories.id')
		->select('posts.*','categories.category_name', 'sub_categories.sub_category_name', 'sub_sub_categories.sub_sub_category_name')
		->where('posts.status',0)
		->paginate(5);
		return view('admin.post.create_post',$data);
		
	}
	public function getSubProduct($id)
	{
		$data = SubCategory::where('status',0)->where('category_id', $id)->get();
		echo $data;
	}

	public function getSubSubProduct($id){
		
		$data = SubSubCategory::where('status',0)->where('sub_category_id', $id)->get();
		echo $data;
	}

	public function storePost(Request $request)
	{
		$request->validate([
			'title'=>'required',
			'content'=>'required',
			'category_id'=>'required',
			'price'=>'required',
			'image'=>'required'

		]);

		$image = $request->file('image');
		$uploadPath = 'public/images/post/';
		$imageEx = $image->getClientOriginalExtension();
		$imageName = time() . '.' . $imageEx;
		$imageUrl = $imageName;
		$image->move($uploadPath, $imageName);

		$post = new Post;
		$post->title = $request->title;
		$post->content = $request->content;
		$post->category_id = $request->category_id;
		$post->sub_category_id = $request->sub_category_id;
		$post->sub_sub_category_id = $request->sub_sub_category_id;
		$post->price = $request->price;
		$post->image = $imageUrl;
		$post->save();
		return redirect()->back()->with('message','Product  Add Successfully');
	}

	public function editPost($id){
		$data['categorys']=Category::all();
		$data['sub_categorys']=SubCategory::all();
		$data['sub_sub_categorys']=SubSubCategory::all();

		$data['post'] = Post::where('id',$id)->first();
		return view('admin.post.edit_post',$data);
	}

	//edit post append subcategory
	public function getEditSubCategory($id)
	{
		$data = SubCategory::where('status',0)->where('category_id', $id)->get();
		echo $data;
	}

  //edit post subsubcategory

	public function geteditSubSubCategory($id)
	{
		$data = SubSubCategory::where('status',0)->where('sub_category_id', $id)->get();
		echo $data;
	}

	public function updatePost(Request $request,$id)
	{
		$request->validate([
			'title'=>'required',
			'content'=>'required',
			'category_id'=>'required',
			'price'=>'required'

		]);

		if ($request->file('image')) {
			$post = Post::find($id);
			$image = $request->file('image');
			$uploadPath = 'public/images/post/';
			$imageEx = $image->getClientOriginalExtension();
			$imageName = time() . '.' . $imageEx;
			$imageUrl = $imageName;
			$image->move($uploadPath, $imageName);
			$imageun = $post->image;
			@unlink('public/images/post/' . $imageun);
			$post->title = $request->title;
			$post->content = $request->content;
			$post->category_id = $request->category_id;
			$post->sub_category_id = $request->sub_category_id;
			$post->sub_sub_category_id = $request->sub_sub_category_id;
			$post->price = $request->price;
			$post->image = $imageUrl;
			$post->save();
			return redirect('create/post')->with('message', 'post update Successfully');
		
		} else {
			$post = Post::find($id);
			$post->title = $request->title;
			$post->content = $request->content;
			$post->category_id = $request->category_id;
			$post->sub_category_id = $request->sub_category_id;
			$post->sub_sub_category_id = $request->sub_sub_category_id;
			$post->price = $request->price;
			$post->save();
			return redirect('create/post')->with('message', 'post update Successfully');
		}

	}

	public function deletePost($id)
	{
		Post::where('id',$id)->update(['status'=>1]);
		return redirect()->back()->with('message','Delete Successfully');
	}
}

