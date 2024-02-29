<section class="layout-pt-md layout-pb-md bg-grey pattern_bg_1">
    <div class="container">
        <div class="row justify-content-between md:pt-48">

            <div class="col-lg-auto col-md-6">
                <div class="counter">
                    <div class="counter__back">
                        {{ settings('count_customer') }}
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-black">
                            {{ settings('count_customer') }}
                        </div>
                        <h5 class="counter__title text-black">
                            @lang('backend.customer')
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-auto col-md-6">
                <div class="counter">
                    <div class="counter__back">
                        {{ settings('count_experience') }}
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-black">
                            {{ settings('count_experience') }}
                        </div>
                        <h5 class="counter__title text-black">
                            @lang('backend.experience')
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-auto col-md-6">
                <div class="counter">
                    <div class="counter__back">
                        {{ settings('count_projects') }}
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-black">
                            {{ settings('count_projects') }}
                        </div>
                        <h5 class="counter__title text-black">
                            @lang('backend.projects')
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-auto col-md-6">
                <div class="counter">
                    <div class="counter__back">
                        {{ settings('count_services') }}
                    </div>

                    <div class="counter__content">
                        <div class="counter__number text-black">
                            {{ settings('count_services') }}
                        </div>
                        <h5 class="counter__title text-black">
                            @lang('backend.services')
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
