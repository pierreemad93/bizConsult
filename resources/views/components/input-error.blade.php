@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-danger']) }}>
        @foreach ((array) $messages as $message)
            <li style="list-style:none">{{ $message }}</li>
        @endforeach
    </ul>
@endif
