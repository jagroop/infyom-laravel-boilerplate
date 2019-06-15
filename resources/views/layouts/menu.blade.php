<li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('home') !!}"><i class="nav-icon icon-home"></i><span>Dashboard</span></a>
</li>
<li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('roles.index') !!}"><i class="nav-icon icon-shield"></i><span>Roles</span></a>
</li>
<li class="nav-item {{ Request::is('permissions*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('permissions.index') !!}"><i class="nav-icon icon-ban"></i><span>Permissions</span></a>
</li>

<!-- -->

<li class="nav-item {{ Request::is('pages*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('pages.index') !!}"><i class="nav-icon fa fa-file-o"></i><span>Pages</span></a>
</li>
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}"><i class="nav-icon fa fa-users"></i><span>Users</span></a>
</li>
<li class="nav-item {{ Request::is('settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('settings.index') !!}"><i class="nav-icon icon-cursor"></i><span>Settings</span></a>
</li>
