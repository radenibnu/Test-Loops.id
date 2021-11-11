 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon">
            <h5>Test</h5>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    
    <!-- Nav Item - List Pembayaran SPP-->
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('post.index') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>Soal No. 1</span></a>
   </li>

   <li class="nav-item active">
       <a class="nav-link" href="{{ route('post.kedua') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>Soal No. 2</span></a>
   </li>

   <li class="nav-item active">
       <a class="nav-link" href="{{ route('post.ketiga') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>Soal No. 3</span></a>
   </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
