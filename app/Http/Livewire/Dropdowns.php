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

    public function mount()
    {
    }

    public function render()
    {
        if (!empty($this->author)) {
            $this->books = Book::where('author_id', $this->author)->get();
        }

        return view('livewire.dropdowns')->withAuthors(Author::orderBy('last_name')->get());
    }
}
