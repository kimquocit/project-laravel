@extends('admin.layout.index')
@section('content')
<article class="content items-list-page" ng-controller="catalogController">
	<div class="title-search-block">
		<div class="title-block">
			<div class="row">
				<div class="col-md-6">
			<h3 class="title"> User <a href="admin/user/add" class="btn btn-primary btn-sm rounded-s"> Add New </a><!--
			-->
			<div class="action dropdown">
				<button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More actions... </button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu1"> <a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o icon"></i>Mark as a draft</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirm-modal"><i class="fa fa-close icon"></i>Delete</a> </div>
			</div>
		</h3>
		<p class="title-description"> List of sample items - e.g. books, movies, events, etc... </p>
	</div>
</div>
</div>
<div class="items-search">
	<form class="form-inline">
		<div class="input-group">
			<input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
			<span class="input-group-btn">
				<button class="btn btn-secondary rounded-s" type="button"> <i class="fa fa-search"></i> </button>
			</span> </div>
		</form>
	</div>
</div>
<div class="card items">
	<ul class="item-list striped">
		<li class="item item-list-header hidden-sm-down">
			<div class="item-row">
				<div class="item-col fixed item-col-check">
					<label class="item-check" id="select-all-items">
						<input type="checkbox" class="checkbox">
						<span></span> </label>
					</div>
					<div class="item-col item-col-header item-col-title">
						<div> <span>Name</span> </div>
					</div>
					<div class="item-col item-col-header item-col-title">
						<div> <span>Email</span> </div>
					</div>
					<div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
				</div>
			</li>
			@foreach($user as $us)
			<li class="item">
				<div class="item-row">
					<div class="item-col fixed item-col-check">
						<label class="item-check" id="select-all-items">
							<input type="checkbox" class="checkbox">
							<span></span> </label>
						</div>
						
						<div class="item-col fixed pull-left item-col-title">
							<div class="item-heading">Name</div>
							<div>
								<h4 class="item-title">{{$us->name}}</h4>
							</div>
						</div>
						<div class="item-col fixed pull-left item-col-title">
							<div class="item-heading">Email</div>
							<div>
								<h4 class="item-title">{{$us->email}}</h4>
							</div>
						</div>
						<div class="item-col fixed item-col-actions-dropdown">
							<div class="item-actions-dropdown">
								<div class="item-actions-block">
									<ul class="item-actions-list">
										<li> <a class="remove" href="admin/user/delete/{{$us->id}}"> <i class="fa fa-trash-o "></i> </a> </li>
										<li> <a class="edit" href="admin/user/edit/{{$us->id}}"> <i class="fa fa-pencil"></i> </a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				@endforeach



			</ul>
		</div>
		<nav class="text-xs-right">
			<ul class="pagination">
				<li class="page-item"> <a class="page-link" href=""> Prev </a> </li>
				<li class="page-item active"> <a class="page-link" href=""> 1 </a> </li>
				<li class="page-item"> <a class="page-link" href=""> 2 </a> </li>
				<li class="page-item"> <a class="page-link" href=""> 3 </a> </li>
				<li class="page-item"> <a class="page-link" href=""> 4 </a> </li>
				<li class="page-item"> <a class="page-link" href=""> 5 </a> </li>
				<li class="page-item"> <a class="page-link" href=""> Next </a> </li>
			</ul>
		</nav>
	</article>
	@endsection

