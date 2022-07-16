<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("/backend/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("/backend/assets/vendors/iconfonts/puse-icons-feather/feather.css")}}">
    <link rel="stylesheet" href="{{asset("/backend/assets/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("/backend/assets/vendors/css/vendor.bundle.addons.css")}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/backend/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/backend/assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('/backend/assets/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('/backend/assets/icofont/icofont.min.css')}}">
  </head>
    
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layouts.backend_layout.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        
        @include('layouts.backend_layout.sidebar')
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('backend_content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layouts.backend_layout.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('/backend/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('/backend/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/misc.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/settings.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('/backend/assets/js/demo_1/dashboard.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/dropify.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>