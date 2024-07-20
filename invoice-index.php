<!-- resources/views/invoices/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>
    <div>
        @foreach($invoices as $invoice)
            <div>
                <h2>Invoice #{{ $invoice->id }}</h2>
                <p>Total: {{ $invoice->total }}</p>
            </div>
        @endforeach
    </div>
@endsection
