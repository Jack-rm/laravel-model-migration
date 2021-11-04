@extends('layouts.main')

@section('title', $travel->name)

@section('content')
<section id="travel-detail">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $travel->name }}</h2>
                <h4>{{ $travel->destination_city }}<span>- {{ $travel->destination_country }}</span></h4>
                <h5>{{ $travel->accomodation }}</h5>
                <p>Prezzo: {{ $travel->price }}</p>
                <p>Travel Time: {{ $travel->travel_days }} days</p>
                <date><b>Departure:</b> {{ $travel->date_departure }} ||</date>
                <date><b>Return:</b> {{ $travel->date_return }}</date>
                <p>Participants: {{ $travel->participants }}</p>
                <p>{{ $travel->description }}</p>
            </div>
        </div>
    </div>
</section>
@endsection