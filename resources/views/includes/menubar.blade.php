<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/home') }}" class="brand-link">
        <img src="{{ url('storage/images/topcitlogo.png') }}" alt="TOPCIT Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">TOPCIT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <br>
        <!-- SidebarSearch Form -->
        <!--
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
    -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Dashboard -->

                <li class="nav-item">
                    <a href="{{ url('/admin/home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!-- Dashboard -->

                <!-- Administrators -->
                @if (session('role') != 1)
                    
                    <li class="nav-item">
                        <a href="{{ url('/admin/administrators') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                            <p>
                                Administrators
                            </p>
                        </a>
                    </li>
                    
                @endif

                <!-- Administrators -->

                <!-- Professors -->

                <li class="nav-item">
                    <a href="{{ url('admin/professors') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Professors
                        </p>
                    </a>
                </li>

                <!-- Professors -->

                <!-- Students -->

                <li class="nav-item">
                    <a href="{{ url('/admin/students') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Students
                        </p>
                    </a>
                </li>

                <!-- Students -->

                <!-- Accounts -->

                {{-- <li class="nav-item">
                    <a href="{{ url('/admin/accounts') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Accounts
                        </p>
                    </a>
                </li> --}}

                <!-- Accounts -->


                <!-- Examinations -->

                <li class="nav-item">
                    <a href="{{ url('/admin/examinations') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Examinations
                        </p>
                    </a>
                </li>

                <!-- Examinations -->



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
