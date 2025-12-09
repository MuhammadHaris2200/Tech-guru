
@php
    $pricing = [
        'monthly' => [
            'personal' => '5.60',
            'premium' => '25.60',
            'business' => '120.60',
        ],
        'yearly' => [
            'personal' => '45.00',
            'premium' => '199.00',
            'business' => '999.00',
        ],
        'packages' => [
            'personal' => '99.00',
            'premium' => '499.00',
            'business' => '1499.00',
        ],
    ];
@endphp

<section class="min-h-[800px] py-24 relative overflow-hidden ">

    <!-- Header Section -->
    <div class="relative w-full text-center flex flex-col items-center justify-center px-4 md:px-0 mb-12">
        <p class="text-[#4FA0FF] tracking-wider text-sm font-medium flex items-center justify-center gap-2">
            <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
            Pricing & Plan
            <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
        </p>

        <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mt-6">
            Select the Perfect
            <span class="font-medium mt-2 text-[#F2C65A] font-marcellus ">
                Plan
                for Your <br />
                Needs That Fits You
            </span>
        </h2>
    </div>

    <div class="absolute inset-0 flex items-center justify-start pointer-events-none z-[2]">
        <div class="w-[700px] h-[700px] lg:w-[900px] lg:h-[900px]
        translate-x-20
                rounded-full blur-[100px] opacity-100 bg-[radial-gradient(circle,_rgba(67,123,205,0.4),_rgba(0,0,0,0))]
">
        </div>


    </div>

    <div class="absolute inset-0 flex items-center justify-end pointer-events-none">

   
    </div>

    <div class="w-full bg-[#05133A] py-20 flex justify-center">
    <div class="w-[1440px] max-w-full px-5">

        {{-- PLAN SWITCHER --}}
        <div class="flex justify-center mb-10">
            <div class="inline-flex bg-[#0d1f52] rounded-full p-1">
                <button 
                    onclick="changePlan('monthly')" 
                    id="btn-monthly"
                    class="px-6 py-2 rounded-full text-white text-sm font-semibold bg-gradient-to-r from-[#6651ff] to-[#ff4d94]">
                    MONTHLY
                </button>

                <button 
                    onclick="changePlan('yearly')" 
                    id="btn-yearly"
                    class="px-6 py-2 rounded-full text-white text-sm font-semibold">
                    YEARLY
                </button>

                <button 
                    onclick="changePlan('packages')" 
                    id="btn-packages"
                    class="px-6 py-2 rounded-full text-white text-sm font-semibold">
                    PACKAGES
                </button>
            </div>
        </div>

        {{-- PRICING CARDS --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- PERSONAL --}}
            <div class="!bg-[#1d253f] rounded-2xl p-10 text-white border border-[#1c2a5c]">
                <h3 class="text-center text-lg mb-4">PERSONAL</h3>
                <h1 id="price-personal" class="text-center text-5xl font-bold">
                    ${{ $pricing['monthly']['personal'] }}
                </h1>

                <p class="text-center mt-4 opacity-80">
                    Will Get Free 3 Months Solutions Support
                </p>

                <div class="flex justify-center mt-6">
                    <button class="px-8 py-2 bg-gradient-to-r from-[#6651ff] to-[#ff4d94] rounded-full font-semibold text-white">
                        Choose Plan
                    </button>
                </div>

                <h4 class="mt-8 font-semibold text-yellow-400">Feature Description</h4>

                <ul class="mt-4 space-y-2">
                    <li>✔️ Custom Website Design</li>
                    <li>✔️ Website Design & Development</li>
                    <li>✔️ Social Media Graphics</li>
                    <li>❌ Brand Color Palette</li>
                </ul>
            </div>

            {{-- PREMIUM --}}
            <div class="bg-[#0c1a42] rounded-2xl p-10 text-white border border-[#1c2a5c]">
                <h3 class="text-center text-lg mb-4">PREMIUM</h3>
                <h1 id="price-premium" class="text-center text-5xl font-bold">
                    ${{ $pricing['monthly']['premium'] }}
                </h1>

                <p class="text-center mt-4 opacity-80">
                    Will Get Free 5 Months Solutions Support
                </p>

                <div class="flex justify-center mt-6">
                    <button class="px-8 py-2 bg-gradient-to-r from-[#6651ff] to-[#ff4d94] rounded-full font-semibold text-white">
                        Choose Plan
                    </button>
                </div>

                <h4 class="mt-8 font-semibold text-yellow-400">Feature Description</h4>

                <ul class="mt-4 space-y-2">
                    <li>✔️ Custom Website Design</li>
                    <li>✔️ Website Design & Development</li>
                    <li>✔️ Basic & Technical SEO</li>
                    <li>✔️ Social Media Graphics</li>
                    <li>✔️ Brand Color Palette</li>
                </ul>

                <p class="mt-5 text-center text-orange-400">🔥 Unlimited Offer</p>
            </div>

            {{-- BUSINESS --}}
            <div class="bg-[#0c1a42] rounded-2xl p-10 text-white border border-[#1c2a5c]">
                <h3 class="text-center text-lg mb-4">BUSINESS</h3>
                <h1 id="price-business" class="text-center text-5xl font-bold">
                    ${{ $pricing['monthly']['business'] }}
                </h1>

                <p class="text-center mt-4 opacity-80">
                    Will Get Free Lifetime Solutions Support
                </p>

                <div class="flex justify-center mt-6">
                    <button class="px-8 py-2 bg-gradient-to-r from-[#6651ff] to-[#ff4d94] rounded-full font-semibold text-white">
                        Choose Plan
                    </button>
                </div>

                <h4 class="mt-8 font-semibold text-yellow-400">Feature Description</h4>

                <ul class="mt-4 space-y-2">
                    <li>✔️ Custom Website Design</li>
                    <li>✔️ Website Design & Development</li>
                    <li>✔️ Social Media Graphics</li>
                    <li>✔️ Brand Color Palette</li>
                </ul>

            </div>
        </div>
    </div>
</div>


</section>



{{-- PRICE SWITCHER SCRIPT --}}
<script>
    const pricing = @json($pricing);

    function changePlan(plan) {
        document.getElementById("price-personal").innerText = "$" + pricing[plan].personal;
        document.getElementById("price-premium").innerText = "$" + pricing[plan].premium;
        document.getElementById("price-business").innerText = "$" + pricing[plan].business;

        document.querySelectorAll("button[id^='btn-']").forEach(btn => {
            btn.classList.remove("bg-gradient-to-r", "from-[#6651ff]", "to-[#ff4d94]");
        });

        document.getElementById("btn-" + plan).classList.add(
            "bg-gradient-to-r",
            "from-[#6651ff]",
            "to-[#ff4d94]"
        );
    }
</script>
