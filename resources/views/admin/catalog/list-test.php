<html>
<body ng-app="my-app">
<%'Hello, World!'%>
<div ng-controller="catalogController">
<p><% hoten %></p>
<p ng-repeat="ct in catalogs"><% ct.name %></p>
</div>


<script type="text/javascript" src="<?php echo asset('admin_asset/js/app/angular.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('admin_asset/js/app/app.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('admin_asset/js/app/controllers/catalogController.js'); ?>"></script>
</body>
</html>