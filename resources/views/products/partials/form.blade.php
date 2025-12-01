@php($editing = isset($product))

@if ($errors->any())
    <div class="alert alert-danger">
        <div class="fw-bold mb-1">Please fix the following:</div>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $editing ? route('products.update', $product) : route('products.store') }}" method="POST" class="card shadow-sm">
    @csrf
    @if ($editing)
        @method('PUT')
    @endif
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-4">
                <label for="sku" class="form-label">SKU</label>
                <input
                    type="text"
                    name="sku"
                    id="sku"
                    value="{{ old('sku', $product->sku ?? '') }}"
                    class="form-control @error('sku') is-invalid @enderror"
                    required
                >
                @error('sku')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name', $product->name ?? '') }}"
                    class="form-control @error('name') is-invalid @enderror"
                    required
                >
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="stock" class="form-label">Stock</label>
                <input
                    type="number"
                    name="stock"
                    id="stock"
                    value="{{ old('stock', $product->stock ?? 0) }}"
                    min="0"
                    class="form-control @error('stock') is-invalid @enderror"
                    required
                >
                @error('stock')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description <span class="text-muted">(optional)</span></label>
                <textarea
                    name="description"
                    id="description"
                    rows="3"
                    class="form-control @error('description') is-invalid @enderror"
                    placeholder="Notes about the item or supplier">{{ old('description', $product->description ?? '') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-footer bg-white d-flex justify-content-between align-items-center">
        <a href="{{ route('products.index') }}" class="btn btn-link text-decoration-none">Back to Inventory</a>
        <div>
            @if ($editing)
                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary me-2">Cancel</a>
            @endif
            <button type="submit" class="btn btn-primary">
                {{ $editing ? 'Update Product' : 'Save Product' }}
            </button>
        </div>
    </div>
</form>
