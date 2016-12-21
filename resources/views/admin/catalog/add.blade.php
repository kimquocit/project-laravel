@extends('admin.layout.index')
@section('content')
<article class="content forms-page" ng-controller="catalogController">
<div class="title-block">
<h3 class="title"> Add Catalog </h3>
<p class="title-description"> Sample form elements </p>
@if(session('message'))
<div class="alert alert-danger">
{{session('message')}}
</div>
@endif

<section class="section">
<div class="row sameheight-container">
	<div class="col-md-12">
		<div class="card card-block sameheight-item">
			<form action="admin/catalog/add" method="POST" name="frmCatalog">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group has-error">
					<label class="control-label">Catalog Name</label>
					<input type="text" name="name" id="name" class="form-control underlined" ng-model="name" required>
					<span class="has-error" ng-show="frmCatalog.name.$touched && frmCatalog.name.$invalid">Error message.</span> </div>
					<div class="form-group"> <button type="submit" class="btn btn-primary" ng-disabled="frmCatalog.$invalid">Submit</button> </div>
				</form>
			</div>
		</div>
	</div>
</section>
</article>

@endsection