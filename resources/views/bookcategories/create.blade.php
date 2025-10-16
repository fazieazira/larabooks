@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Add Book Category</h1>
    <form method="POST" action="{{ route('bookcategories.store') }}">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Name</label>
            <input type="text" name="name" class="w-full border p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Save</button>
        <a href="{{ route('bookcategories.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </form>
</div>
@endsection
