@props(['label', 'filler', 'name', 'datas'])
<x-form.container>
    <x-form.label label="{{ $label }}" />
    <select name="{{ $name }}" id=""
        class="h-full bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md">
        <option value="0">{{ $filler }}</option>
        @foreach ($datas as $data)
            @if (!$data->full_title)
                <option value="{{ $data->id }}">{{ $data->name }}
                @else
                <option value="{{ $data->id }}">{{ $data->name }} ({{ $data->full_title }})
            @endif
            </option>
        @endforeach
    </select>
</x-form.container>
