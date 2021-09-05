<div>

    <div class="border-t-2 border-solid border-black m-4 p-4">
        <select wire:model="state" name="state_id" id="state_id">
            <option value="">Choose a state</option>
            @foreach ($states as $state)
                <option value="{{ $state->state_code }}">{{ $state->state }}</option>
            @endforeach
        </select>
    </div>

    @if (count($this->cities) > 0)
        <div class="m-4 p-4">
            <option value="">Choose a city</option>
            <select name="city" id="city" wire:model="cities">
                @foreach ($cities as $city)
                    <option value={{ $city->id }}>{{ $city->city }} ({{ $city->county }})</option>
                @endforeach
            </select>
        </div>
    @endif

</div>
