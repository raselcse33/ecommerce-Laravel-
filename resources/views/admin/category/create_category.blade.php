@extends('admin.home')
@section('headTitle')
Add Category

@endsection
@section('content')

<!--************** start  all table category subcategory subsubcategory  ******************** -->
<div class="container">
	<div style="background-color:#f9f1f1;" class="card-body">

		<div class="card-title">
			<h5>Add Category</h5>
		</div>
		@if (Session::has('message'))
		<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
		@endif


		<div class="row">
			{{-- Main Category --}}
			<div class="col-md-4 border-right border-primary">
				<button type="button" class="btn btn-info btn-sm btn-block mt-3" data-toggle="modal" data-target="#addCetagory">Add Product
				</button>
				<table class="table table-sm table-dark mt-3" id="categoryTable">
					<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categorys as $categoryName)
						<tr>
							<td>{{$categoryName->category_name}}</td>
							<td>
								<a class="btn-success btn-sm" data-id ="{{$categoryName->id}}" id="customerEdit" href="{{url('edit/category')}}"><i class="fas fa-edit"></i></a>
								<a class="btn-danger btn-sm" href="{{route('delete.category',['id'=>$categoryName->id])}}">X</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$categorys->links()}}
			</div>
			{{-- End Category --}}


			
			{{--  Start Sub Category --}}
			<div class="col-md-4 border-right border-primary">
				<button type="submit" class="btn btn-info btn-sm btn-block mt-3" data-toggle="modal" data-target="#addSubCetagory">Add Sub Category</button>
				<table class="table table-sm table-dark mt-3" id="subCategoryTable">
					<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($subCategorys as $subCategory)
						<tr>
							<td>{{$subCategory->sub_category_name}}</td>
							<td>
								<a class="btn-success btn-sm" data-id="{{$subCategory->id}}" id="edit_sub_category"  href="{{url('edit/subcategory')}}"><i class="fas fa-edit"></i></a>
								<a class="btn-danger btn-sm" href="{{route('subCategory.delete',['id'=>$subCategory->id])}}">X</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$subCategorys->links()}}
			</div>
			{{--End sub category  --}}



			{{--Start sub sub category  --}}
			<div class="col-md-4 border-right border-primary">
				<button type="submit" class="btn btn-info btn-sm btn-block mt-3" data-toggle= "modal" data-target="#addSubSubCetagory">Add Sub Sub Category</button>
				<table class="table table-sm table-dark mt-3" id="subSubCategoryTable">
					<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($subSubCategorys as $subSubCategory)
						<tr>
							<td>{{$subSubCategory->sub_sub_category_name}}</td>
							<td>
								<a class="btn-success btn-sm" id="edit_sub_sub_category" data-id="{{$subSubCategory->id}}" href="{{url('edit/sub/sub_category')}}"><i class="fas fa-edit"></i></a>
								<a class="btn-danger btn-sm" href="{{route('subSubCategory.delete',['id'=>$subSubCategory->id])}}">X</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$subSubCategorys->links()}}
			</div>

		</div>
	</div>
</div>
<!--************** end of  all table category subcategory subsubcategory  ******************** -->




<!--************** start  all insert option in addcategory subcategory and sub sub category ******************** -->
{{--Add Category  --}}
<div class="modal fade" id="addCetagory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-inline-block text-center badge-dark">
				<h3 class="modal-title text-white" id="exampleModalLabel">Category Add</h3>
			</div>
			<form action="{{route('store.category')}}" method="post">
				{{csrf_field()}}
				<div class="modal-body">

					<label>Category Name</label>
					<input  type="text" name="category_name" class="form-control" required>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="submit" type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{--End Add Category  --}}



{{--sub category  --}}
<div class="modal fade" id="addSubCetagory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-inline-block badge-dark text-center">
				<h3 class="modal-title text-white" id="exampleModalLabel">sub Category Add</h3>
			</div>
			<form action="{{route('store.sub_category')}}" method="post">
				{{csrf_field()}}
				<div class="modal-body">
					<label>Category Name</label>
					<select name="category_id"  class="form-control">
						@foreach($categorys as $category)
						<option value="{{$category->id}}">{{$category->category_name}}</option>
						@endforeach
					</select>
					<label>Sub Category</label>
					<input type="text" name="sub_category_name" id="sub_category_name" class="form-control" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="submit1" type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{--End sub category  --}}



