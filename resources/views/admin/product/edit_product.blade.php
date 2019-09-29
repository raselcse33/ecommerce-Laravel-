@extends('admin.home')
@section('headTitle')
Add Product
@endsection
@section('content')

<div class="container">
	<div class="card-body">

		<div class="card-title">
			<h5>Add Product</h5>
		</div>
		 @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
		<div class="row">
			<div class="col-md-7">
				<form action="" method="post">
					{{csrf_field()}}
					<label>Product Name</label>
					<input type="text" name="product_name" class="form-control" value="{{$edit_product->product_name}}" required>
					 @if ($errors->has('product_name'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('product_name') }}</strong>
                          </span>
                      @endif
                      <br>

					<label>Cetagory</label>
					<select class="form-control" name="refer_id">
						<option value="0">select</option>
						@foreach($products as $product)
                         <option value="{{$product->id}}" {{  $product->id == $edit_product->refer_id ? "selected" : "" }}>{{$product->product_name}}</option>
						@endforeach
					</select>

					<button type="submit" class="btn btn-success form-control mt-3">Save</button>
				</form>
				
			</div>
		</div>
	</div>
</div>



@endsection