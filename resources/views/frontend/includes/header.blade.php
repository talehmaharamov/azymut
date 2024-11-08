{{--<div class="whats-float">--}}
{{--    <a href="https://wa.me/{{ settings('phone') }}"--}}
{{--       target="_blank">--}}
{{--        <i class="fab fa-whatsapp"></i>--}}
{{--        <span>--}}
{{--            @lang('Whatsapp')<br>--}}
{{--            <small>{{ settings('phone') }}</small>--}}
{{--        </span>--}}
{{--    </a>--}}
{{--</div>--}}
{{--<div class="whats-float1">--}}
{{--    <a href="{{ settings('instagram') }}"--}}
{{--       target="_blank">--}}
{{--        <i class="fab fa-instagram"></i>--}}
{{--        <span>@lang('Instagram')<br>--}}
{{--            <small>{{ str_replace('https://www.instagram.com/','@',settings('instagram')) }}</small>--}}
{{--        </span>--}}
{{--    </a>--}}
{{--</div>--}}
{{--<div class="whats-float2">--}}
{{--    <a href="tel:{{ settings('phone') }}">--}}
{{--        <i class="fas fa-phone"></i>--}}
{{--        <span>@lang('backend.phone')<br>--}}
{{--            <small>{{ settings('phone') }}</small>--}}
{{--        </span>--}}
{{--    </a>--}}
{{--</div>--}}
<a href="https://wa.me/{{ settings('phone') }}" class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
</a>

<!-- General header -->
<!-- General header -->
<header class="heder-two header--sticky">
    <div class="header-two-container">
        <div class="row">
            <div class="col-12">
                <div class="header-main-wrapper">
                    <div class="logo-area">
                        <a href="{{ route('frontend.index') }}" class="logo">
                            <img src="{{ asset('frontend/logos/Azymut loqo7.png') }}" style="width: 187px;height: 52px;"
                                 alt="image-logo">
                        </a>
                    </div>

                    <div class="rts-header-right">
                        <div class="menu-area" id="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                 fill="none">
                                <rect width="18" height="2" fill="#0C0A0A"/>
                                <rect y="7" width="18" height="2" fill="#0C0A0A"/>
                                <rect y="14" width="18" height="2" fill="#0C0A0A"/>
                            </svg>
                        </div>
                        <div class="bottom">
                            <div class="main-nav-desk nav-area">
                                <nav>
                                    <ul>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('frontend.index') }}">
                                                @lang('backend.home-page')
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('frontend.about') }}">
                                                @lang('backend.about')
                                            </a>
                                        </li>
                                        @foreach($mainCategories as $mCat)
                                            <li class="has-droupdown pages">
                                                <a class="nav-link" href="#">
                                                    {{ $mCat->translate(app()->getLocale())->name ?? '' }}
                                                </a>
                                                @if($mCat->subcategories->isNotEmpty())
                                                    <ul class="submenu inner-page">
                                                        @foreach($mCat->subcategories as $mSubCat)
                                                            @if(!$mSubCat->subcategories->isNotEmpty())
                                                                <li>
                                                                    <a href="{{ route('frontend.selectedCategory',$mSubCat->slug) }}">
                                                                        {{ $mSubCat->translate(app()->getLocale())->name ?? '' }}
                                                                    </a>
                                                                </li>
                                                            @else
                                                                <li class="sub-dropdown">
                                                                    <a href="#" class="sub-menu-link">
                                                                        {{ $mSubCat->translate(app()->getLocale())->name ?? '' }}
                                                                    </a>
                                                                    @if($mSubCat->subcategories->isNotEmpty())
                                                                        <ul class="submenu third-lvl base">
                                                                            @foreach($mSubCat->subcategories as $mAltCat)
                                                                                <li>
                                                                                    <a class="mobile-menu-link"
                                                                                       href="{{ route('frontend.selectedCategory',$mAltCat->slug) }}">
                                                                                        {{ $mAltCat->translate(app()->getLocale())->name ?? '' }}
                                                                                    </a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endif
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </li>

                                        @endforeach
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('frontend.blog') }}">
                                                @lang('backend.blogs')
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="{{ route('frontend.contact-us-page') }}">
                                                @lang('backend.cntct')
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="right-area">
                                <div class="icon-area">
                                    <div class="search" id="search">
                                        <i class="fa-regular fa-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<div id="side-bar" class="side-bar">
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <button id="close-sidebar-button" class="close-icon-menu">
                <i class="far fa-times"></i>
            </button>
            <ul class="mainmenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('frontend.index') }}" class="main">
                        @lang('backend.home-page')
                    </a>
                </li>
                <li>
                    <a href="{{ route('frontend.about') }}" class="main">
                        @lang('backend.about')
                    </a>
                </li>

                @foreach($mainCategories as $mCat)
                    <li class="has-dropdown">
                        <a href="#" class="main">{{ $mCat->translate(app()->getLocale())->name ?? '' }}</a>
                        @if($mCat->subcategories->isNotEmpty())
                            <ul class="submenu">
                                @foreach($mCat->subcategories as $mSubCat)
                                    @if(!$mSubCat->subcategories->isNotEmpty())
                                        <li>
                                            <a class="mobile-menu-link"
                                               href="{{ route('frontend.selectedCategory',$mSubCat->slug) }}">
                                                {{ $mSubCat->translate(app()->getLocale())->name ?? '' }}
                                            </a>
                                        </li>
                                    @else
                                        <li class="has-dropdown third-level">
                                            <a class="main" href="#">
                                                {{ $mSubCat->translate(app()->getLocale())->name ?? '' }}
                                            </a>
                                            @if($mSubCat->subcategories->isNotEmpty())
                                                <ul class="submenu-third-level">
                                                    @foreach($mSubCat->subcategories as $mAltCat)
                                                        <li>
                                                            <a class="mobile-menu-link"
                                                               href="{{ route('frontend.selectedCategory',$mAltCat->slug) }}">
                                                                {{ $mAltCat->translate(app()->getLocale())->name ?? '' }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                <li>
                    <a href="{{ route('frontend.blog') }}" class="main">
                        @lang('backend.blogs')
                    </a>
                </li>
                <li>
                    <a href="{{ route('frontend.contact-us-page') }}" class="main">
                        @lang('backend.cntct')
                    </a>
                </li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="{{ settings('facebook') }}">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ settings('instagram') }}">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/{{ settings('phone') }}">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<form method="get" action="{{ route('frontend.search') }}">
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" name="s" class="search-input" type="text" placeholder="@lang('backend.search')">
                    <button>
                        <i class="far fa-search" style="color: white !important;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon">
            <i class="far fa-times"></i>
        </div>
    </div>
</form>

