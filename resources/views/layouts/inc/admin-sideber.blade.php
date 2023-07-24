<div id="layoutSidenav_nav">

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-toggle>
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Category
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ url('admin/add-category') }}">Add Category</a>
                    <a class="nav-link" href="{{url('admin/category') }}">View Category</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded=>
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Pages
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></div>
        </a>
        <div class="collapse" id="collapse-Post" aria-labelledby="headingTwo" data-bs-toggle>
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordi">
                <a class="nav-link collapse" href="#" data-bs-toggle="collapsed">
                Authentication
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingTwo" data-bs-toggle>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="login.html">Login</a>
                    <a class="nav-link" href="register.html">Register</a>
                </nav>
            </div>
            </nav>
        </div>
        </div>
    </div>

</nav>
</div>