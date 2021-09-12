<div class="bg-indigo-300 m-5 p-5 rounded-xl w-1/3">
    <h1>This is component-01, an anonymous component.</h1>
    <div class="m-3 p-2 border-2 rounded-md">
        <h1 class="text-lg font-bold">This is what came in from the blade file that called this component:</h1>
        {{ $slot }}
    </div>
</div>
