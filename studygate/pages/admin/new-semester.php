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

                    <!-- كارت فتح فصل -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">فتح فصل دراسي جديد</h3>
                        </div>

                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="semester_name">اسم الفصل</label>
                                    <select class="form-control" id="semester_name" required>
                                        <option value="">-- اختر الفصل --</option>
                                        <option>ربيع</option>
                                        <option>خريف</option>
                                        <option>صيف</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="year">السنة الدراسية</label>
                                    <input type="number" class="form-control" id="year" placeholder="مثال: 2025" min="2000" max="2100" required>
                                </div>

                                <div class="form-group">
                                    <label for="start_date">تاريخ البداية</label>
                                    <input type="date" class="form-control" id="start_date" required>
                                </div>

                                <div class="form-group">
                                    <label for="end_date">تاريخ النهاية</label>
                                    <input type="date" class="form-control" id="end_date" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">فتح الفصل</button>
                                <button type="reset" class="btn btn-secondary">إلغاء</button>
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