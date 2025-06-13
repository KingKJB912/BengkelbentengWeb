<nav id="mainNavbar" class="fixed top-0 left-0 right-0 z-50 transition-colors duration-300 ease-in-out bg-gradient-to-r from-blue-900 via-yellow-400 to-red-700 shadow-lg">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-2xl font-bold text-yellow-400 font-poppins drop-shadow-lg">
            <span class="text-white">Bengkel</span> <span class="text-yellow-400">Beteng Betawi</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('home') }}" class="text-white hover:text-yellow-400 font-semibold transition duration-300 ease-in-out">Beranda</a>
            <a href="{{ route('services') }}" class="text-white hover:text-yellow-400 font-semibold transition duration-300 ease-in-out">Layanan</a>
            <a href="{{ route('booking') }}" class="text-white hover:text-yellow-400 font-semibold transition duration-300 ease-in-out">Booking</a>
            <a href="{{ route('gallery') }}" class="text-white hover:text-yellow-400 font-semibold transition duration-300 ease-in-out">Galeri</a>
            <a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 font-semibold transition duration-300 ease-in-out">Kontak</a>
            <a href="{{ route('booking') }}" class="bg-yellow-400 text-red-700 px-6 py-3 rounded-lg font-semibold shadow hover:bg-white hover:text-red-700 transition duration-300">Booking Sekarang</a>
        </div>

        <!-- Mobile Toggle Button -->
        <button id="mobileToggle" class="md:hidden text-yellow-400 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-4 6h4"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-gradient-to-b from-blue-900 via-yellow-400 to-red-700 px-4 py-4 space-y-4 shadow-lg">
        <a href="{{ route('home') }}" class="block text-white hover:text-yellow-400 font-medium transition duration-300 ease-in-out">Beranda</a>
        <a href="{{ route('services') }}" class="block text-white hover:text-yellow-400 font-medium transition duration-300 ease-in-out">Layanan</a>
        <a href="{{ route('booking') }}" class="block text-white hover:text-yellow-400 font-medium transition duration-300 ease-in-out">Booking</a>
        <a href="{{ route('gallery') }}" class="block text-white hover:text-yellow-400 font-medium transition duration-300 ease-in-out">Galeri</a>
        <a href="{{ route('contact') }}" class="block text-white hover:text-yellow-400 font-medium transition duration-300 ease-in-out">Kontak</a>
        <a href="{{ route('booking') }}" class="block bg-yellow-400 text-red-700 px-4 py-2 rounded-md font-semibold text-center shadow hover:bg-white hover:text-red-700 transition-colors duration-300">Booking Sekarang</a>
    </div>
</nav>

<script>
    // Scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('mainNavbar');
        const scrollThreshold = 50; // Adjust as needed

        if (window.scrollY > scrollThreshold) {
            navbar.classList.add('bg-white', 'shadow-md');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-white', 'shadow-md');
            navbar.classList.add('bg-transparent');
        }
    });

    // Toggle mobile menu
    const mobileToggle = document.getElementById('mobileToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when a link is clicked (optional)
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
    });
</script>