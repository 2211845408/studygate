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
            <section class="content">
                <div class="container-fluid">
                    <!-- جدول الامتحانات -->
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-calendar-alt ml-1"></i>
                                جدول الامتحانات - فصل ربيع 2025
                            </h3>
                        </div>
                        <div class="card-body">
                            <!-- تنبيه -->
                            <div class="alert alert-info text-center mb-4">
                                <i class="icon fas fa-info-circle"></i>
                                موعد ومكان الامتحانات سيُعلن لاحقًا من قبل الكلية.
                            </div>


                            <!-- الجدول -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-center" id="examTable">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>الفترة الرابعة</th>
                                            <th>الفترة الثالثة</th>
                                            <th>الفترة الثانية</th>
                                            <th>الفترة الأولى</th>
                                            <th>اليوم والتاريخ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>CS101</td>
                                            <td></td>
                                            <td>IT202</td>
                                            <td><strong>(1)</strong> السبت</td>
                                        </tr>
                                        <tr>
                                            <td>CS202</td>
                                            <td></td>
                                            <td>IT301</td>
                                            <td></td>
                                            <td><strong>(2)</strong> الأحد</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>SE203</td>
                                            <td></td>
                                            <td>CS103</td>
                                            <td><strong>(3)</strong> الاتنين</td>
                                        </tr>
                                        <tr>
                                            <td>IT303</td>
                                            <td></td>
                                            <td>CS205</td>
                                            <td></td>
                                            <td><strong>(4)</strong> التلاتاء</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>CS304</td>
                                            <td></td>
                                            <td>IT102</td>
                                            <td><strong>(5)</strong> الاربعاء</td>
                                        </tr>
                                        <tr>
                                            <td>SE101</td>
                                            <td></td>
                                            <td>CS207</td>
                                            <td></td>
                                            <td><strong>(6)</strong> الخميس</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>IT204</td>
                                            <td></td>
                                            <td>CS302</td>
                                            <td><strong>(7)</strong> السبت</td>
                                        </tr>
                                        <tr>
                                            <td>SE305</td>
                                            <td></td>
                                            <td>IT401</td>
                                            <td></td>
                                            <td><strong>(8)</strong> الأحد</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>CS406</td>
                                            <td></td>
                                            <td>IT305</td>
                                            <td><strong>(9)</strong> الاتنين</td>
                                        </tr>
                                        <tr>
                                            <td>CS303</td>
                                            <td></td>
                                            <td>SE404</td>
                                            <td></td>
                                            <td><strong>(10)</strong> التلاتاء</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>IT203</td>
                                            <td></td>
                                            <td>CS201</td>
                                            <td><strong>(11)</strong> الاربعاء</td>
                                        </tr>
                                        <tr>
                                            <td>SE102</td>
                                            <td></td>
                                            <td>IT104</td>
                                            <td></td>
                                            <td><strong>(12)</strong> الخميس</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- تذييل البطاقة -->
                        <div class="card-footer text-muted">
                            <small>آخر تحديث:
                                <?= date('Y-m-d') ?>
                            </small>
                        </div>
                    </div>
                </div>
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