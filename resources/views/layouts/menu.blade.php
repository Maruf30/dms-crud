<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-search-results">
        <div class="list-group"><a href="#" class="list-group-item">
                <div class="search-title"><strong class="text-light"></strong>N<strong
                        class="text-light"></strong>o<strong class="text-light"></strong> <strong
                        class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                        class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                        class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                        class="text-light"></strong>t<strong class="text-light"></strong> <strong
                        class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                        class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                        class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                        class="text-light"></strong></div>
                <div class="search-path"></div>
            </a></div>
    </div>
</div>
<!-- need to remove -->

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v3</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('mrp.get') }}" class="nav-link">
                <i class="nav-icon fas fa-dollar-sign"></i>
                <p>Product Price</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-parachute-box"></i>
                <p>Supplier</p>
            </a>
        </li>



    </ul>
</nav>
