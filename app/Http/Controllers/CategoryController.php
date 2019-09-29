<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\Post;
use DB;


class CategoryController extends Controller
{
	// Main Category
	public function createCategory(){
		$data['categorys'] = Category::where('status',0)->paginate(15);
		$data['subCategorys'] = SubCategory::where('status',0)->paginate(15);
		$data['subSubCategorys'] = SubSubCategory::where('status',0)->paginate(15);

		return view('admin.category.create_category',$data);
	}

   // store category
	public function storeCategory(Request $request)
	{
		$request->validate([
			'category_name'=>'required'
		]);
		
		$category = new Category;
		$category->category_name = $request->category_name;
		$category->save();
		return redirect()->back()->with('message','Category Add successfully');
	}

	//store sub category

	public function storeSubCategory(Request $request)
	{
		$request->validate([
			'sub_category_name'=>'required'
		]);

		$subCategory = new SubCategory;
		$subCategory->category_id = $request->category_id;
		$subCategory->sub_category_name = $request->sub_category_name;
		$subCategory->save();
		return redirect()->back()->with('message','Sub Category Add Successfully');
	}

	//get sub category

	public function getSubCategory($id)
	{
		$data = SubCategory::where('status',0)->where('category_id', $id)->get();
		echo $data;
	}

	public function get_sub_category($id)
	{
		$data = SubCategory::where('status',0)->where('category_id', $id)->get();
		echo $data;
	}


	// public function get_sub_category_ajax($id){
	// 	$data = SubCategory::where('id', $id)->first();
	// 	echo $data;
	// }

	//store sub sub category

	public function storeSubSubCategory(Request $request)
	{
		$request->validate([
          'category_id' => 'required',
          'sub_category_id' => 'required',
          'sub_sub_category_name' => 'required'
		]);

		$subSubCategory = new SubSubCategory;
		$subSubCategory->category_id = $request->category_id;
		$subSubCategory->sub_category_id = $request->sub_category_id;
		$subSubCategory->sub_sub_category_name = $request->sub_sub_category_name;
        $subSubCategory->save();
        return redirect()->back()->with('message','Sub Sub Category Add Successfully');
	}
     //edit category
	public function editCategory(Request $get)
	{
		$id = $get->id;
		$data = Category::find($id);
		return $data;
	}
    //update category
	public function updateCategory(Request $get)
	{
		$get->validate([
          'category_name'=>'required'
		]);

		$update = Category::where('id',$get->id)->update([
          'category_name'=>$get->category_name
		]);
		if($update){
			return response()->json("success");
		}else{
			return response()->json("error");
		}

	}

	//edit sub category

	public function editSubCategory(Request $get)
	{
		$id = $get->id;
		$data = SubCategory::find($id);
		return $data;
	}

	//update sub category

	public function updateSubCategory(Request $get){
		
		$get->validate([
          'sub_category_name'=>'required'
		]);
		$update = SubCategory::where('id',$get->id)->update([
          'category_id'=>$get->category_id,
          'sub_category_name'=>$get->sub_category_name
		]);
		if($update){
			return response()->json("success");
		}else{
			return response()->json("error");
		}

	}

	//edit sub sub category

	public function editSubSubCategory(Request $get)
	{
		$id = $get->id;
		$data = SubSubCategory::find($id);
		return $data;
	}

	//update sub sub category
   
   public function updateSubSubCategory(Request $get){
		
		
		$update = SubSubCategory::where('id',$get->id)->update([
          'category_id'=>$get->category_id,
          'sub_category_id'=>$get->sub_category_id,
          'sub_sub_category_name'=>$get->sub_sub_category_name
		]);
		if($update){
			return response()->json("success");
		}else{
			return response()->json("error");
		}

	}


	//delete category

	public function deleteCategory($id)
	{
		
        Category::where('id',$id)->update(['status' => 1]);
		DB::table('sub_categories')->where('category_id', $id)->update(array('status' => 1));
		DB::table('sub_sub_categories')->where('category_id', $id)->update(array('status' => 1));
		DB::table('posts')->where('category_id', $id)->update(array('status' => 1));
		return redirect()->back()->with('message','Delete Successfully');


	}

	//delete sub category

	public function deleteSubcategory($id)
	{
		SubCategory::where('id',$id)->update(['status'=>1]);
		DB::table('sub_sub_categories')->where('sub_category_id', $id)->update(array('status' => 1));
		DB::table('posts')->where('sub_category_id', $id)->update(array('status' => 1));
		return redirect()->back()->with('message','Delete Successfully');
	}

	//delete sub sub category

	public function deleteSubSubCategory($id)
	{
		SubSubCategory::where('id',$id)->update(['status'=>1]);
		DB::table('posts')->where('sub_sub_category_id', $id)->update(array('status' => 1));
		return redirect()->back()->with('message','Delete Successfully');

	}

}











 //    // SUb Category
	// public function storeSubCategory(Request $request)
	// {
	// 	$request->validate([
	// 		'category_name'=>'required',
	// 		'refer_id'=>'required'
	// 	]);

	// 	$category = new SubCategory;
	// 	$category->category_name = $request->category_name;
	// 	$category->refer_id = $request->refer_id;
	// 	$category->save();
	// 	return redirect()->back()->with('message','Save Successfully');
	// }

 //    // Sub Sub Category
	// public function storeSubSubCategory(Request $request)
	// {
	// 	$request->validate([
	// 		'category_name'=>'required',
	// 		'refer_id'=>'required'
	// 	]);

	// 	$category = new SubSubCategory;
	// 	$category->category_name = $request->category_name;
	// 	$category->refer_id = $request->refer_id;
	// 	$category->save();
	// 	return redirect()->back()->with('message','Save Successfully');
	// }

	

