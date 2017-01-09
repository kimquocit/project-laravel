@extends('admin.layout.index')
@section('content')

<article class="content item-editor-page">
<div class="title-block">
<h3 class="title"> Add new item <span class="sparkline bar" data-type="bar"></span> </h3>
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
<form action="admin/user/add" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="card card-block">
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Name: </label>
	<div class="col-sm-10">
		<input type="text" class="form-control boxed" placeholder="" name="name">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Email: </label>
	<div class="col-sm-10">
		<input type="email" class="form-control boxed" name="email" placeholder="Your email address">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Password: </label>
	<div class="col-sm-10">
		<input type="password" class="form-control boxed" placeholder="" name="password">
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