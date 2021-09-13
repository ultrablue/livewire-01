@extends('layouts.component-layout-01')

<div class="mt-10 ml-5 p-5 border border-black w-3/4 center">
    <ul>
        <li>This page demonstrates Laravel Components. It features both types, anonymous and class-based Components.</li>
        <li><span class="bg-yellow-300">The route calls a blade file directly; there is no Controller for this simple example.</span></li>
        <li>Please see the documentation for more information about Components:</li>
        <li class="ml-5"><a href="https://laravel.com/docs/blade" class="underline">laravel.com/docs/blade</a></li>
    </ul>
    <h1 class="font-bold mt-5">Files:</h1>
    <ul class="list-disc ml-5">
        <li>Main Blade file: resources/views/components/component-01.blade.php</li>
        <li>Layout: resources/views/layouts/component-layout-01.blade.php</li>
        <li>Anonymous Compontent: resources/views/components-tests/components-01.blade.php</li>
        <li>Component Class: app/View/Components/ClassComponent01.php</li>
        <li>Compontent Class Blade: resources/views/components/ClassComponent01.blade.php</li>

    </ul>
</div>

<x-component-01>
    <h3>This is the compontent's slot.</h3>
    <div>By that I mean everything between the component's tags.</div>
</x-component-01>

<hr>

<x-ClassComponent01 foo="bar" message="This was passed in." class="some classes" type="button">
    This is the content that ends up in $slot.
</x-ClassComponent01>

<x-ClassComponent01 foo="baz" message="">
    This is another instance of ClassComponent01. 🙌
</x-ClassComponent01>
