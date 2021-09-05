<div> 
{{-- All Livewire components must have one, and only one, root element! --}}

<div class="border-t-2 border-solid border-black m-4 p-4">
    <select wire:model="author" name="author">
        <option value="">Choose an author</option>
        @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
        @endforeach
    </select>
</div>


@if (count($books) > 0)
    <div class="m-4 p-4">
        <option value="">Choose a book</option>
        <select name="book" wire:model="book">
            @foreach ($books as $book)
                <option value={{ $book->id }}>{{ $book->title }}</option>
            @endforeach
        </select>
    </div>
@endif
</div>