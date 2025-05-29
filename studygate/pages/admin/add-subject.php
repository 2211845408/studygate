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
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">إضافة مادة دراسية</h3>
                                </div>

                                <form action="/submit_subject" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="subjectName">اسم المادة</label>
                                            <input type="text" class="form-control" id="subjectName" name="subjectName"
                                                placeholder="أدخل اسم المادة" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="subjectCode">رمز المادة</label>
                                            <input type="text" class="form-control" id="subjectCode" name="subjectCode"
                                                placeholder="أدخل رمز المادة" required>
                                        </div>

                                        <div class="row">
                                            <!-- السنة -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="year">السنة</label>
                                                    <select class="form-control" id="year" name="year" required>
                                                        <option value="" disabled selected>اختر السنة</option>
                                                        <option value="1">الأولى</option>
                                                        <option value="2">الثانية</option>
                                                        <option value="3">الثالثة</option>
                                                        <option value="4">الرابعة</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- القسم -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="department">القسم</label>
                                                    <select class="form-control" id="department" name="department"
                                                        required>
                                                        <option value="" disabled selected>اختر القسم</option>
                                                        <option value="تقنية معلومات">تقنية معلومات</option>
                                                        <option value="هندسة برمجيات">هندسة برمجيات</option>
                                                        <option value="شبكات">شبكات</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- الفصل -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="semester">الفصل</label>
                                                    <select class="form-control" id="semester" name="semester" required>
                                                        <option value="" disabled selected>اختر الفصل</option>
                                                        <option value="الأول">الأول</option>
                                                        <option value="الثاني">الثاني</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-footer d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                        <a href="index.html" class="btn btn-secondary">إلغاء</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>