<div class="border-t-2 border-solid border-black m-4 p-4">
    <select wire:model="state" name="state" id="state">
        <option value="">Choose a state</option>
        @foreach ($states as $state)
            <option value={{ $state->code }}>{{ $state->name }}</option>
        @endforeach
    </select>
</div>

@if($cities)
<div class="font-mono m-5 p-5 bg-green-300">
{{ $cities }}
</div>
@endif

{{-- @if (count($cities) > 0) --}}
    <div class="m-4 p-4">
        <option value="">Choose a city</option>
        <select name="city" wire:model="city">
            @foreach ($cities as $city)
                <option value={{ $city->id }}>{{ $city->name }}</option>
            @endforeach
        </select>
    </div>
{{-- @endif --}}
