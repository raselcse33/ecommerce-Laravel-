@extends('admin.home')
@section('headTitle')
Details Contact
@endsection
@section('content')

<div class="container">
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<input type="text" value="{{$contact->name}}" class="form-control" readonly>
			</div>
			<div class="col-md-6">
				<input type="email" class="form-control" value="{{$contact->email}}" readonly>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-md-12">
			<textarea class="form-control" readonly>
				{{$contact->message}}
			</textarea>
			</div>
		</div>
	</div>
</div>


@endsection