@extends('layouts.component-layout-01')
@section('pageTitle')Cities and States 01 - Static Page Reload @endsection



<div class="m-10">

    <h1 class="text-2xl m-10">Test 2</h1>
    <p class="bg-gray-300 p-2 m-10 w-auto">This one reloads the page when the State is changed. </p>
    <div class="bg-pink-200 p-2 m-10 rounded-md w-1/3">
        <h1 class="text-2xl font-bold">Tasks</h1>
        <ul class="list-disc list-inside ml-6">
            <li><span class="line-through">Make the form fields Components.</span></li>
            <li><span class="line-through">Change title</span></li>
            <li><span class="line-through">Rename things to make them more comprehensible.</span></li>
            <li>Make some tests!!</li>
            <li>Add an autocomplete field. Fake it with a list.</li>
            <li><span class="line-through">Make sure that the cities and states models don't do dates.</span></li>
        </ul>
    </div>


    <x-LocationChooser :chooserData="$states" :selected="$selected" chooserId="grid-state"></x-LocationChooser>

    @if ($cities)
        <x-LocationChooser :chooserData="$cities" :selected="$selected" chooserId="grid-city"></x-LocationChooser>
    @endif


</div>
