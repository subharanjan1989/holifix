<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="spinner-2" id="sw_loader">
  <span></span>
</div>

<div class="wrapper">
  <!-- Navbar -->
  @include('admin.partials.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} <a href="#">TE</a>.</strong>
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div> -->
  </footer>
</div>
<!-- ./wrapper -->

@include('admin.partials.scripts')
@yield('script')
<script>
$(document).ready(function() {
  // @if(!Request::is('edit-venue/*','cms-page-edit/*','add-venue'))
  //   $(window).keydown(function(event){
  //     if(event.keyCode == 13) {
  //       event.preventDefault();
  //       return false;
  //     }
  //   });
  // @endif

  $("#sw_loader").hide();
});
</script>
</body>
</html>
