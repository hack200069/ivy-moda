<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<!-- jQuery -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/moment/moment.min.js"></script>
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo SCRIPT_ROOT ?>/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SCRIPT_ROOT ?>/public/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SCRIPT_ROOT ?>/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SCRIPT_ROOT ?>/public/dist/js/demo.js"></script>
<script>
  var dashboardNavLinkElement = document.querySelector('#dashboard-nav-link');
  var orderNavLinkElement = document.querySelector('#order-nav-link');
  var customerNavLinkElement = document.querySelector('#customer-nav-link');
  var categoryNavLinkElement = document.querySelector('#category-nav-link');
  var productNavLinkElement = document.querySelector('#product-nav-link');
  var newsNavLinkElement = document.querySelector('#news-nav-link');
  var pathName = window.location.pathname;
  if (pathName.includes('/order')) {
    orderNavLinkElement.classList.add('active');
  } else if (pathName.includes('/customer')) {
    customerNavLinkElement.classList.add('active');
  } else if (pathName.includes('/category')) {
    categoryNavLinkElement.classList.add('active');
  } else if (pathName.includes('/product')) {
    productNavLinkElement.classList.add('active');
  } else if (pathName.includes('/news')) {
    newsNavLinkElement.classList.add('active');
  } else {
    dashboardNavLinkElement.classList.add('active');
  }
</script>
</body>

</html>