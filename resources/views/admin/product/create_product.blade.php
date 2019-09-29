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
				<form action="{{route('store.product')}}" method="post">
					{{csrf_field()}}
					<label>Product Name</label>
					<input type="text" name="product_name" class="form-control" required>
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
                         <option value="{{$product->id}}">{{$product->product_name}}</option>
						@endforeach
					</select>

					<button type="submit" class="btn btn-success form-control mt-3">Save</button>
				</form>
				
			</div>

			<div class="col-md-5 mt-4">
				<table class="table table-sm table-primary">
				  <thead>
				    <tr>
				      <th scope="col">SL</th>
				      <th scope="col">Name</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@php
				  	$i = 0;
				  	@endphp
				  	 @foreach($main_products as $main_product)
				  	 @php
				  	 $i++;
				  	 @endphp
				    <tr>
				      <td>{{$i}}</td>
				      <td>{{$main_product->product_name}}</td>
				      <td>
				      	<a class="btn btn-warning btn-sm" href="{{route('edit.product',$main_product->id)}}">Edit</a>
				      	<a class="btn btn-danger btn-sm" href="{{route('delete.product',$main_product->id)}}">Delete</a>
				      </td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>

				{{ $main_products->links() }}
				
			</div>
		</div>
	</div>
</div>



@endsection