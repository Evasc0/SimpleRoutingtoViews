@extends('itemTemplate')

@section('content')
    <div class="item-details">
        <h1>{{ $name }}</h1>
        <p>{{ $description }}</p>
        <a href="{{ route('items.edit', $id) }}" class="btn btn-primary">Edit Item</a>
    </div>
@endsection