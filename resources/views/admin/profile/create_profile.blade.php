@extends('admin.home')
@section('headTitle')
Edit Profile
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8 col-xl-6">

        <div class="tabs">
            <ul class="nav nav-tabs tabs-primary">

                <li class="nav-item active">
                    <!--<a class="nav-link show active text-success" href="#edit" data-toggle="tab">Edit</a>-->
                </li>
            </ul>
            <div class="tab-content">
                        @if (Session::get('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                        @endif

                        <script>
                            var msg = '{{Session::get('alert')}}';
                            var exist = '{{Session::has('alert')}}';
                            if(exist){
                              alert(msg);
                            }
                        </script>

                <div id="edit" class="tab-pane active show">
                    <form action="{{route('user.profile',$user->id)}}" method="post">
                        {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$user->name}}" placeholder="Enter Name" required >
                       
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="e-mail">E-mail</label>
                        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email}}" id="e-mail" placeholder="Enter Email address" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <h4 class="mb-3">Change Password</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">New Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" >

                             @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 text-right mt-3">
                            <button type="submit" class="btn btn-success modal-confirm">Submit</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection