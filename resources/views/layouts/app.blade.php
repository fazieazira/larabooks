<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books App</title>
    {{-- Use Tailwind CDN (works on Windows 7!) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>
	
<nav class="mb-6">
    <a href="{{ route('books.index') }}" class="text-blue-600 mr-4">Books</a>
    <a href="{{ route('bookcategories.index') }}" class="text-blue-600">Categories</a>
</nav>

</body>
</html>