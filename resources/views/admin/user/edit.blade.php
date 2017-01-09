@extends('admin.layout.index')
@section('content')

<article class="content item-editor-page">
<div class="title-block">
<h3 class="title"> Edit <span class="sparkline bar" data-type="bar">{{$user->name}}</span> </h3>
</div>
@if(count($errors) > 0 )
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $err )
	<li>{{$err}}</li>
@endforeach		
</ul>
</div>
@endif
@if(session('message'))
<div class="alert alert-danger">
{{session('message')}}
</div>
@endif
<form action="admin/user/edit/{{$user->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="card card-block">
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Name: </label>
	<div class="col-sm-10">
		<input type="text" class="form-control boxed" placeholder="" name="name" value="{{$user->name}}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> UserName: </label>
	<div class="col-sm-10">
		<input type="text" class="form-control boxed" placeholder="" name="email" value="{{$user->email}}" disabled="">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Password: </label>
	<div class="col-sm-10">
		<input type="password" class="form-control boxed" placeholder="" name="password" value="{{$user->password}}">
	</div>
</div>

			<div class="form-group row">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary"> Submit </button>
				</div>
			</div>
		</div>
	</form>
</article>

@endsection