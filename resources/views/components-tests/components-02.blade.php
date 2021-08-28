
{{-- TODO I need a title, please! --}}
@extends('layouts.component-layout-01')




<div class="m-10">
    
    <h1 class="text-2xl m-10">Test 2</h1>
    <p class="bg-gray-300 p-2 m-10 w-auto">This one reloads the page when the State is changed. </p>
    <div class="bg-pink-200 p-2 m-10 rounded-md w-1/3">
        <h1 class="text-2xl font-bold">Tasks</h1>
        <ul class="list-disc list-inside ml-6">
            <li>Change title</li>
            <li>Rename things to make them more comprehensible.</li>
            <li>Make some tests!!</li>
            <li>Add an autocomplete field. Fake it with a list.</li>
            <li>Make the form fields Components.</li>
            <li>Make sure that the cities and states models don't do dates.</li>
        </ul>
    </div>
    
    
    <x-LocationChooser :chooserData="$states" :selected="$selected" chooserId="grid-state"></x-LocationChooser>

    @if ($cities)
        <div class="m-10">

            <select class="block appearance-none w-auto bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-city">
                @foreach ($cities as $city)
                    <option value="{{ $city->state }}">{{ $city->name }}</option>
                @endforeach
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

        </div>
    @endif


</div>
