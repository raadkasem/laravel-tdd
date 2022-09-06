<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{

    public function store()
    {
        Book::create($this->validate_request());
    }

    public function update(Book $book)
    {
        $book->update($this->validate_request());
    }

    public function destroy(Book $book)
    {
        $book->delete();
    }

    private function validate_request()
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required'
        ]);
    }
}
