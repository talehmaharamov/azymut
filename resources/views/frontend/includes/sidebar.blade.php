<aside class="sidebar js-sidebar">
    <div class="sidebar__cross">
        <button class="button js-sidebar-close">
            <i class="icon icon-cross"></i>
        </button>
    </div>

    <div class="sidebar__header">
        <div class="sidebar__logo">
            <img src="{{ asset('frontend/logos/Azymut 13.png') }}" style="width: 50px;height: 52px"
                 alt="@lang('backend.azymut')">
        </div>

        <h4 class="title">
            @lang('backend.azymut')
        </h4>
        <p class="subtitle">AN-AWARD WINNING ARCHITECTURE COMPANY</p>
    </div>

        <div class="sidebar__instagram">
            <h5 class="title">#{{ \Illuminate\Support\Str::lower(__('backend.azymut')) }}</h5>

            <div class="instagram">

                <a data-barba href="#" class="instagram__item">
                    <div class="instagram__image">
                        <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="{{ asset('frontend/img/1 (8).jpg') }}"></div>
                    </div>
                </a>

                <a data-barba href="#" class="instagram__item">
                    <div class="instagram__image">
                        <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="{{ asset('frontend/img/1 (5).jpg') }}"></div>
                    </div>
                </a>

                <a data-barba href="#" class="instagram__item">
                    <div class="instagram__image">
                        <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="{{ asset('frontend/img/1 (6).jpg') }}"></div>
                    </div>
                </a>

                <a data-barba href="#" class="instagram__item">
                    <div class="instagram__image">
                        <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="{{ asset('frontend/img/1 (7).jpg') }}"></div>
                    </div>
                </a>

                <a data-barba href="#" class="instagram__item">
                    <div class="instagram__image">
                        <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="{{ asset('frontend/img/1 (4).jpg') }}"></div>
                    </div>
                </a>

                <a data-barba href="#" class="instagram__item">
                    <div class="instagram__image">
                        <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="{{ asset('frontend/img/1 (1).jpg') }}"></div>
                    </div>
                </a>
            </div>
        </div>

    <div class="sidebar__info">
        <h5 class="title">
            @lang('backend.lets-start-project')
        </h5>
        <p class="text">
            {{ substr(__('backend.phone'), 0, 1) }}: {{settings('phone')}}<br>
            {{ substr(__('backend.email'), 0, 1) }}: {{ settings('email') }}
        </p>
        <p class="text">
           A: {{ settings('address_'.app()->getLocale()) }}
        </p>

    </div>

    <div class="sidebar__socials">
        <div class="item">
            <a data-barba href="{{ settings('email') }}">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
        </div>
        <div class="item">
            <a data-barba href="tel:{{ settings('phone') }}">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </a>
        </div>
        <div class="item">
            <a data-barba href="https://wa.me/{{ settings('whatsapp') }}">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
        </div>
        <div class="item">
            <a data-barba href="{{ settings('facebook') }}">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </div>
        <div class="item">
            <a data-barba href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</aside>
