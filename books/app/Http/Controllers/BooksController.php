<?php

namespace App\Http\Controllers;
use App\Models\Book_model;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Book_model::all(); 
        $booksObject = $books[0];
        return view('index', ['books' => $books],['booksObject' => $booksObject]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){ //To create or store we need to use the fields of the table and a request for doing this
        $book = new Book_model;
        $book -> title = $request -> title;
        $book -> author = $request -> author;
        $book -> isbn = $request -> isbn;
        $book -> published_year = $request -> published_year;

        $book -> save();
        return redirect()-> route('books.index');
    }

    public function edit($id){ //To update we use the id of a record, because its a primary key
        $book = Book_model::find($id);
        return view('edit', ['book' => $book]);
    }

    public function update(Request $request, $id){ //To update we have to specified what fields are in the table and with their respective request
        $book = Book_model::find($id);

        $book -> title = $request ->title;
        $book -> author = $request ->author;
        $book -> isbn = $request ->isbn;
        $book-> published_year = $request->published_year;

        $book -> save();
        return redirect() ->route('books.index');
    }

    public function show($book, $category = null){
        return view('show', compact('book', 'category'));
    }
    
    public function destroy ($id){ //We will use the id to delete all the record in a easily way
        $book = Book_model::find($id);
        $book -> delete();
        return redirect() -> route ('books.index');
    }

}
