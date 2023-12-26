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
        <!--<li class="sub-menu">-->
        <!--    <a rel="noreferrer" href="javascript:void(0);">-->
        <!--        <i class="fa fa-home"></i>-->
        <!--        Home page-->
        <!--        <i class="fa fa-angle-down"></i>-->
        <!--    </a>-->
        <!--    <ul style="display : {{ request()->is('admin/home') || request()->is('admin/home/*') ? 'block' : '' }}">-->
        <!--        <li class="{{ request()->is('admin/home') || request()->is('admin/home/*') ? 'active' : '' }}">-->
        <!--            <a href="{{ route('admin.slides.index') }}">-->
        <!--                - Slideshow-->
        <!--            </a>-->
        <!--        </li>-->
        <!--    </ul>-->
        <!--</li>-->
        <li class="sub-menu">
            <a rel="noreferrer" href="javascript:void(0);">
                <i class="fa fa-info"></i>
                About us
                <i class="fa fa-angle-down"></i>
            </a>
            <ul
                style="display : {{ request()->is('admin/about-us') || request()->is('admin/about-us/*') ? 'block' : '' }}">
                <li class="{{ request()->is('admin/about-us') || request()->is('admin/about-us/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.about.index') }}">
                        - Static data
                    </a>
                </li>
                <li class="{{ request()->is('admin/about-us') || request()->is('admin/about-us/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.work.index') }}">
                        - Why work with us
                    </a>
                </li>
            </ul>
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
        <li class="{{ request()->is('admin/forums') || request()->is('admin/forums/*') ? 'active' : '' }}">
            <a href="{{ route('admin.forums.index') }}">
                <i class="fa fa-newspaper"></i>
                Forums
            </a>
        </li>
        <li class="{{ request()->is('admin/members') || request()->is('admin/members/*') ? 'active' : '' }}">
            <a href="{{ route('admin.members.index') }}">
                <i class="fa fa-users"></i>
                Members
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
        <li class="{{ request()->is('admin/subscribers') ? 'active' : '' }}">
            <a href="{{ route('admin.subscribers.index') }}">
                <i class="fa fa-users"></i>
                Subscribers
            </a>
        </li>
    </ul><!--End Ul-->
</aside>
