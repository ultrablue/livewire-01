<div> {{-- All Livewire components must have one, and only one, root element! --}}

    <div class="border-t-2 border-solid border-black m-4 p-4">
        <select wire:model="author" name="author" class="block appearance-none w-auto bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option value="" >Choose an author</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}" class="bg-blue-200">{{ $author->first_name }} {{ $author->last_name }}</option>
            @endforeach
        </select>
    </div>


    @if (count($books) > 0)

<div class="m-10 border-2">
Author: {{ $author }}
</div>


        <div class="m-4 p-4">
            <select name="book" wire:model="book" class="block appearance-none w-auto bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option value="">Choose a book</option>
                @foreach ($books as $book)
                    <option value={{ $book->id }}>{{ $book->title }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
