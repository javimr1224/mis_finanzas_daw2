@if ($href)
    <a href="{{$href}}" {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{$type}}" {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </button>
@endif
