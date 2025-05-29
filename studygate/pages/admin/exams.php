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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">جدول الامتحانات</h3>
                            <a href="add_lecture.php" class="btn btn-sm float-right"
                                style="background-color: #7ecf68; color: white; font-weight: bold; border: none;">
                                <i class="fas fa-plus"></i>
                                إضافة امتحان
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>اسم المادة</th>
                                        <th>تاريخ الامتحان</th>
                                        <th>الوقت</th>
                                        <th>القاعة</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>برمجة كائنية التوجه</td>
                                        <td>2025-06-10</td>
                                        <td>10:00 صباحًا</td>
                                        <td>قاعة 5</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                                تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                                حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>برمجة كائنية التوجه</td>
                                        <td>2025-06-10</td>
                                        <td>10:00 صباحًا</td>
                                        <td>قاعة 5</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                                تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                                حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>برمجة كائنية التوجه</td>
                                        <td>2025-06-10</td>
                                        <td>10:00 صباحًا</td>
                                        <td>قاعة 5</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                                تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                                حذف</a>
                                        </td>
                                    </tr>
                                    <!-- يمكنك تكرار الصفوف حسب الحاجة -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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