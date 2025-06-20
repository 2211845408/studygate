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
  <!-- داخل content-wrapper -->
<div class="content-wrapper">
  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 text-center">
          <h2>درجات الطالب - الفصل الدراسي الثاني 2025</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead class="table-primary">
                <tr>
                  <th>المادة</th>
                  <th>درجة الأعمال (30)</th>
                  <th>الامتحان النهائي (30)</th>
                  <th>الدرجة النهائية (60)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>تطوير تطبيقات</td>
                  <td>18</td>
                  <td>30</td>
                  <td><strong>48</strong></td>
                </tr>
                <tr>
                  <td>البرمجة</td>
                  <td>20</td>
                  <td>28</td>
                  <td><strong>48</strong></td>
                </tr>
                <tr>
                  <td>قواعد البيانات</td>
                  <td>17</td>
                  <td>27</td>
                  <td><strong>44</strong></td>
                </tr>
                <tr>
                  <td>جافا</td>
                  <td>19</td>
                  <td>29</td>
                  <td><strong>48</strong></td>
                </tr>
                <tr>
                  <td>نظم تشغيل</td>
                  <td>16</td>
                  <td>25</td>
                  <td><strong>41</strong></td>
                </tr>
                <tr class="table-secondary fw-bold">
                  <td colspan="3">المعدل الفصلي</td>
                  <td>45.80</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="mt-4 d-flex justify-content-between align-items-center">
            <h5 class="fw-bold">المعدل الفصلي: <span class="text-primary">45.80</span></h5>
            <button class="btn btn-outline-primary" onclick="window.print()">طباعة</button>
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
