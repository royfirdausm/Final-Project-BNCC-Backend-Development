<!-- resources/views/toys/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Toys</h1>
    <div>
        @foreach($toys as $toy)
            <div>
                <h2>{{ $toy->name }}</h2>
                <p>{{ $toy->description }}</p>
                <p>{{ $toy->price }}</p>
                <a href="{{ route('toys.show', $toy->id) }}">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
