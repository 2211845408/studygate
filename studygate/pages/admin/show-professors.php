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
                            <h3 class="card-title">بيانات الدكاترة</h3>
                            <a href="add-doctor.html" class="btn btn-sm float-right" style="background-color: #7ecf68; color: white; font-weight: bold; border: none;">
                                <i class="fas fa-plus"></i>
                                إضافة دكتور جديد
                            </a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الدكتور</th>
                                        <th>الرقم التعريفي</th>
                                        <th>التخصص</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>رقم الهاتف</th>
                                        <th>عنوان السكن</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>د. محمد أحمد</td>
                                        <td>10001</td>
                                        <td>هندسة برمجيات</td>
                                        <td>mohamed@example.com</td>
                                        <td>0911234567</td>
                                        <td>طرابلس - شارع الفاتح</td>
                                        <td style="white-space: nowrap">
                                            <a href="edit-doctor.html" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>د. فاطمة علي</td>
                                        <td>10002</td>
                                        <td>علوم حاسوب</td>
                                        <td>fatima@example.com</td>
                                        <td>0922345678</td>
                                        <td>بنغازي - شارع الحدائق</td>
                                        <td style="white-space: nowrap">
                                            <a href="edit-doctor.html" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>د. خالد محمود</td>
                                        <td>10003</td>
                                        <td>نظم معلومات</td>
                                        <td>khaled@example.com</td>
                                        <td>0933456789</td>
                                        <td>مصراتة - شارع طرابلس</td>
                                        <td style="white-space: nowrap">
                                            <a href="edit-doctor.html" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>د. زينب عمر</td>
                                        <td>10004</td>
                                        <td>ذكاء اصطناعي</td>
                                        <td>zainab@example.com</td>
                                        <td>0944567890</td>
                                        <td>سبها - شارع الجامعة</td>
                                        <td style="white-space: nowrap">
                                            <a href="edit-doctor.html" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>د. أحمد سالم</td>
                                        <td>10005</td>
                                        <td>شبكات حاسوب</td>
                                        <td>ahmed@example.com</td>
                                        <td>0955678901</td>
                                        <td>الزاوية - شارع المدينة</td>
                                        <td style="white-space: nowrap">
                                            <a href="edit-doctor.html" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> تعديل</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> حذف</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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