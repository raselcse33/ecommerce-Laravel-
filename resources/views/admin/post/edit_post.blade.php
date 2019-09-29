@extends('admin.home')
@section('headTitle')
Add Product
@endsection
@section('content')

<div class="container">
	@if (Session::has('message'))
	<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
	@endif
	<div style="background-color: #f5f2d0 " class="card-body">
		<div class="row">
			<div class="body">
				<form action="{{route('update.post',$post->id)}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{$post->title}}" required>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control" name="content" id="content" rows="5" required>{{$post->content}}</textarea>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="category_id">Category</label>
							<select class="form-control" name="category_id" id="category_id" required>
								<option value="">Select Option</option>
								@foreach($categorys as $category)
								<option value="{{$category->id}}" {{$post->category_id == $category->id ?  'selected' : ''}}>{{$category->category_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="sub_category_id">Sub Category</label>
							<select class="form-control" name="sub_category_id" id="sub_category_id">
								<option value="">Select Option</option>
								@foreach($sub_categorys as $Subcategory)
								<option value="{{$Subcategory->id}}" {{$post->sub_category_id == $Subcategory->id ?  'selected' : ''}}>{{$Subcategory->sub_category_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="sub_sub_category_id">Sub Sub Category</label>
							<select class="form-control" name="sub_sub_category_id" id="sub_sub_category_id">
								<option value="">Select Option</option>
								@foreach($sub_sub_categorys as $SubSubcategory)
								<option value="{{$SubSubcategory->id}}"  {{$post->sub_sub_category_id == $SubSubcategory->id ?  'selected' : ''}}>{{$SubSubcategory->sub_sub_category_name}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="price">price</label>
						<input type="number" name="price" id="price" class="form-control" value="{{$post->price}}" required>
					</div>
					
					<div class="form-group">
						<label for="image">Image</label>
						<input type="file" name="image" id="image">
					</div>
					<div class="form-group">
						<label for="image">Image</label>
						<img src="{{asset('public/images/post/'.$post->image)}}" class="mt-3 rounded" width="100" height="100"></td>

					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-success">Save changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>

{{--apand --}}
<script type="text/javascript">
	$("#category_id").change(function(){

		var id = $("#category_id").val();
		$.ajax({
			type:"GET",
			url:'{{url('post/edit/subcategory')}}/'+id,
			success:function(res){
				var data = JSON.parse(res);
				var ln = data.length;
				$("#sub_category_id").empty().append('<option value="" selected="selected">Select Option</option>');
				for(i=0;i<ln;i++){
					$("#sub_category_id").append('<option value="'+data[i]['id']+'">'+data[i]['sub_category_name']+'</option>');
				}
			},
			error: function(err){
				console.log(err);
			}
		})

	});


	$("#sub_category_id").change(function(){
		var id = $("#sub_category_id").val();
		$.ajax({
			type:"GET",
			url:'{{url("post/edit/sub/subcategory")}}/'+id,
			success:function(res){
				var data = JSON.parse(res);
				var ln = data.length;
				$("#sub_sub_category_id").empty().append('<option value="" selected="selected">Select Option</option>');
				for(i=0;i<ln;i++){
					$("#sub_sub_category_id").append('<option value="'+data[i]['id']+'">'+data[i]['sub_sub_category_name']+'</option>');
				}
			}
		})
	});
</script>
@endsection