<div x-data="{ openMenu: false } ">
    <!-- EVERYTHING must be inside this div -->

    <header id="mainHeader"
        class="sticky top-0 z-[999] w-full p-6 border-b border-white/20 transition-all duration-500 ">

        <div class="py-4 flex items-center justify-between">

            <div class="flex items-center gap-2">
                <img src="images/logo-1.webp" />
            </div>

            <nav class="hidden md:flex items-center gap-8 text-gray-300">
                <a href="#" class="hover:text-yellow-500 transition text-yellow-500">Home</a>
                <a href="#" class="hover:text-yellow-500 transition">About</a>
                <a href="#" class="hover:text-yellow-500 transition">Pages</a>
                <a href="#" class="hover:text-yellow-500 transition">Services</a>
                <a href="#" class="hover:text-yellow-500 transition">Shop</a>
                <a href="#" class="hover:text-yellow-500 transition">Blog</a>
                <a href="#" class="hover:text-yellow-500 transition">Contact</a>
            </nav>

            <div class="flex items-center gap-4">
                <button class="bg-blue-600 hover:bg-yellow-700 transition px-5 py-2 rounded-lg font-medium">
                    Get In Touch →
                </button>

                <!-- OPEN SIDEBAR BUTTON -->
                <button @click="openMenu = true" class="text-3xl hover:text-yellow-500 transition-all duration-500">
                    ☰
                </button>
            </div>

        </div>
    </header>

    <!-- OVERLAY -->
    <div x-show="openMenu" x-transition.opacity class="fixed inset-0 bg-black/50 z-[998]" @click="openMenu = false">
    </div>

    <!-- SIDEBAR (LEFT SIDE) -->
    <div x-show="openMenu" x-transition
        class="fixed left-0 top-0 w-80 h-full bg-[#0B192C] text-white shadow-xl z-[999] p-6 flex flex-col space-y-6 transform"
        @click.away="openMenu = false">

        <button class="text-2xl self-end hover:text-yellow-500" @click="openMenu = false">✕</button>

        <a href="#" class="text-lg hover:text-yellow-500">Home</a>
        <a href="#" class="text-lg hover:text-yellow-500">About</a>
        <a href="#" class="text-lg hover:text-yellow-500">Services</a>
        <a href="#" class="text-lg hover:text-yellow-500">Shop</a>
        <a href="#" class="text-lg hover:text-yellow-500">Blog</a>
        <a href="#" class="text-lg hover:text-yellow-500">Contact</a>

    </div>

</div> <!-- END x-data wrapper -->