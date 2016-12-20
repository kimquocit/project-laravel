<html>
<body ng-app="my-app">
<div ng-controller="catalogController">
<ul>
	<li ng-repeat="ct in catalogs">
		{{ ct.name }}
	</li>
</ul>
</div>


<script type="text/javascript" src="<?php echo asset('admin_asset/js/app/angular.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('admin_asset/js/app/app.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('admin_asset/js/app/controllers/catalogController.js'); ?>"></script>
</body>
</html>