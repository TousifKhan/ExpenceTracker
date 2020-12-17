
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
    
    <li class="nav-item has-treeview menu-open">
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
        </a>
        </li>
        
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

    
            
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
