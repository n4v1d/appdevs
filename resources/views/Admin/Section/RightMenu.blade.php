<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="">
                        <a href="/admin" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                خانه
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-newspaper-o"></i>
                            <p>
                                دوره ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/course" class="nav-link">
                                    <i class="fa fa-newspaper-o"></i>
                                    <p>لیست دوره ها</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="/admin/category" class="nav-link">
                                    <i class="fa fa-list"></i>
                                    <p>دسته بندی ها</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="/admin/comment" class="nav-link">
                                    <i class="fa fa-comment"></i>
                                    <p>نظرات</p>

                                </a>
                            </li>

                            </li>
                        </ul>



                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/user" class="nav-link">
                                    <i class="fa fa-user-circle"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="/admin/category" class="nav-link">
                                    <i class="fa fa-user-plus"></i>
                                    <p>کاربر ویژه</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                سفارشات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/order" class="nav-link">
                                    <i class="fa fa-user-circle"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
