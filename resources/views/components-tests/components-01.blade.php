@extends('layouts.component-layout-01')

<x-component-01>
    <h2>Hello!</h2>
    <h3>This is the compontent's slot.</h3>
    <div>By that I mean everything between the component's tags.</div>
</x-component-01>

<hr>

<x-exp01 foo="bar" message="This was passed in." class="some classes" type="button">
    This is the content that ends up in $slot.
</x-exp01>
