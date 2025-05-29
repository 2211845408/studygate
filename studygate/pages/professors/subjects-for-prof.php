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
        include "../../sidebar.php";
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Study Materials </li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <section id="subjects" class="mt-4">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">المواد المكلف بها</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="border-right" style="width: 10%">#</th>
                                        <th class="border-right" style="width: 40%">اسم المقرر</th>
                                        <th class="border-right" style="width: 20%">رمز المقرر</th>
                                        <th style="width: 30%">عدد الطلاب</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-right">1</td>
                                        <td class="border-right">برمجة متقدمة</td>
                                        <td class="border-right"><span>CS301</span></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" style="width: 85%"></div>
                                            </div>
                                            <small>34/40</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-right">2</td>
                                        <td class="border-right">ذكاء اصطناعي</td>
                                        <td class="border-right"><span>CS302</span></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 65%"></div>
                                            </div>
                                            <small>26/40</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-right">3</td>
                                        <td class="border-right">قواعد البيانات</td>
                                        <td class="border-right"><span>CS303</span></td>


                </section>


            <!-- /.content -->
        </div>



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