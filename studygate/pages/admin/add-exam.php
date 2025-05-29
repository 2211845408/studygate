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
            <!-- add_exam.php -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">إضافة امتحان جديد</h3>
                        </div>
                        <form action="update_exam.php" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <!-- عمود اليمين -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اسم المادة</label>
                                            <select class="form-control" name="subject_name" required>
                                                <option value="" disabled selected>اختر المادة</option>
                                                <option value="رياضيات">رياضيات</option>
                                                <option value="فيزياء">فيزياء</option>
                                                <option value="كيمياء">كيمياء</option>
                                                <option value="برمجة">برمجة</option>
                                                <option value="لغة عربية">لغة عربية</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ الامتحان</label>
                                            <input type="date" class="form-control" name="exam_date" required>
                                        </div>
                                    </div>
                                    <!-- عمود اليسار -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الفترة</label>
                                            <select class="form-control" name="lecture_period" required>
                                                <option value="">-- اختر الفترة --</option>
                                                <option value="الفترة الأولى">الفترة الأولى</option>
                                                <option value="الفترة الثانية" selected>الفترة الثانية</option>
                                                <option value="الفترة الثالثة">الفترة الثالثة</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>القاعة</label>
                                            <input type="text" class="form-control" name="hall" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">اضافة</button>
                                <a href="exams.php" class="btn btn-secondary">رجوع</a>
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