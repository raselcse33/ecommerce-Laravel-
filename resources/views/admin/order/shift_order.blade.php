@extends('admin.home')
@section('headTitle')
Shift Order List

@endsection
@section('content')
<div class="container">
   @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
  <div class="row">
    <div class="col-md-12">
      <div class="card-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">product Name</th>
       <th scope="col">product Qty</th>
       <th scope="col">product Price</th>
       <th scope="col">product Image</th>
       <th scope="col">Order Date</th>
       <th scope="col">Delivery Date</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($ordes as $order)
    <tr>
      <td>{{$order->product_name}}</td>
      <td>{{$order->product_qty}}</td>
      <td>{{$order->product_price}}</td> 
      <td><img style="height: 90px; width: 90px" src="{{asset('public/images/post/'.$order->product_image )}}"></td> 
      <td>{{$order->order_date}}</td>
      <td>{{$order->updated_at->format('Y/m/d')}}</td>
      <td>
        <a class="btn sm btn-info" href="{{route('shift.deteils.order',['id'=>$order->id])}}">View</a>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>


      </div>
    </div>
  </div>
</div>
@endsection