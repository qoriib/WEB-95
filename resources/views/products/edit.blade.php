@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h4 mb-1">Edit Product</h1>
            <p class="text-muted mb-0">Update SKU details and stock levels.</p>
        </div>
    </div>

    @include('products.partials.form', ['product' => $product])
@endsection
