@extends('admin.layout.index')
@section('content')

<article class="content items-list-page" ng-controller="catalogController">
	<div class="title-search-block">
		<div class="title-block">
			<div class="row">
				<div class="col-md-6">
			<h3 class="title"> Catalog <a href="admin/catalog/add" class="btn btn-primary btn-sm rounded-s"> Add New </a><!--
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
					<div class="item-col item-col-header fixed item-col-img md">
						<div> <span>Media</span> </div>
					</div>
					<div class="item-col item-col-header item-col-title">
						<div> <span>Name</span> </div>
					</div>
					<div class="item-col item-col-header item-col-date">
						<div> <span>Published</span> </div>
					</div>
					<div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
				</div>
			</li>


			<li class="item" ng-repeat="ct in catalogs">
				<div class="item-row">
					<div class="item-col fixed item-col-check">
						<label class="item-check" id="select-all-items">
							<input type="checkbox" class="checkbox">
							<span></span> </label>
						</div>
						<div class="item-col fixed item-col-img md">
							<div class="item-img rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)"></div>
						</div>
						<div class="item-col fixed pull-left item-col-title">
							<div class="item-heading">Name</div>
							<div>
								<h4 class="item-title"> <% ct.name %></h4>
							</div>
						</div>
						<div class="item-col item-col-date">
							<div class="item-heading">Published</div>
							<div class="no-overflow"> <% ct.created_at %> </div>
						</div>
						<div class="item-col fixed item-col-actions-dropdown">
							<div class="item-actions-dropdown"> <a class="item-actions-toggle-btn"> <span class="inactive"> <i class="fa fa-cog"></i> </span> <span class="active"> <i class="fa fa-chevron-circle-right"></i> </span> </a>
								<div class="item-actions-block">
									<ul class="item-actions-list">
										<li> <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a> </li>
										<li> <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>





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