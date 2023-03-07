<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function showAllBookswithLogin($login){
        return view('home', ['books' => Book::all(), 'user' => (User::find($login))]);

    }

    public function showAllBooks(){
        return view('home', ['books' => Book::all()]);

    }

    public function showOneBook($id){
        return view('book', ['book' => (Book::find($id))]);
    }

    public function createBook(Request $request){
        Book::create([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
            'picture' => $request->input('picture'),
            'genre' => $request->input('genre'),
            'anotation' => $request->input('anotation')

        ]);
        return redirect('api/books');
    }

    public function updateBook($id, Request $request){
        //valid
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'picture' => 'required',
            'genre' => 'required',
        ]);

        // update record
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json($book,200);
    }

    public function deleteBook($id, Request $request){

        Book::findOrFail($id)->delete();
        return response('Delete successfully', 200);
    }
}
