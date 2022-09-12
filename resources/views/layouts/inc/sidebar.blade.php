<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Team A<sup><i class="fa-solid fa-heart"></i></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
        <a class="nav-link " href="{{ route('users') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>

    </li>
    <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Category</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Category:</h6>
                <a class="collapse-item" href="{{ route('categories') }}">All Category</a>
                <a class="collapse-item" href="{{ route('add-category') }}">Add Category</a>

            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::is('hotels') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseht"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Hotels</span>
        </a>
        <div id="collapseht" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Hotel:</h6>
                <a class="collapse-item" href="{{ route('hotels') }}">All Hotel</a>
                <a class="collapse-item" href="{{ route('add-hotel') }}">Add Hotel</a>

            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::is('cars') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecar"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cars</span>
        </a>
        <div id="collapsecar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Car:</h6>
                <a class="collapse-item" href="{{ route('cars') }}">All Car</a>
                <a class="collapse-item" href="{{ route('add-car') }}">Add Car</a>

            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::is('tours') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
            aria-expanded="true" aria-controls="collapse3">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tours</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Tours:</h6>
                <a class="collapse-item" href="{{ route('tours') }}">All Tour</a>
                <a class="collapse-item" href="{{ route('add-tour') }}">Add Tour</a>

            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
