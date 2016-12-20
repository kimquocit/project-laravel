<!doctype html>
<html class="no-js" lang="en" ng-app="my-app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="admin_asset/css/vendor.css">
    <link rel="stylesheet" id="theme-style" href="admin_asset/css/app.css">
    <!-- Theme initialization -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
        {};
        var themeName = themeSettings.themeName || '';
        if (themeName)
        {
            document.write('<link rel="stylesheet" id="theme-style" href="admin_asset/css/app-' + themeName + '.css">');
        }
        else
        {
            document.write('<link rel="stylesheet" id="theme-style" href="admin_asset/css/app.css">');
        }
    </script>
</head>
<body>
    <div class="main-wrapper">
       <div class="app" id="app">
           @include('admin.layout.header')
           @include('admin.layout.side')
           @yield('content')
           @include('admin.layout.footer')
           
       </div>
   </div>
   <!-- Reference block for JS -->
   <div class="ref" id="ref">
       <div class="color-primary"></div>
       <div class="chart">
          <div class="color-primary"></div>
          <div class="color-secondary"></div>
      </div>
  </div>
  <script src="admin_asset/js/angular.min.js"></script>
  <script src="admin_asset/js/vendor.js"></script> 
  <script src="admin_asset/js/app.js"></script>
  <script src="admin_asset/js/app/app.js"></script>
  <script src="admin_asset/js/app/controllers/catalogController.js"></script>
  @yield('script')
</body>
</html>