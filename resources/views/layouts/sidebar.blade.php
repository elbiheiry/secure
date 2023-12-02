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
        <li
            class="{{ request()->is('admin/careers') || request()->is('admin/careers/*') || request()->is('admin/*/candidates') ? 'active' : '' }}">
            <a href="{{ route('admin.careers.index') }}">
                <i class="fa fa-user"></i>
                Careers
            </a>
        </li>
        <li class="{{ request()->is('admin/articles') || request()->is('admin/articles/*') ? 'active' : '' }}">
            <a href="{{ route('admin.articles.index') }}">
                <i class="fa fa-newspaper"></i>
                Blog
            </a>
        </li>
        <li class="{{ request()->is('admin/branches') || request()->is('admin/branches/*') ? 'active' : '' }}">
            <a href="{{ route('admin.branches.index') }}">
                <i class="fa fa-map-marker"></i>
                Branches
            </a>
        </li>
        <li class="{{ request()->is('admin/social-links') || request()->is('admin/social-links/*') ? 'active' : '' }}">
            <a href="{{ route('admin.links.index') }}">
                <i class="fa fa-share-alt"></i>
                Social links
            </a>
        </li>
        <li class="{{ request()->is('admin/messages') || request()->is('admin/messages/*') ? 'active' : '' }}">
            <a href="{{ route('admin.messages.index') }}">
                <i class="fa fa-envelope"></i>
                Messages
            </a>
        </li>
    </ul><!--End Ul-->
</aside>
