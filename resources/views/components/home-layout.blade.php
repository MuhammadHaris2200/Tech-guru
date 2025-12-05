@props([
    'class' => '',
    'bg' => null,     
])

<div 
    {{ $attributes->merge([
        'class' => "z-10 min-h-[90%] w-full bg-cover bg-center bg-no-repeat  $class"
    ]) }}
    @if ($bg)
        style="background-image: url('{{ $bg }}');"
    @else
        style="background-image: url('/images/default-bg.jpg');"
    @endif
>
    {{ $slot }}
</div>
