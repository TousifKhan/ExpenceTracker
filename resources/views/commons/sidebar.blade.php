
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
        Dashboard
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
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{ url('/admin/units') }}" class="nav-link {{ Request::is('admin/units') ? 'active' : '' }}">
            <i class="fas fa-building nav-icon"></i>
            <p>Units</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ url('/admin/users') }}" class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}">
            <i class="fas fa-users nav-icon"></i>
            <p>Users</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ url('/admin/contacts') }}" class="nav-link {{ Request::is('admin/contacts') ? 'active' : '' }}">
            <i class="far fa-address-card nav-icon"></i>
            <p>Contacts</p>
        </a>
        </li>
    </ul>
    </li>

    <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tree"></i>
        <p>
        UI Elements
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="../UI/general.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>General</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../UI/icons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Icons</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../UI/buttons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Buttons</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../UI/sliders.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Sliders</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../UI/modals.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Modals & Alerts</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../UI/navbar.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Navbar & Tabs</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../UI/timeline.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Timeline</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../UI/ribbons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Ribbons</p>
        </a>
        </li>
    </ul>
    </li>
    <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
        Forms
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="../forms/general.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>General Elements</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../forms/advanced.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Advanced Elements</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../forms/editors.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Editors</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../forms/validation.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Validation</p>
        </a>
        </li>
    </ul>
    </li>
    <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
        Tables
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="../tables/simple.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Simple Tables</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../tables/data.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>DataTables</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../tables/jsgrid.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>jsGrid</p>
        </a>
        </li>
    </ul>
    </li>
            
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
