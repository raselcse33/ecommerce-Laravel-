@extends('admin.home')
@section('headTitle')
Add Product

@endsection
@section('content')

<div class="container">
	<div class="row">
		<div style="background-color:#f9f1f1;" class="card-body">
			<div class="button">
				<button type="button" class="btn btn-info btn-sm" id ="show">Add Product
				</button>
			</div>
			@if (Session::has('message'))
			<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
			@endif
			<table class="table table-dark mt-3">
				<thead>
					<tr>
						<th scope="col">Title</th>
						<th scope="col">Content</th>
						<th scope="col">Category</th>
						<th scope="col">Sub Category</th>
						<th scope="col">Sub Sub Category</th>
						<th scope="col">Price</th>
						<th scope="col">Image</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
					<tr>
						<td>{{$post->title}}</td>
						<td>
							{{ Str::words($post->content, 5)}}
                       </td>
						<td>{{$post->category_name}}</td>
						<td>{{$post->sub_category_name}}</td>
						<td>

							{{$post->sub_sub_category_name}}
						</td>
						<td>{{$post->price}}</td>
						<td> <img src="{{asset('public/images/post/'.$post->image)}}" class="mt-3 rounded" width="60" height="60"></td>
						<td>
							<a class="btn-success btn-sm" href="{{route('edit.post',['id'=>$post->id])}}"><i class="fas fa-edit"></i></a>
								<a class="btn-danger btn-sm" href="{{route('post.delete',['id'=>$post->id])}}">X</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
		
	</div>
	{{$posts->links()}}
</div>

{{--Add Product modal   --}}
<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-inline-block badge-dark text-center">
				<h3 class="modal-title text-white" id="exampleModalLabel">Add Product</h3>
			</div>
			<div class="modal-body">
				<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control" name="content" id="content" cols="3" required></textarea>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="category_id">Category</label>
							<select class="form-control" name="category_id" id="category_id" required>
								<option selected="selected" value="">Select Option</option>
								@foreach($categorys as $category)
								<option value="{{$category->id}}">{{$category->category_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="sub_category_id">Sub Category</label>
							<select class="form-control" name="sub_category_id" id="sub_category_id">
								<option selected="selected" value="">Select Option</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="sub_sub_category_id">Sub Sub Category</label>
							<select class="form-control" name="sub_sub_category_id" id="sub_sub_category_id">
								<option selected="selected" value="">Select Option</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="price">price</label>
						<input type="number" name="price" id="price" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="image">Image</label>
						<input type="file" name="image" id="image" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Save changes</button>
				</div>
			</div>
		</form>
	</div>
</div>
{{--End Add Product Modal --}}

{{--initial input type  --}}
<script type="text/javascript">
	$(document).on("click","#show",function(arg){
		arg.preventDefault();
		$("#addPost").modal("show");
		$("#title").val('');
		$("#content").val('');
		$("#category_id").val('');
		$("#sub_category_id").val('');
		$("#sub_sub_category_id").val('');
		$("#price").val();
	});
</script>
{{--End initial input type  --}}

{{-- appand for product --}}
<script type="text/javascript">
	$("#category_id").change(function(){
		var id = $("#category_id").val();
		$.ajax({
			type:"GET",
			url:'{{url("product/category")}}/'+id,
			success: function(res){
				var data = JSON.parse(res);
				var ln = data.length;
				$("#sub_category_id").empty().append('<option value="" selected="selected">Select Option</option>');
				for(var i = 0; i< ln; i++){
					$("#sub_category_id").append('<option value="'+data[i]['id']+'">'+data[i]['sub_category_name']+'</option>');
					
				//alert("sub_category_id: "+is);
			}
		},
		error: function(err){
			console.log(err);
		}
	})
		$("#sub_category_id").change(function(){
			var id = $("#sub_category_id").val();
			$.ajax({
				type:"GET",
				url:'{{url("product/category/subcategory")}}/'+id,
				success:function(res){
					var data = JSON.parse(res);
					var ln =data.length;
					$("#sub_sub_category_id").empty();
					for(i=0;i<ln;i++){
						$("#sub_sub_category_id").append('<option value="'+data[i]['id']+'">'+data[i]['sub_sub_category_name']+'</option>');

					}
				},
			})
		});
	});


</script>
{{-- End appand for product --}}

@endsection