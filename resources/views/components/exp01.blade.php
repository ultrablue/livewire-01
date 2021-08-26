<div class="rounded-md bg-blue-400 p-10 m-10 w-1/4">
    <h1 class="text-xl font-bold mb-3">This is Exp01!</h1>
    <h2 class="mb-3">This is what's in message: {{ $message }}</h2>
    {{ $message }}
    <h3>{{ $foo }}</h3>
    <p class="m-5 p-2 border rounded-sm">$Slot: <span class="bg-purple-400">{{ $slot }}</span></p>
    <p>Attributes: {{ $attributes }}</p>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <p>{{ $now }}</p>
</div>
