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
                            <h3 class="card-title">تخصيص الدكاترة للمواد</h3>
                        </div>

                        <form method="POST" action="assign_doctor.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="subject">اختر المادة</label>
                                    <select class="form-control" id="subject" name="subject">
                                        <option value="">-- اختر المادة --</option>
                                        <option value="رياضيات">رياضة1 ITGS111</option>
                                        <option value="فيزياء">فيزياء</option>
                                        <option value="برمجة">برمجة</option>
                                        <!-- أضف مواد أكثر حسب الحاجة -->
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="doctor">اختر الدكتور</label>
                                    <select class="form-control" id="doctor" name="doctor">
                                        <option value="">-- اختر الدكتور --</option>
                                        <option value="د. أحمد علي">د. أحمد علي</option>
                                        <option value="د. سعاد يوسف">د. سعاد يوسف</option>
                                        <option value="د. محمد عمر">د. محمد عمر</option>
                                        <!-- أضف دكاترة أكثر حسب الحاجة -->
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">حفظ التخصيص</button>
                            </div>
                        </form>
                        <!-- جدول التخصيصات الحالية -->

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