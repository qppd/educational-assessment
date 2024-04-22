<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/portal/dashboard') }}" class="brand-link">
        <img src="{{ url('storage/images/topcitlogo.png') }}" alt="TOPCIT Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
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
                    <a href="{{ url('/portal/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <!-- Dashboard -->

                <!-- Examinations -->
                
                {{-- <li class="nav-item">
                    <a href="{{ url('/portal/examinations') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Examinations
                        </p>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        Examinations
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{ url('/portal/examinations/available') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                            <p>Available Examinations</p>
                          </a>
                        </li>
                      </ul>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('/portal/examinations/taken') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Taken Examinations</p>
                        </a>
                      </li>
                    </ul>

                  </li>
                
                <!-- Examinations -->
 

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
