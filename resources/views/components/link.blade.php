@props(['target' => '_self', '_blank', '_parent', '_top'])

<a
    {{ $attributes->class(['link'])}}
    {{ $attributes->merge([
        'href' => $href,
        'target' => $target
    ])}}
>
    @if (!empty($text))
        {{ $text }}
    @else
        {{ $slot }}
    @endif
</a>
