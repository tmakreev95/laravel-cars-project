@props(['btnClass' => '', 'imgSrc' => '', 'imgAlt' => '', 'imgStyle' => ''])

<button {{ $attributes->class("btn $btnClass") }}>
    <img {{ $attributes->merge(['src' => $imgSrc, 'style' => $imgStyle, 'alt' => $imgAlt]) }} />
    @if ($slot->isEmpty())
        Button.
    @else
        {{ $slot }}
    @endif
</button>
