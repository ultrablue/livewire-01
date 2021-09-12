<div class="rounded-md bg-blue-400 p-10 m-10 w-1/2">
    <h1 class="text-xl font-bold mb-3">This is ClassComponent01</h1>
    <h2 class="mb-3">This is what's in $message: {{ $message }}</h2>
    {{ $message }}
    <h3>{{ $foo }}</h3>
    <p class="m-5 p-2 border rounded-sm">$Slot: <span class="bg-purple-400">{{ $slot }}</span></p>
    <p>Attributes: {{ $attributes }}</p>
    <p>The date this page was created: {{ $now->format('l, F jS at H:i e') }}</p>
</div>
