@extends('layouts.app')

@section('content')
    <h1 class="mt-4 mb-4">Grocery Inventory Management</h1>

    <form action="/grocery/add_item" method="post">
    @csrf
        <div class="form-group">
            <label for="name">Item Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" name="quantity" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>

    <h2 class="mt-4">Inventory</h2>
    <ul class="list-group">
        @foreach ($inventory as $item)
            <li class="list-group-item">{{ $item->name }} - Quantity: {{ $item->quantity }}</li>
        @endforeach
    </ul>
@endsection
