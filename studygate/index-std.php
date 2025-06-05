<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">

    

    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>
    <!-- /.navbar -->

    
      <!-- Sidebar -->
      <?php
      include "sidebar.php"
      ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
  <section class="content-header text-center">
    <h2>👋 مرحبًا عبد الرحمن</h2>
    <p class="text-muted">لوحة معلومات الطالب - الفصل الدراسي الثاني 2025</p>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- Cards Section -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>5</h3>
              <p>عدد المواد</p>
            </div>
            <div class="icon"><i class="fas fa-book"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>45.80</h3>
              <p>معدل الفصل الحالي</p>
            </div>
            <div class="icon"><i class="fas fa-chart-line"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44.50</h3>
              <p>المعدل التراكمي</p>
            </div>
            <div class="icon"><i class="fas fa-graduation-cap"></i></div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>منتظم</h3>
              <p>حالة الطالب</p>
            </div>
            <div class="icon"><i class="fas fa-user-check"></i></div>
          </div>
        </div>
      </div>

      <!-- جدول الامتحانات القادمة -->
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title mb-0">📅 أقرب الامتحانات</h5>
        </div>
        <div class="card-body p-0">
          <table class="table table-bordered m-0">
            <thead>
              <tr>
                <th>المادة</th>
                <th>التاريخ</th>
                <th>الوقت</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>نظم تشغيل</td><td>10 يونيو 2025</td><td>10:00 صباحًا</td></tr>
              <tr><td>قواعد بيانات</td><td>12 يونيو 2025</td><td>1:00 ظهرًا</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- روابط سريعة -->
      <div class="row mt-4">
        <div class="col-md-6">
          <a href="#" class="btn btn-outline-primary btn-block"><i class="fas fa-file-alt"></i> عرض الدرجات</a>
        </div>
        <div class="col-md-6">
          <a href="#" class="btn btn-outline-success btn-block"><i class="fas fa-user-cog"></i> تعديل البروفايل</a>
        </div>
      </div>

    </div>
  </section>
</div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright </strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>