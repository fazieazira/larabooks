<?php
namespace App\Http\Controllers; 
// use Model in controller
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Http\RedirectResponse;




class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('books.index');
		
	    $books = Book::all();
        $categories = BookCategory::all();
        return view('books.index', compact('books', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$categories = BookCategory::all();
		return view('books.create', compact('categories'));
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
         // Validate the incoming request
			$validated = $request->validate([
			'title' => 'required|string|max:255',
			'book_category_id' => 'nullable|exists:book_categories,id',

        ]);

        // Create and save the book
        Book::create($validated);

        // Redirect back to the book list with a success message
        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }

    /**
     * Display the specified resource.
     */
	public function show(Book $book)
	{
		return view('books.show', compact('book'));
	}

    /**
     * Show the form for editing the specified resource.
     */
	public function edit(Book $book)
	{
    $categories = BookCategory::all();
    return view('books.edit', compact('book', 'categories'));

	}

    /**
     * Update the specified resource in storage.
     */
	public function update(Request $request, Book $book): RedirectResponse
	{
	$validated = $request->validate([
    'title' => 'required|string|max:255',
    'book_category_id' => 'nullable|exists:book_categories,id',

    ]);

    $book->update($validated);

    return redirect()->route('books.index')->with('success', 'Book updated successfully!');
	}

    /**
     * Remove the specified resource from storage.
     */
	public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}

   
