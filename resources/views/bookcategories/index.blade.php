@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Book Categories</h1>

    @if(session('success'))
        <div class="mb-4 px-4 py-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif

    <a href="{{ route('bookcategories.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded mb-4 inline-block">Add Category</a>

    <ul class="mt-4 space-y-2">
        @foreach($categories as $category)
            <li class="flex justify-between items-center bg-white p-3 rounded shadow">
                <span>{{ $category->name }}</span>
                <div>
                    <a href="{{ route('bookcategories.edit', $category) }}" class="text-green-600 mr-2">Edit</a>
                    <form action="{{ route('bookcategories.destroy', $category) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection

