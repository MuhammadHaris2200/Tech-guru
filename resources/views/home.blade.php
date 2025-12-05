<x-layout>
    <x-home-layout bg="images/backgrounds/slider.jpg" class="relative">

        {{-- GRADIENT OVERLAY --}}
        <div class="absolute inset-0 bg-gradient-to-r 
    from-black via-black/80 via-[60%] to-transparent z-[1]">
        </div>



        {{-- CONTENT ABOVE GRADIENT --}}
        <div class="relative z-[2]">
            <x-hero.heroSide />

            <x-header.header />

            <x-hero.heroMain />

            <x-hero.bottomBar />

        </div>

    </x-home-layout>

    <x-about.about />
    <x-counter.counter />
    <x-services.services />

</x-layout>