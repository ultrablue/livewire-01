<?php

namespace App\Http\Livewire;

use App\Models\Author;
use App\Models\Book;
use Livewire\Component;

class Dropdowns extends Component
{
    public $author;
    public $books = [];
    public $book;

    public function render()
    {
        if (!empty($this->author)) {
            $this->books = Book::where('author_id', $this->author)->get();
        }

        // We do get some books. Uncomment after the inital load, but before making an Author selection. It's just getting bound to the variable.
        // if (count($this->books)) {
        //     dd($this->books);
        // }

        // Can we get it to send anything??? Nope. This only works once.
        // $this->books = Book::where('author_id', rand(1, 3))->get();

        // This doesn't work:
        // return view('livewire.dropdowns', ['authors' => Author::orderBy('last_name')->get(), 'books' => $this->books]);

        return view('livewire.dropdowns')->withAuthors(Author::orderBy('last_name')->get());
    }
}
