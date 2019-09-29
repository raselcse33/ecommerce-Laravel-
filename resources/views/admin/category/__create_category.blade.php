@extends('admin.home')
@section('headTitle')
Add Category
@endsection
@section('content')

<div class="container">
	<div class="card-body">

		<div class="card-title">
			<h5>Add Category</h5>
		</div>
		@if (Session::has('message'))
		<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
		@endif
		<div class="row">
			{{-- Main Category --}}
			<div class="col-md-4 border-right border-primary">
				<form action="{{route('store.category')}}" method="post">
					{{csrf_field()}}
					<label>Main Category</label>
					<input type="text" name="category_name" class="form-control" required>
					@if ($errors->has('category_name'))
					<span class="text-danger">
						<strong>{{ $errors->first('category_name') }}</strong>
					</span>
					@endif
					<br>
					<button type="submit" class="btn btn-info btn-sm btn-block mt-3">Save</button>
				</form>
			</div>
			{{-- Sub Category --}}
			<div class="col-md-4 border-right border-primary">
				<form action="{{route('store.subcategory')}}" method="post">
					<div class="row my-2">
						<div class="col">
							{{csrf_field()}}
							<label>Sub Category</label>
							<input type="text" name="category_name" class="form-control" required>
							@if ($errors->has('category_name'))
							<span class="text-danger">
								<strong>{{ $errors->first('category_name') }}</strong>
							</span>
							@endif
							<br>
						</div>
					</div>
					<div class="row my-2">
						<div class="col">
							<select name="refer_id" id="" class="form-control">
								@foreach($categorys as $category)
								{{-- <option value="">Select Option</option> --}}
								<option value="{{$category->id}}">{{$category->category_name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row my-2">
						<div class="col">
							<button type="submit" class="btn btn-info btn-sm btn-block mt-3">Save</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<form action="{{route('store.subsubcategory')}}" method="post">
					<div class="row my-2">
						<div class="col">
							{{csrf_field()}}
							<label>Sub-Sub Category</label>
							<input type="text" name="category_name" class="form-control" required>
							@if ($errors->has('category_name'))
							<span class="text-danger">
								<strong>{{ $errors->first('category_name') }}</strong>
							</span>
							@endif
							<br>

						</div>
					</div>
					<div class="row my-2">
						<div class="col">
							<select name="" id="subcategory" class="form-control">
								<option value="">Select Option</option>
								@foreach($categorys as $category)
								<option value="{{$category->id}}">{{$category->category_name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row my-2">
						<div class="col">
							<select name="refer_id" id="subsubcategory" class="form-control">
								<option value="">Select Option</option>
							</select>
						</div>
					</div>
					<div class="row my-2">
						<div class="col">
							<button type="submit" class="btn btn-info btn-sm btn-block mt-3">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$("#subcategory").change(function(){
		let ref_id = $("#subcategory").val();
		//alert(ref_id);
		$.ajax({
			type: 'GET',
			url: '{{url("get-sub-category")}}/'+ref_id,
			// data: {'ref_id': ref_id},
			success: function(res){
				var data = JSON.parse(res);
				var ln = data.length;
				$("#subsubcategory").empty();
				for(var i = 0; i< ln; i++){
					$("#subsubcategory").append('<option value="'+data[i]['id']+'">'+data[i]['category_name']+'</option>');
				}
			},
			error: function(err){
				console.log(err);
			}
		});
	});
</script>

@endsection