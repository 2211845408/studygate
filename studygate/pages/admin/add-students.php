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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">بيانات الطالب</h3>
                        </div>
                        <form action="add_student.php" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <!-- عمود اليمين -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الاسم الكامل</label>
                                            <input type="text" class="form-control" name="full_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>رقم القيد</label>
                                            <input type="text" class="form-control" name="student_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <!-- عمود اليسار -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>رقم الهاتف</label>
                                            <input type="tel" class="form-control" name="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label>عنوان السكن</label>
                                            <textarea class="form-control" name="address" rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                                <a href="show-student.html" class="btn btn-default">إلغاء</a>
                            </div>
                        </form>
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