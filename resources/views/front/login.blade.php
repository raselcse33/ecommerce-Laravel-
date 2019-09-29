@extends('front.layouts.main')

@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h3 >Login</h3>
        <h4><a href="index.html">Home</a><label>/</label>Login</h4>
        <div class="clearfix"> </div>
    </div>
</div>
<!--login-->

<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile">
          @if (Session::has('message'))
          <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
          @endif
          <h3>Login</h3>
          <form action="{{route('user.login')}}" method="post">
            {{csrf_field()}}
            <div class="key">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input  type="text" class="form-control" name="email" placeholder="email" required>
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input  type="password" class="form-control"  name="password" placeholder="password" required>
                    <div class="clearfix"></div>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="forg">
    
            <a href="{{route('user-register')}}" class="forg-right">Register</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection


