@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h4 mb-1">Add Product</h1>
            <p class="text-muted mb-0">Register a new SKU in the warehouse.</p>
        </div>
    </div>

    @include('products.partials.form')
@endsection
