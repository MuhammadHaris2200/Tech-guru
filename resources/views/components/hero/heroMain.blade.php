<!-- HERO SECTION -->

<section class="flex relative ms-16 px-48">



    <div class="p-16 grid md:grid-cols-2 items-center gap-10 min-h-[70vh] ">

        <!-- TEXT SIDE -->
        <div class="mt-20 ">
            <div
                class="flex items-center gap-2 bg-white/10 text-sm w-fit px-4 py-1 rounded-full border border-orange-200">
                <span>🔒</span>
                <p>IT Solutions Designed for Your Success</p>
            </div>


            <h1 class="mt-6 text-5xl font-bold leading-tight">
                <span class="font-Marcellus text-yellow-400 font-medium">
                    Techguru
                </span> - Smart <br />Solutions for a <br />
                <span class="">Connected world</span>
            </h1>


            <p class="mt-4 text-gray-300 max-w-md text-2xl">
                From strategic IT consulting to seamless implementation, we deliver tailored solutions that drive
                efficiency.
            </p>


            <div class="mt-6 flex items-center gap-4">
                <button class="bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-3 rounded-lg 
transition-all duration-300 font-medium hover:brightness-110">Get
                    Started →</button>
                <button class="border border-white/40 px-6 py-3 rounded-lg font-medium 
           hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 transition-all duration-300">
                    Read More →
                </button>

            </div>
        </div>

        <!-- IMAGE SIDE -->
        <div class="absolute top-[10%] right-[50%]">

            <!-- OUTER RING -->
            <div
                class="w-[70px] h-[70px] bg-blue-500/20 rounded-full backdrop-blur-sm shadow-lg flex items-center justify-center float-animate">

                <!-- INNER BUBBLE -->
                <div
                    class="w-[50px] h-[50px] bg-blue-500/80 rounded-full backdrop-blur-md shadow-xl flex items-center justify-center">

                    <!-- ICON -->
                    <img src="{{ asset('images/icon/main-slider-shield-check-icon.png') }}"
                        class="opacity-90 object-contain " />

                </div>
            </div>
        </div>
    </div>


    <!-- buttons trigger -->
    <div class="absolute top-1/3 right-10 flex flex-col gap-5">
        <!-- Left Button -->
        <button class="border border-white/40 rounded-xl px-4 py-2 hover:bg-white/10 transition">
            <i class="fa-solid fa-arrow-left rotate-45 text-lg"></i>
        </button>

        <!-- Right Button -->
        <button class="border border-white/40 rounded-xl px-4 py-2 hover:bg-white/10 transition">
            <i class="fa-solid fa-arrow-right rotate-45 text-lg"></i>
        </button>
    </div>


</section>