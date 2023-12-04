<div id="section-footer">
    <div class="container">
        <div class="main-footer pb-5">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="main-footer-1">
                        <img src="{{ surl('images/header-logo.png') }}" alt="" class="brand-logo" width="100">
                        <p class="mt-4 pr-4">Secure Networks are one of the fastest growing security firms
                            with customers spanning the globe.</p>
                        <div class="ft-socialmedia">
                            <div class="social-links socials-header">
                                @foreach ($links as $link)
                                    <a href="{{ $link->link }}"><i class="{{ $link->icon }} fa-lg"></i></a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <h4 class="footer-title">Useful links</h4>
                    <ul class="footer-list">
                        <li>
                            <a href="index.php">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a>
                        </li>
                        <li>
                            <a href="About-Us.php">{{ locale() == 'en' ? 'About us' : 'من نحن' }}</a>
                        </li>
                        <li>
                            <a href="Services.php">{{ locale() == 'en' ? 'Services' : 'الخدمات' }}</a>
                        </li>
                        <li>
                            <a href="Solutions.php">{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</a>
                        </li>
                        <li>
                            <a href="Clients.php">{{ locale() == 'en' ? 'Business partners' : 'شركاء الأعمال' }}</a>
                        </li>
                        <li>
                            <a href="Careers.php">{{ locale() == 'en' ? 'Careers' : 'الوظائف' }}</a>
                        </li>
                        <li>
                            <a href="Blogs.php">{{ locale() == 'en' ? 'Blog' : 'المدونة' }}</a>
                        </li>
                        <li>
                            <a href="Forum.php">{{ locale() == 'en' ? 'Forum' : 'المنتدري' }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <h4 class="footer-title">{{ locale() == 'en' ? 'Services' : 'الخدمات' }}</h4>
                    <ul class="footer-list">
                        @foreach ($allServices as $service)
                            <li>
                                <a
                                    href="GOVERNANCE , RISK AND COMPLIANCE MANAGEMENT.php">{{ $service->translate(locale())->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <h4 class="footer-title">{{ locale() == 'en' ? 'Solutions' : 'حلولنا' }}</h4>
                    <ul class="footer-list">
                        @foreach ($allSolutions as $solution)
                            <li>
                                <a href="GOVERNANCE , RISK AND COMPLIANCE MANAGEMENT.php">{{ $solution->translate(locale())->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer2 row border-top">
            <div class="ft-copyright col-12">
                <p>Copyright © 2023 <a href="{{ route('site.index') }}">Secure Networks.</a> All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
