@extends('front.layouts.main')
@section('content')

<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile">
			<h3>please Fill up</h3>
			<form action="{{route('order')}}" method="post">
				{{csrf_field()}}
				<div class="key">
					<input  type="text" class="form-control" name="name" value="{{$user->full_name}}" placeholder="name" required>
					<div class="clearfix"></div>
				</div>
				@if ($errors->has('name'))
					<span class="text-danger">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif

				<div class="key">
					<input  type="text" class="form-control"  name="phone" value="{{$user->phone_number}}" placeholder="Phone 
					number" required>
					<div class="clearfix"></div>
				</div>
				@if ($errors->has('phone'))
					<span class="text-danger">
						<strong>{{ $errors->first('phone') }}</strong>
					</span>
					@endif

				<div class="key">
					<input  type="email" class="form-control"  name="email" value="{{$user->email}}" placeholder="Email Address" required>
					<div class="clearfix"></div>
				</div>
				@if ($errors->has('email'))
					<span class="text-danger">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif

				<div class="key">
					<textarea name="address" class="form-control" placeholder="your address" required></textarea>
					<div class="clearfix"></div>
				</div>
				@if ($errors->has('address'))
					<span class="text-danger">
						<strong>{{ $errors->first('address') }}</strong>
					</span>
					@endif

				<input type="submit" value="Save" onclick="return confirm('Are you sure you want to buy this product?')">
			</form>
		</div>
	</div>
</div>

@endsection