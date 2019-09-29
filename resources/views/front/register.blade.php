@extends('front.layouts.main')

@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h3 >Register</h3>
        <h4><a href="index.html">Home</a><label>/</label>Register</h4>
        <div class="clearfix"> </div>
    </div>
</div>

<!--login-->

<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile form1">
           @if (Session::has('message'))
           <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
           @endif
           <h3>Register</h3>
           <form action="{{route('user.registration')}}" method="post">
            {{csrf_field()}}
            <div class="key">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input  type="text" class="form-control"  name="full_name" placeholder="Full Name" required>
                @if ($errors->has('full_name'))
                <span class="text-danger">
                    <strong>{{ $errors->first('full_name') }}</strong>
                </span>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input  type="text" class="form-control" name="email" placeholder="Email" required>
                @if ($errors->has('email'))
                <span class="text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input  type="password" class="form-control" name="password"  placeholder="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input  type="password" class="form-control"  name="confirm_password" placeholder="confirm password" required>
                @if ($errors->has('confirm_password'))
                <span class="text-danger">
                    <strong>{{ $errors->first('confirm_password') }}</strong>
                </span>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input  type="text" class="form-control"  name="phone_number" placeholder="phone number" required>
                @if ($errors->has('phone_number'))
                <span class="text-danger">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
                @endif
                <div class="clearfix"></div>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>

</div>
</div>
@endsection



