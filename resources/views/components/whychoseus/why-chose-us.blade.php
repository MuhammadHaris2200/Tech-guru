<style>
    /* Default slider (blue → light blue) */
    .range-slider {
        -webkit-appearance: none;
        width: 100%;
        height: 6px;
        border-radius: 9999px;
        background: linear-gradient(to right, #3e74fb, #5eafea7b);
        outline: none;
        cursor: pointer;
        opacity: 1;
    }

    /* Second slider (purple → pink) */
    .range-slider.second {
        background: linear-gradient(to right, #6564d0, #ef577b);
    }

    /* Thumb */
    .range-slider::-webkit-slider-thumb,
    .range-slider.second::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 16px;
        width: 16px;
        background: white;
        border-radius: 50%;
        border: 3px solid #3e74fb;
        cursor: pointer;
    }

    /* Thumb for second slider */
    .range-slider.second::-webkit-slider-thumb {
        border-color: #ef577b;
    }

    @keyframes float-vertical {
        0% {
            transform: translateY(-10px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    .float-vertical {
        animation: float-vertical 3s ease-in-out infinite;
    }

    @keyframes floatY {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .float-animate {
        animation: floatY 5s ease-in-out infinite;
    }


    @keyframes float-left-right {
        0% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(10px);
        }

        /* move right */
        100% {
            transform: translateX(0);
        }
    }

    .float-left-right {
        animation: float-left-right 2s ease-in-out infinite;
    }
</style>

<!-- Why CHOOSE us -->
<section class="relative bg-[#0a1a2f] py-48 overflow-hidden">

    <div class="absolute inset-0 flex items-center justify-start pointer-events-none">
        <div class="w-[600px] h-[600px] lg:w-[700px] lg:h-[700px]
                -translate-x-20
                rounded-full blur-[150px] opacity-80
                bg-[radial-gradient(circle,_rgba(80,120,255,0.65),_rgba(0,0,0,0))]">
        </div>
    </div>

    <div class="absolute inset-0 flex items-center justify-end pointer-events-none">

        <!-- GLOW BACKGROUND -->
        <div class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20
                rounded-full blur-[100px] opacity-100
                bg-[radial-gradient(circle,_rgba(66,44,72,0.9),_rgba(0,0,0,0))]">
        </div>

        <!-- IMAGE ON TOP -->
        <img src="images/shapes/why-choose-one-shape-3.png"
            class="absolute -top-20 z-10 sca pointer-events-none float-vertical opacity-10" alt="">

    </div>





    <div class="relative z-10 max-w-[1300px] mx-auto  grid md:grid-cols-2 gap-x-48 grid-flow-dense items-center ">

        <!-- LEFT IMAGE BLOCK -->
        <div class="relative flex justify-center order-2">

            <img src="images/resources/about-one-img-1.jpg" alt="" class="scale-125">
            <!-- IMAGE SIDE -->
            <div class="absolute -top-24 -left-10">
                <div class="w-[80px] h-[80px] bg-[#43a872]/20 rounded-full backdrop-blur-sm shadow-lg 
                        flex items-center justify-center float-animate">
                    <div class="w-[60px] h-[60px] bg-[#43a872] rounded-full backdrop-blur-md shadow-xl 
                            flex items-center justify-center">
                        <img src="{{ asset('images/icon/main-slider-shield-check-icon.png') }}"
                            class="opacity-90 object-contain" />
                    </div>

                </div>

            </div>

            <img src="images/shapes/why-choose-one-shape-2.png" alt=""
                class="bottom-24 absolute -left-48 float-left-right">




        </div>

        <!-- RIGHT CONTENT -->
        <div class="text-white order-1">
            <p class="text-[#4FA0FF] tracking-wider text-sm font-medium flex items-center justify-center gap-2">
                <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
                Why choose us
                <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
            </p>

            <h2 class="text-4xl lg:text-4xl tracking-wider my-10 font-bold ">

                Elevate Growth <span class="text-[#edc458] font-marcellus font-normal tracking-tight">with Our Best
                    Cutting-Edge IT
                </span>
                Solutions
                for Success

            </h2>


            <p class="text-gray-300 max-w-lg mb-10 text-xl">
                Innovating and empowering businesses with tailored solutions for success and growth. Innovating and
                empowering
            </p>

            <ul class="flex gap-10 flex-col max-w-md">
                <li>
                    <h4>Camping Launches</h4>
                    <input type="range" max="100" value="80" disabled class="range-slider second w-full">
                </li>

                <li>
                    <h4>Innovation Design</h4>
                    <input type="range" max="100" value="70" disabled class="range-slider  w-full">
                </li>


            </ul>

            <div class="flex items-center gap-8 mt-10 ">

                <button
                    class="bg-gradient-to-r from-[#3e75fc] to-[#58a8ec] text-white px-6 py-3 rounded-3xl font-medium flex items-center gap-2 hover:opacity-90 transition">
                    About us
                    <i class="ri-arrow-right-line"></i>
                </button>
                <div class="flex gap-3 items-center justify-center">
                    <img src="images/resources/main-slider-trustpilot-img-2.jpg" alt="" class="rounded-full">

                    <h2>
                        Thomas Alison
                        <span class="text-[#edc458] block font-normal text-sm">Founder and CEO</span>
                    </h2>
                </div>
            </div>

        </div>

    </div>
</section>