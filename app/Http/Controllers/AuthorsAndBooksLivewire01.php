<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsAndBooksLivewire01 extends Controller
{
    public function show(Request $request)
    {
        return view('components-tests.authors-and-books');
    }
}
