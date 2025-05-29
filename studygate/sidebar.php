<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/studygate/index.html" class="brand-link">
        <img src="/studygate/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">StudeGate</span>
    </a>
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/studygate/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    عبدالرحمن الاسطي
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/studygate/index1.p" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            لوحة التحكم
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            الهيكل التنظيمي
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/studygate/pages/admin/new-semester.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    الفصول الدراسية
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            ادارة الطلبة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/studygate/pages/admin/show-students.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    الطلاب
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            ادارة هيئة التدريس
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/studygate/pages/admin/show-professors.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    المعلمون
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/studygate/pages/admin/customize-professors.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    تخصيص المعلمون
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            ادارة المواد الدراسية
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/studygate/pages/admin/show-subject.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    المواد الدراسية
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            ادارة الجداول الدراسية
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    الجداول الدراسية
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="/studygate/pages/admin/show-schedules-lecture.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            عرض الجداول
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/studygate/pages/admin/add-lectures.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            اضافة محاضرات
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    جداول الامتحانات
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="/studygate/pages/admin/show-schedules-exams.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            عرض الجداول
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/studygate/pages/admin/add-exam.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            اضافة امتحان
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </li>





            </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>