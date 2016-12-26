@extends('admin.layout.index')
@section('content')

<article class="content item-editor-page">
<div class="title-block">
<h3 class="title"> Edit <span class="sparkline bar" data-type="bar">{{$product->name}}</span> </h3>
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
<form action="admin/product/edit/{{$product->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="card card-block">
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Name: </label>
	<div class="col-sm-10">
		<input type="text" class="form-control boxed" placeholder="" name="name" value="{{$product->name}}">
	</div>
</div>
<div class="form-group row">
<label class="col-sm-2 form-control-label text-xs-right"> Category: </label>
<div class="col-sm-10">
<select class="c-select form-control boxed" name="catalog">
@foreach($catalog as $ct)
<option @if($product->catalog_id == $ct->id) {{"selected"}} @endif value="{{$ct->id}}">{{$ct->name}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Price: </label>
	<div class="col-sm-10">
		<input type="text" class="form-control boxed" placeholder="" name="price" value="{{number_format($product->price)}}">
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-2 form-control-label text-xs-right"> Content: </label>
	<div class="col-sm-10">
		<textarea name="content" class="form-control">{{$product->content}}</textarea>
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