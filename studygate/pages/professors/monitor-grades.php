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
                <div class="container-fluid pt-4">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-bar mr-2"></i>رصد الدرجات - برمجة متقدمة (CS301)
                            </h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <select class="form-control form-control-sm">
                                        <option>اختر المادة</option>
                                        <option selected="">برمجة متقدمة (CS301)</option>
                                        <option>ذكاء اصطناعي (CS302)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">

                                </div>


                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead class="bg-success">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="15%">الرقم الجامعي</th>
                                            <th width="20%">اسم الطالب</th>
                                            <th width="10%">الحضور %</th>
                                            <th width="15%">الاختبار الأول (20)</th>
                                            <th width="15%">الاختبار الثاني (20)</th>
                                            <th width="15%">النهائي (60)</th>
                                            <th width="15%">المجموع</th>
                                            <th width="10%">التقدير</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2023101</td>
                                            <td>محمد أحمد</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                                </div>
                                                <small>90%</small>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-sm" value="18"
                                                    min="0" max="20">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-sm" value="17"
                                                    min="0" max="20">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-sm" value="55"
                                                    min="0" max="60">
                                            </td>
                                            <td class="font-weight-bold">90</td>
                                            <td><span class="badge bg-primary">A</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2023102</td>
                                            <td>سارة محمد</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-warning" style="width: 75%"></div>
                                                </div>
                                                <small>75%</small>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-sm" value="15"
                                                    min="0" max="20">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-sm" value="14"
                                                    min="0" max="20">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-sm" value="48"
                                                    min="0" max="60">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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