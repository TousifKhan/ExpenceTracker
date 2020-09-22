<!-- Brand Logo -->
<a href="{{ url('/') }}" class="brand-link">
    <img src="{{ url('/') }}/img/AdminLTELogo.png" alt="{{ config('app.name', 'Expence Tracker') }}"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">
    {{ config('app.name', 'Expence Tracker') }}
    </span>
</a>

<!-- Sidebar -->
<div class="sidebar">

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            User Dashboard
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="../../index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="../../index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
            </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="../widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Widgets
            <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li>
    
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
            Charts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ url('/admin/units') }}" class="nav-link">
                <i class="fas fa-building nav-icon"></i>
                <p>Units</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ url('/admin/users') }}" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Users</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="../charts/inline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inline</p>
            </a>
            </li>
        </ul>
    </li>
            
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
