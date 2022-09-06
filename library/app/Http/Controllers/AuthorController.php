<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function store()
    {
        $data = request()->only([
            'name',
            'dob'
        ]);

        Author::create($data);
    }

    // public function update(Author $author)
    // {
    //     $author->update();
    // }
}
