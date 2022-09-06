<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{

    public function store()
    {
        $book = Book::create($this->validate_request());
        return redirect('/books/' . $book->id);

    }

    public function update(Book $book)
    {
        $book->update($this->validate_request());

        return redirect('/books/' . $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }

    private function validate_request()
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required'
        ]);
    }
}
