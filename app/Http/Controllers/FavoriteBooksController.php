<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\FavoriteBooks;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteBooksController extends Controller
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
    public function showAllBooks(){
        return view('favorites', ['books' => FavoriteBooks::all()]);

    }


    public function showOneBook($id){
        return view('book', ['book' => (FavoriteBooks::find($id))]);
    }

    public function createBook($id){
        $book = Book::find($id);
        FavoriteBooks::create([
            'name' => $book['name'],
            'author' => $book['author'],
            'picture' => $book['picture'],
            'genre' => $book['genre'],
            'anotation' => $book['anotation']

        ]);
        return redirect('api/books');
    }

    public function deleteBook($id, Request $request){

        Book::findOrFail($id)->delete();
        return response('Delete successfully', 200);
    }
}
