@props(['type' => 'button', 'submit', 'reset'])
@props(['size' => 'xs', 'sm'])

<button
    {{ $attributes->class(['btn'])}}
    {{ $attributes->merge([
        'type' => $type,
        'size' => $size
    ])}}
>
    @if (!empty($text))
        {{ $text }} >
    @else
        {{ $slot }}
    @endif
</button>
