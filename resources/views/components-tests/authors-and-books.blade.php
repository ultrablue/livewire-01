@extends('layouts.livewire-layout-01')
@section('pageTitle')Authors and Books - Livewire @endsection



<div class="m-10">

    <h1 class="text-2xl m-10">Livewire Test</h1>
    <p class="bg-gray-300 p-2 m-10 w-auto">This one uses Livewire. It inserts or updates the Books select when the Authors select changes.</p>
    <div class="bg-pink-200 p-2 m-10 rounded-md w-1/3">
        <h1 class="text-2xl font-bold">Tasks</h1>
        <ul class="list-disc list-inside ml-6">
            <li>Make it remember (highlight) the selected author.</li>
            <li>Make the books list go away if no author was selected.</li>
            {{-- <li><span class="line-through"></span></li> --}}
            <li>Make some tests.</li>
        </ul>
    </div>

    @livewire('authors-and-books')

</div>
