<div class="rts-brand-area pb--70" style="background-color: #f8f8f8;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-area-wrapper-4">
                    @foreach($clients as $client)
                        <img src="{{ asset($client->photo) }}" alt="{{ $client->alt }}">
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
