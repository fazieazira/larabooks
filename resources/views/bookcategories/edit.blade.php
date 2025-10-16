@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Book Category</h1>
    <form method="POST" action="{{ route('bookcategories.update', $bookcategory) }}">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-1">Name</label>
            <input type="text" name="name" value="{{ old('name', $bookcategory->name) }}" class="w-full border p-2" required>
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2">Update</button>
        <a href="{{ route('bookcategories.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </form>
</div>
@endsection
