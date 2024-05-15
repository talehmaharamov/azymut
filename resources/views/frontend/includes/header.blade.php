<div class="whats-float">
    <a href="https://wa.me/{{ settings('phone') }}"
       target="_blank">
        <i class="fab fa-whatsapp"></i>
        <span>
            @lang('Whatsapp')<br>
            <small>{{ settings('phone') }}</small>
        </span>
    </a>
</div>
<div class="whats-float1">
    <a href="{{ settings('instagram') }}"
       target="_blank">
        <i class="fab fa-instagram"></i>
        <span>@lang('Instagram')<br>
            <small>{{ str_replace('https://www.instagram.com/','@',settings('instagram')) }}</small>
        </span>
    </a>
</div>
{{--<div class="whats-float2">--}}
{{--    <a href="tel:{{ settings('phone') }}">--}}
{{--        <i class="fas fa-phone"></i>--}}
{{--        <span>@lang('backend.phone')<br>--}}
{{--            <small>{{ settings('phone') }}</small>--}}
{{--        </span>--}}
{{--    </a>--}}
{{--</div>--}}

<header class="header  js-header">
    <div class="header__bar  js-header-bar">
        <div class="row justify-content-between align-items-center sslldd">
            <div class="col-auto z-5 js-header-item">
                <div class="header__item -margin-sm">
                    <div class="header__logo text-white js-header-logo">
                        <a data-barba href="{{ route('frontend.index') }}">
                            <img style="width: 120px;height: 50px;" src="{{ asset('frontend/logos/Azymut loqo5.png')}}"
                                 alt="Azymut">
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu js-menu ">
                <div class="mobile__background js-mobile-bg"></div>

                <div class="menu__container">
                    <div class="mobile__back js-nav-list-back pointer-events-none">
                        <a data-barba href="{{ route('frontend.index') }}">
                            @lang('backend.home-page')
                        </a>
                    </div>

                    <ul class="nav js-navList">
                        <li class="text-white">
                            <a data-barba href="{{ route('frontend.index') }}">
                                @lang('backend.home-page')
                            </a>
                        </li>
                        <li class="text-white">
                            <a data-barba href="{{ route('frontend.about') }}">
                                @lang('backend.about')
                            </a>
                        </li>
                        @foreach($mainCategories as $mCat)
                            <li class="text-white -has-mega-menu menu-item-has-children">
                                <a data-barba href="#">
                                    {{ $mCat->translate(app()->getLocale())->name ?? '' }}
                                </a>
                                <div class="mega">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="mega__menu">
                                                    @foreach($mCat->subcategories as $mSubCat)
                                                        <li class="mega__column">
                                                            <div class="mega__item">
                                                                <a class="mega__title"
                                                                   href="{{ route('frontend.selectedCategory',$mSubCat->slug) }}">
                                                                    {{ $mSubCat->translate(app()->getLocale())->name ?? '' }}
                                                                </a>
                                                                @if($mSubCat->subcategories()->exists())
                                                                    <ul class="mega__list">
                                                                        @foreach($mSubCat->subcategories as $mAltSubCat)
                                                                            <li>
                                                                                <a data-barba
                                                                                   href="{{ route('frontend.selectedCategory',$mAltSubCat->slug) }}">
                                                                                    {{ $mAltSubCat->translate(app()->getLocale())->name ?? '' }}
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav__submenu md:d-block d-none">
                                    @foreach($mCat->subcategories as $subSub)
                                        <li class="nav__submenu_item menu-item-has-children">
                                            <a data-barba href="{{ route('frontend.selectedCategory',$subSub->slug) }}">
                                                {{ $subSub->translate(app()->getLocale())->name ?? '' }}
                                            </a>
                                            @if($subSub->subcategories()->exists())
                                                <ul class="nav__submenu md:d-block d-none">
                                                    @foreach($subSub->subcategories as $subAlt)
                                                        <li class="nav__submenu_item">
                                                            <a data-barba
                                                               href="{{ route('frontend.selectedCategory',$subAlt->slug) }}">
                                                                {{ $subAlt->translate(app()->getLocale())->name ?? '' }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach

                        <li class="text-white">
                            <a data-barba href="{{ route('frontend.contact-us-page') }}">
                                @lang('backend.contact-us')
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mobile__footer js-mobile-footer">
                    <div class="mobile__socials">
                        <a data-barba href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a data-barba href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a data-barba href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a data-barba href="#">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-auto z-5 sm:pos-unset js-header-item">
                <div class="header__icons ">
                    <div class="header__cart">
                        <a data-barba href="#">
                            <i class="fas fa-globe-europe"></i>
                        </a>
                        <div class="headerCart js-headerCart">
                            <div class="headerCart__content">
                                @foreach(active_langs() as $lang)
                                    <div class="headerCart__item autoChange"
                                         data-lan="{{ route('frontend.frontLanguage',$lang->code) }}">
                                        <div class="headerCart__img">
                                            <img style="height: 24px !important;width: 36px !important;"
                                                 src="{{ asset($lang->icon) }}" alt="image">
                                        </div>
                                        <div class="headerCart__wrap">
                                            <h5 class="headerCart__title">
                                                {{ $lang->name }}
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <div class="header__search">
                        <button class="js-headerSearch-open">
                            <i class="icon text-white icon-search"></i>
                        </button>
                    </div>

                    <div class="header__menu">
                        <button type="button" class="nav-button-open md:d-none js-sidebar-open">
                            <i class="icon text-white icon-menu"></i>
                        </button>

                        <button type="button" class="nav-button-open d-none md:d-block js-nav-open">
                            <i class="icon text-white icon-menu"></i>
                        </button>

                        <button type="button"
                                class="nav-button-close d-none md:d-block pointer-events-none js-nav-close">
                            <i class="icon text-white icon-cross"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="headerSearch js-headerSearch">
            <div class="headerSearch__line"></div>
            <form action="{{ route('frontend.search') }}" method="GET">
                <i class="headerSearch__icon icon-search"></i>
                <input type="search" name="s" placeholder="@lang('backend.search')">
            </form>
            <button class="headerSearch__close js-headerSearch-close">
                <i class="icon icon-cross text-white"></i>
            </button>
        </div>
    </div>
</header>
