<aside class="side-menu">
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <img src="{{ aurl('images/logo.png') }}">
    </a>
    <ul>
        <li class="{{ request()->is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-tachometer-alt"></i>
                Dashboard
            </a>
        </li>
        <li class="{{ request()->is('admin/services') || request()->is('admin/services/*') ? 'active' : '' }}">
            <a href="{{ route('admin.services.index') }}">
                <i class="fa fa-list"></i>
                Services
            </a>
        </li>
        <li class="{{ request()->is('admin/solutions') || request()->is('admin/solutions/*') ? 'active' : '' }}">
            <a href="{{ route('admin.solutions.index') }}">
                <i class="fa fa-info"></i>
                Solutions
            </a>
        </li>
        <li class="{{ request()->is('admin/clients') || request()->is('admin/clients/*') ? 'active' : '' }}">
            <a href="{{ route('admin.clients.index') }}">
                <i class="fa fa-image"></i>
                Business partners
            </a>
        </li>
    </ul><!--End Ul-->
</aside>
