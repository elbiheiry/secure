<div id="section-navbar2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="header-logo mr-auto">
                <a href="{{ route('site.index') }}" class="header-dark"><img src="{{ surl('images/header-logo.png') }}"
                        alt="Secure Networks" style="max-width: 150px;"></a>
                <a href="{{ route('site.index') }}" class="header-light"><img
                        src="{{ surl('images/header-logo-light.png') }}" alt="Secure Networks"
                        style="max-width: 150px;"></a>
            </div>
            <button type="button" id="sidebarCollapse2" class="navbar-btn active" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse v2 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('site.about') }}">{{ locale() == 'en' ? 'About us' : 'من نحن' }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('site.services') }}" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ locale() == 'en' ? 'Services' : 'الخدمات' }}
                        </a>
                        <div class="dropdown-menu">
                            <ul class="wrap-dropdown">
                                @foreach ($allServices as $service)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('site.service', ['service' => $service->slug]) }}">{{ $service->translate(locale())->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('site.solutions') }}" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}
                        </a>
                        <div class="dropdown-menu">
                            <ul class="wrap-dropdown">
                                @foreach ($allSolutions as $solution)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('site.solution', ['solution' => $solution->slug]) }}">{{ $solution->translate(locale())->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('site.partners') }}">{{ locale() == 'en' ? 'Business partners' : 'شركاء الأعمال' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('site.careers.index') }}">{{ locale() == 'en' ? 'Careers' : 'الوظائف' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا`' }}</a>
                    </li>
                    @if (member()->guest())
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('site.login') }}">{{ locale() == 'en' ? 'Login' : 'تسجيل الدخول' }}</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-worldwide"></i>
                        </a>
                        <div class="dropdown-menu">
                            <ul class="wrap-dropdown">
                                <li><a class="dropdown-item"
                                        href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
