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
                    <section id="schedule" class="mt-5">
                        <div class="card card-primary">
                            <div class="card-header bg-light-blue">
                                <h3 class="card-title">
                                    <i class="fas fa-calendar-alt ml-2"></i>الجدول الدراسي الأسبوعي
                                </h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-center schedule-table">
                                        <thead class="bg-light-blue">
                                            <tr>
                                                <th style="width: 15%">اليوم</th>
                                                <th style="width: 21.25%">8:00 - 10:00</th>
                                                <th style="width: 21.25%">10:00 - 12:00</th>
                                                <th style="width: 21.25%">12:00 - 2:00</th>
                                                <th style="width: 21.25%">2:00 - 4:00</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold bg-light">الأحد</td>
                                                <td class="lecture-cell">
                                                    <div class="d-flex flex-column">
                                                        <span class="font-weight-bold">برمجة متقدمة</span>
                                                        <span class="text-sm">CS301 - قاعة 102</span>
                                                        <span class="text-xs text-muted">محاضرة نظرية</span>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold bg-light">الإثنين</td>
                                                <td></td>
                                                <td class="lab-cell">
                                                    <div class="d-flex flex-column">
                                                        <span class="font-weight-bold">ذكاء اصطناعي</span>
                                                        <span class="text-sm">CS302 - معمل 203</span>
                                                        <span class="text-xs text-muted">عملي</span>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold bg-light">الثلاثاء</td>
                                                <td></td>
                                                <td></td>
                                                <td class="lecture-cell">
                                                    <div class="d-flex flex-column">
                                                        <span class="font-weight-bold">برمجة متقدمة</span>
                                                        <span class="text-sm">CS301 - قاعة 102</span>
                                                        <span class="text-xs text-muted">تمارين عملية</span>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold bg-light">الأربعاء</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="seminar-cell">
                                                    <div class="d-flex flex-column">
                                                        <span class="font-weight-bold">حلقة نقاش</span>
                                                        <span class="text-sm">قاعة 301</span>
                                                        <span class="text-xs text-muted">سمنار طلبة</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold bg-light">الخميس</td>
                                                <td colspan="4" class="text-muted bg-light">لا يوجد محاضرات</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
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