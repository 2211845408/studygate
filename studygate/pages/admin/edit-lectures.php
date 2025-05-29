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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">تعديل بيانات المحاضرة</h3>
                        </div>
                        <form action="update_lecture.php" method="POST">
                            <!-- حقل مخفي لإرسال معرف المحاضرة -->
                            <input type="hidden" name="lecture_id" value="1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اسم المادة</label>
                                            <select class="form-control" name="subject_name" required>
                                                <option value="">-- اختر المادة --</option>
                                                <option value="برمجة 1" selected>برمجة 1</option>
                                                <option value="برمجة كائنية">برمجة كائنية</option>
                                                <option value="قواعد بيانات">قواعد بيانات</option>
                                                <option value="شبكات">شبكات</option>
                                                <option value="نظم تشغيل">نظم تشغيل</option>
                                                <option value="ذكاء اصطناعي">ذكاء اصطناعي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اسم المحاضر</label>
                                            <select class="form-control" name="instructor_name" required>
                                                <option value="">-- اختر المحاضر --</option>
                                                <option value="د. أحمد الزليطني">د. أحمد الزليطني</option>
                                                <option value="م. محمد حمودة" selected>م. محمد حمودة</option>
                                                <option value="أ. فاطمة التومي">أ. فاطمة التومي</option>
                                                <option value="د. سلوى المقري">د. سلوى المقري</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اليوم</label>
                                            <select class="form-control" name="lecture_day" required>
                                                <option value="">-- اختر اليوم --</option>
                                                <option value="السبت">السبت</option>
                                                <option value="الأحد" selected>الأحد</option>
                                                <option value="الإثنين">الإثنين</option>
                                                <option value="الثلاثاء">الثلاثاء</option>
                                                <option value="الأربعاء">الأربعاء</option>
                                                <option value="الخميس">الخميس</option>
                                            </select>
                                        </div>
                                    </div>
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
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اسم القاعة</label>
                                            <input type="text" class="form-control" name="hall_name" value="قاعة 5"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning text-white"><i class="fas fa-save"></i> حفظ
                                    التعديلات</button>
                                <a href="lectures.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                                    رجوع</a>
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