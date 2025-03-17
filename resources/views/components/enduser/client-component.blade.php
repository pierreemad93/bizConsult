@if (count($clients) > 0)
    <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                @foreach ($clients as $client)
                    <a href="#">
                        <img class="img-fluid"  src="{{ asset("storage/clients/$client->image") }}" title="{{ $client->name }}">
                    </a>
                @endforeach


            </div>
        </div>
    </div>
@endif
