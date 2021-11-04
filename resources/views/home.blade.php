@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section id="travels">
    <div class="container">
        <div class="row">
            
        @forelse ($travels as $travel)
            <div class="col-6">
                <h2>{{ $travel['name'] }}</h2>
                <h4>{{ $travel->destination_city }}<span>- {{ $travel->destination_country }}</span></h4>
                <h5>{{ $travel->accomodation }}</h5>
                <p>Prezzo: {{ $travel->price }}</p>
                <p>Travel Time: {{ $travel->travel_days }} days</p>
                <date><b>Departure:</b> {{ $travel->date_departure }} ||</date>
                <date><b>Return:</b> {{ $travel->date_return }}</date>
                <p>Participants: {{ $travel->participants }}</p>
                <p>{{ $travel->description }}</p>
            </div>
        @empty
            <div class="col">
                <h2>Nessun viaggio disponibile</h2>
            </div>
        @endforelse
        </div>
    </div>
</section>
@endsection