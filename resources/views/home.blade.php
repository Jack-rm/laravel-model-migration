@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section id="travels">
    <div class="container">
        <div class="row row-cols-5">
            
        @forelse ($travels as $travel)
            <div class="col">
                <h2>{{ $travel['name'] }}</h2>
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