<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('adminassets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('adminassets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminassets')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminassets')}}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('adminassets')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('adminassets')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('adminassets')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('adminassets')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('adminassets')}}/plugins/chart.js/Chart.min.js"></script>

<script src="{{asset('adminassets')}}/dist/js/demo.js"></script>

@if(Request::is('admin/dashboard*'))
<script src="{{asset('adminassets')}}/dist/js/pages/dashboard2.js"></script>
@endif