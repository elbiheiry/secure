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
    </ul><!--End Ul-->
</aside>
