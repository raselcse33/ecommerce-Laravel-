@extends('admin.home')
@section('headTitle')
Details Order
@endsection
@section('content')
<div class="container">
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<label>Customer name</label>
				<input type="text" class="form-control" name="customer_name" value="{{$details_order->customer_name}}" readonly="">
			</div>
			<div class="col-md-6">
				<label>Customer Number</label>
				<input type="text" class="form-control" name="customer_number" value="{{$details_order->customer_number}}" readonly="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Customer Address</label>
				<input type="text" class="form-control" name="customer_address" value="{{$details_order->customer_address}}" readonly="">
			</div>
			<div class="col-md-6">
				<label>Customer Email</label>
				<input type="text" class="form-control" name="customer_email" value="{{$details_order->customer_email}}" readonly="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Product Name</label>
				<input type="text" class="form-control" name="product_name" value="{{$details_order->product_name}}" readonly="">
			</div>
			<div class="col-md-6">
				<label>Order Date</label>
				<input type="text" class="form-control" name="order_date" value="{{$details_order->order_date}}" readonly="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Product Price</label>
				<input type="text" class="form-control" name="product_price" value="{{$details_order->product_price}}" readonly="">
			</div>
			<div class="col-md-6">
				<label>Product Qty</label>
				<input type="text" class="form-control" name="product_qty" value="{{$details_order->product_qty}}" readonly="">
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Product Image</label>
				<img class="mt-3" style="height: 90px; width: 90px;" src="{{asset('public/images/post/'.$details_order->product_image )}}">
			</div>
		</div>
	</div>
</div>




@endsection