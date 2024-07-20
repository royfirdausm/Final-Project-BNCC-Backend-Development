<!-- resources/views/carts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Cart</h1>
    <div>
        @foreach($carts as $cart)
            <div>
                <h2>{{ $cart->toy->name }}</h2>
                <p>{{ $cart->quantity }}</p>
                <form action="{{ route('carts.destroy', $cart->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
        @endforeach
    </div>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <button type="submit">Checkout</button>
    </form>
@endsection
