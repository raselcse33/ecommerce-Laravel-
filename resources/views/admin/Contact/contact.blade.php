@extends('admin.home')
@section('headTitle')
Contact List
@endsection
@section('content')

<div class="container">
	@if (Session::has('message'))
	<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
	@endif
	<div class="row">
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Message</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contacts as $contact)
					<tr>
						<td>{{$contact->name}}</td>
						<td>{{$contact->email}}</td>
						<td>{{$contact->message}}</td>
						<td>
							<a class="btn-success btn-sm" href="{{route('view.contact',['id'=>$contact->id])}}"><i class="fas fa-edit"></i></a>
							<a class="btn-danger btn-sm" href="{{route('contact.delete',['id'=>$contact->id])}}">X</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>




@endsection