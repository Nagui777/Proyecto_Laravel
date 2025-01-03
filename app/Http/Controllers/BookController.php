<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Book; 
use Illuminate\Http\Request; 
 
class BookController extends Controller 
{ 
    public function index() 
    { 
        return Book::all(); 
    } 
 
    public function show($id) 
    { 
        return Book::find($id); 
    } 
 
    public function store(Request $request) 
    { 
        $book = new Book(); 
        $book->title = $request->title; 
        $book->author = $request->author; 
        $book->category = $request->category; 
        $book->quantity = $request->quantity; 
        $book->save(); 
        return response()->json($book, 201); 
    } 
 
    public function update(Request $request, $id) 
    { 
        $book = Book::find($id); 
        $book->update($request->all()); 
        return response()->json($book); 
    } 
 
    public function destroy($id) 
    { 
        $book = Book::find($id); 
        $book->delete(); 
        return response()->json(null, 204); 
    } 
} 
