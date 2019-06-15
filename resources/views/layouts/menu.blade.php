

<li class="nav-item {{ Request::is('pages*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('pages.index') !!}"><i class="nav-icon icon-cursor"></i><span>Pages</span></a>
</li>
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}"><i class="nav-icon icon-cursor"></i><span>Users</span></a>
</li>
