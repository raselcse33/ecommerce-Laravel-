@extends('front.layouts.main')

@section('content')
<!--banner-->
<div class="banner-top">
  <div class="container">
    <h4><a href="index.html">Home</a><label>/</label>Wishlist</h4>
    <div class="clearfix"> </div>
  </div>
</div>

<!-- contact -->
<div class="check-out">	 
  <div class="container">	 
    <div class="spec ">
      <h3>Wishlist</h3>
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
                  <th class="t-head">Purchase</th>
              </tr>
              @foreach($posts as $post)
              <tr class="cross">
                  <td class="ring-in t-data">
                      <a href="single.html" class="at-in">
                          <img style="width: 90px; height: 90px" src="{{asset('public/images/post/'.$post->image)}}" class="img-responsive" alt="">
                      </a>
                      <div class="sed">
                          <h5>{{$post->title}}</h5>
                      </div>
                      <div class="clearfix"> </div>
                       <div class="close1"> <a href="{{route('wishlist.delete',$post->post_id)}}" class="fa fa-times" aria-hidden="true"></a></div>
                  </td>
                  <td class="t-data">{{$post->price}}</td>

                  <td class="t-data t-w3l"> <a href="{{route('add.card',['id'=>$post->post_id])}}" class="btn btn-success my-cart-btn">Add Card</a></td>
                </tr>
                @endforeach
          </table>
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
