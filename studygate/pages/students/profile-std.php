<!DOCTYPE html>
<html lang="en">
<?php
include "../../head.php";
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <?php
        include "../../navbar.php";
        ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
        include "../../sidebar-std.php";
        ?>

  <!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- عنوان الصفحة -->
  <section class="content-header">
    <div class="container-fluid text-center">
      <h2 class="mb-3">
      Profile 
      </h2>
      

    </h2>
    </div>
  </section>

  <!-- المحتوى الرئيسي -->
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">

        <!-- الكرت الرئيسي -->
        <div class="col-md-8">
          <div class="card card-info shadow-sm">
            <div class="card-body box-profile">

              <!-- صورة واسم -->
              <div class="text-center mb-4">
                <img class="profile-user-img img-fluid img-circle elevation-2"
                     src="https://adminlte.io/themes/v3/dist/img/user4-128x128.jpg"
                     alt="صورة الطالب">
                <h3 class="profile-username mt-2">عبد الرحمن الأسطى</h3>
                <p class="text-muted">طالب - هندسة برمجيات</p>
              </div>

              <!-- بيانات الطالب -->
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <i class="fas fa-id-card-alt text-primary"></i> الرقم الأكاديمي: <span class="float-right">202300456</span>
                    </li>
                    <li class="list-group-item">
                      <i class="fas fa-building text-primary"></i> الكلية: <span class="float-right">تقنية المعلومات</span>
                    </li>
                    <li class="list-group-item">
                      <i class="fas fa-code text-primary"></i> التخصص: <span class="float-right">هندسة برمجيات</span>
                    </li>
                    <li class="list-group-item">
                      <i class="fas fa-layer-group text-primary"></i> المستوى: <span class="float-right">الثاني</span>
                    </li>
                  </ul>
                </div>

                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <i class="fas fa-calendar-alt text-success"></i> الفصل الحالي: <span class="float-right">الفصل الثاني 2025</span>
                    </li>
                    <li class="list-group-item">
                      <i class="fas fa-envelope text-success"></i> البريد الإلكتروني: <span class="float-right">abdulrahman@example.com</span>
                    </li>
                    <li class="list-group-item">
                      <i class="fas fa-phone text-success"></i> الهاتف: <span class="float-right">+218-91-1234567</span>
                    </li>
                    <li class="list-group-item">
                      <i class="fas fa-map-marker-alt text-success"></i> العنوان: <span class="float-right">طرابلس، ليبيا</span>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- زر التعديل -->
              <div class="mt-4 text-center">
                <a href="#" class="btn btn-info">
                  <i class="fas fa-edit"></i> تعديل البيانات
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>




  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</script>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS DataTables -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


</body>
</html>