{{--Sub sub category  --}}
<div class="modal fade" id="addSubSubCetagory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-inline-block badge-dark text-center">
				<h3 class="modal-title text-white" id="exampleModalLabel">sub Category Add</h3>
			</div>
			<form action="{{route('store.sub_sub_category')}}" method="post">
				{{csrf_field()}}
				<div class="modal-body">
					<label>Category Name</label>
					<select name="category_id" id="main_category_id" class="form-control" required>
						<option>select Category</option>
						@foreach($categorys as $category)
						<option value="{{$category->id}}">{{$category->category_name}}</option>
						@endforeach
					</select>
					<label>Sub Category</label>
					<select name="sub_category_id" id="sub_category_id" class="form-control" required>
						<option value=""></option>
					</select>
					<label>Sub Sub Category</label>
					<input type="text" name="sub_sub_category_name" class="form-control" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="submit1" type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{--End Sub sub category  --}}

<!--************** toata finished  all insert option in addcategory subcategory and sub sub category ******************** -->



<!--************** toata start  all edit option in addcategory subcategory and sub sub category ******************** -->

{{--category edit --}}
<div class="modal fade" id="editaddCetagory"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-inline-block text-center badge-dark">
				<h3 class="modal-title text-white" id="exampleModalLabel">Category Add</h3>
			</div>
			<form action="{{url('update/category')}}" method="post" id="updateCategory">
				{{csrf_field()}}
				<div class="modal-body">
					<input type="hidden" name="id" id="category_id">

					<label>Category Name</label>
					<input  id="category_name" type="text"  name="category_name" class="form-control" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="submit" type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{--End category  --}}

{{--start sub category  --}}
<div class="modal fade" id="editaddSubCetagory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-inline-block badge-dark text-center">
				<h3 class="modal-title text-white" id="exampleModalLabel">sub Category Add</h3>
			</div>
			<form action="{{url('update/subCategory')}}" method="post" id="updateSubcategory">
				{{csrf_field()}}
				<div class="modal-body">
                     <input type="hidden" name="id" id="hidden_sub_category_id">
					<label>Category Name</label>
					<select name="category_id"  class="form-control" id="category_ids">
						@foreach($categorys as $category)
						<option value="{{$category->id}}">{{$category->category_name}}</option>
						@endforeach
					</select>
					<label>Sub Category</label>
					<input type="text" name="sub_category_name" id="sub_category_name_id" class="form-control" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="submit1" type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{--end sub category  --}}

{{-- start sub sub category --}}
<div class="modal fade" id="editaddSubSubCetagory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-inline-block badge-dark text-center">
				<h3 class="modal-title text-white" id="exampleModalLabel">Edit Sub Sub Category Add</h3>
			</div>
			<form action="{{url('update/sub/sub/category')}}" method="post" id="updateSubSubCategory">
				{{csrf_field()}}
				<div class="modal-body">
					<input type="hidden" name="id" id="hidden_sub_sub_category">
					<label>Category Name</label>
					<select name="category_id" id="main_categoryId" class="form-control" required>
						<option>select Category</option>
						@foreach($categorys as $category)
						<option value="{{$category->id}}">{{$category->category_name}}</option>
						@endforeach
					</select>
					<label>Sub Category</label>
					<select name="sub_category_id" id="subs_category_id" class="form-control" required>
						<option value="">Selete Value</option>
						@foreach($subCategorys as $category)
						<option value="{{$category->id}}">{{$category->sub_category_name}}</option>
						@endforeach
					</select>
					<label>Sub Sub Category</label>
					<input type="text" name="sub_sub_category_name" id="sub_sub_category_id" class="form-control" required>
				</div>
				<div class="modal-footer">
					<button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="submit" type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

{{--End sub sub category --}}



{{--  Javascript code  --}}
<script>
	$("#main_category_id").change(function(){
		let id = $("#main_category_id").val();
		$.ajax({
			type: 'GET',
			url: '{{url("get-sub-category")}}/'+id,
			// data: {'ref_id': ref_id},
			success: function(res){
				var data = JSON.parse(res);
				var ln = data.length;
				$("#sub_category_id").empty();
				for(var i = 0; i< ln; i++){
					$("#sub_category_id").append('<option value="'+data[i]['id']+'">'+data[i]['sub_category_name']+'</option>');
				}
			},
			error: function(err){
				console.log(err);
			}
		});
	});
	
</script>

{{-- End Javascript code   --}}

<script>
	$("#main_categoryId").change(function(){
		let id = $("#main_categoryId").val();
		$.ajax({
			type: 'GET',
			url: '{{url("sub-category")}}/'+id,
			// data: {'ref_id': ref_id},
			success: function(res){
				var data = JSON.parse(res);
				var ln = data.length;
				$("#subs_category_id").empty();
				for(var i = 0; i< ln; i++){
					$("#subs_category_id").append('<option value="'+data[i]['id']+'">'+data[i]['sub_category_name']+'</option>');
				}
			},
			error: function(err){
				console.log(err);
			}
		});
	});
</script>



<script type="text/javascript" src="{{asset('public/script.js')}}"></script>

@endsection