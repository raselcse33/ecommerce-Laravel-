@extends('front.layouts.main')

@section('content')
<!--banner-->
<div class="banner-top">
  <div class="container">
    <h4><a href="index.html">Home</a><label>/</label>Cart</h4>
    <div class="clearfix"> </div>
  </div>
</div>

<!-- contact -->
<div class="check-out">  
  <div class="container">    
    <div class="spec ">
      <h3>Cart</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
    <table class="table ">
      <tr>
        <th class="t-head head-it ">Products</th>
        <th class="t-head">Price</th>
        <th class="t-head">Quantity</th>

        <th class="t-head">Amount</th>
      </tr>
      @foreach(Cart::content() as $content)
      <tr class="cross">
        <td class="ring-in t-data">
          <a href="single.html" class="at-in">
            <img style="height: 90px; width: 90px" src="{{asset('public/images/post/'.$content->options->image)}}" class="img-responsive" alt="">
          </a>
          <div class="sed">
            <h5>{{$content->name}}</h5>
          </div>
          <div class="clearfix"> </div>
          <div class="close1"> <a href="{{route('product.delete',$content->rowId)}}" class="fa fa-times" aria-hidden="true"></a></div>
        </td>
        <td class="t-data">{{$content->price}}</td>
        <td class="t-data"><div class="quantity"> 
          <div class="quantity-select">            
            {{-- <div class="entry value-minus">&nbsp;</div> --}}
            <a class="entry value-minus" href="{{route('cart.minus',['id'=>$content->rowId, 'qty'=>$content->qty])}}"></a>
            <div class="entry value"><span class="span-1">{{$content->qty}}</span></div>                                  
            <a class="entry value-plus active " href="{{route('cart.plus',['id'=>$content->rowId, 'qty'=>$content->qty])}}">&nbsp;</a>
          </div>
        </div>

      </td>
      <td class="t-data t-w3l"><a class="" href=""></a>{{$content->total}}</td>
    </tr>
    @endforeach
  </table>
  <div class="bg-warning" style="float: right !important;">
    <table style="float: right !inportant;">
     <tbody>
      <tr>
       <th  colspan="12">Subtotal-</th>
       <td>{{Cart::subtotal()}}</td>
     </tr>
     <tr>
       <th colspan="12">Tax-</th>

       <td>{{Cart::tax()}}</td>
     </tr>
     <tr>
       <th colspan="12">Grand Total-</th>
       <td>{{Cart::total()}}</td>
     </tr>
   </tbody>
 </table>
</div>
<div style="text-align: center;" class="cheekout">
  @if(Session::get('id'))
  <a href="{{route('address')}}"> <img style="height: 52px; width: 192px" src="{{asset('public/images/cheekout/900554.png')}}"></a>
  @else
  <a href="{{route('user-login')}}"> <img style="height: 52px; width: 192px" src="{{asset('public/images/cheekout/900554.png')}}"></a>
  @endif

</div>
</div>
</div>

<!--quantity-->
<script>
  $('.value-plus').on('click', function(){
    var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
    divUpd.text(newVal);
  });

  $('.value-minus').on('click', function(){
    var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
    if(newVal>=1) divUpd.text(newVal);
  });
</script>
<!--quantity-->
@endsection
