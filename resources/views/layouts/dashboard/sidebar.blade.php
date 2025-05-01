<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}<sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminsManagement"
                aria-expanded="true" aria-controls="adminsManagement">
                <i class="fas fa-fw fa-user-plus"></i>
                <span>Admins</span>
            </a>
            <div id="adminsManagement" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admins Management:</h6>
                    <a class="collapse-item" href="">Admins</a>
                    <a class="collapse-item" href="">Create Admin</a>
                </div>
            </div>
        </li>


    

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-users"></i>
                <span>Users</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Users Management:</h6>
                    <a class="collapse-item" href="">Users Table</a>
                    <a class="collapse-item" href="">Create User</a>
                </div>
            </div>
        </li>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#posts" aria-expanded="true"
                aria-controls="posts">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Posts</span>
            </a>
            <div id="posts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Posts Management:</h6>
                    <a class="collapse-item" href="">Posts Table</a>
                    <a class="collapse-item" href="">Create Post</a>
                </div>
            </div>
        </li>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">




    <!-- Nav Item - Tables -->

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-folder"></i>
                <span>Categories</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-unlock"></i>
                <span>Roles</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-phone"></i>
                <span>Contacts</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-bell"></i>
                <span>Notifications</span></a>
        </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
