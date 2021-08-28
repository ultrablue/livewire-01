{{-- <div>
    <p>Simplicity is an acquired taste. - Katharine Gerould</p>
    <p>{{ $selected }}</p>
    <p>{{ $chooserData }}</p>
    <p>{{ $chooserId }}</p>
</div> --}}




<div class="m-10">
    <select class="block appearance-none w-auto bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="{{ $chooserId }}">
        @foreach ($chooserData as $data)
            <option value="{{ $data->code }}" @if ($selected === $data->code) selected="selected" @endif>{{ $data->name }}</option>
        @endforeach
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
    </div>
</div>

