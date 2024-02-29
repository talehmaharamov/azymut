<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row y-gap-32 justify-content-between align-items-center">
            @foreach($clients as $client)
                <div class="col-lg-auto col-md-auto col-6">
                    <a href="{{ $client->link }}">
                        <div class="clients">
                            <div class="clients__image">
                                <img src="{{ asset($client->photo) }}" alt="{{ $client->alt }}">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
