<form method="POST" action="{{ route('books.store') }}">
@csrf    
<input type="text" id="title" name="title" required>
<button type="submit">Save Book</button>
</form>