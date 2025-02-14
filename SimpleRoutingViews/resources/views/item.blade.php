@extends('itemTemplate')

@section('content')
    <h1>Item List</h1>
    <a href="{{ url('/items/create') }}" class="btn btn-primary">Add New Item</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul class="list-group">
        @foreach($items as $item)
            <li class="list-group-item">
                {{ $item->name }} - {{ $item->description }}
                <a href="{{ route('items.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
            </li>
        @endforeach
    </ul>
@endsection