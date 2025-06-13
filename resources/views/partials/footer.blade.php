{{-- resources/views/partials/footer.blade.php --}}

{{-- Footer Section --}}
<footer class="bg-gradient-to-r from-blue-900 via-yellow-400 to-red-700 text-white py-16 mt-16 border-t-4 border-yellow-400 font-open-sans shadow-2xl">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
      <!-- Tentang -->
      <div>
        <div class="flex items-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            {{-- Icon path --}}
            <path
              d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
          </svg>
          <span class="text-xl font-bold text-yellow-400 font-poppins">Bengkel <span class="text-white">Beteng Betawi</span></span>
        </div>
        <p class="mb-4 leading-relaxed">
          Bengkel kami menyediakan layanan servis dan perawatan mobil terbaik dengan teknisi profesional dan peralatan modern.
        </p>
        <p class="text-yellow-100">Jl. Pahlawan No. 123, Jakarta</p>
        <p class="text-yellow-100">Senin - Sabtu: 08.00 - 17.00</p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="text-yellow-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-yellow-400 hover:text-white"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-yellow-400 hover:text-white"><i class="fab fa-twitter"></i></a>
        </div>
      </div>

      <!-- Link Cepat -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4 font-poppins">Link Cepat</h3>
        <ul class="space-y-3">
          <li><a href="{{ route('home') }}" class="hover:text-yellow-400 transition-colors duration-300">Beranda</a></li>
          <li><a href="{{ route('services') }}" class="text-yellow-100 hover:text-yellow-400">Layanan</a></li>
          <li><a href="{{ route('about') }}" class="text-yellow-100 hover:text-yellow-400">Tentang Kami</a></li>
          <li><a href="{{ route('gallery') }}" class="text-yellow-100 hover:text-yellow-400">Galeri</a></li>
          <li><a href="{{ route('contact') }}" class="text-yellow-100 hover:text-yellow-400">Kontak</a></li>
        </ul>
      </div>

      <!-- Layanan -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4 font-poppins">Layanan</h3>
        <ul class="space-y-3">
          <li>Servis Berkala</li>
          <li>Tune-Up Mesin</li>
          <li>Ganti Oli & Filter</li>
          <li>Perbaikan Rem</li>
          <li>AC & Elektrikal</li>
        </ul>
      </div>

      <!-- Hubungi Kami -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4 font-poppins">Hubungi Kami</h3>
        <p class="text-yellow-100 mb-2">📞 0812-3456-7890</p>
        <p class="text-yellow-100 mb-4">✉️ info@betengbetawi.com</p>
        <form>
          {{-- Email subscription form --}}
          <input type="email" placeholder="Email Anda"
            class="w-full px-4 py-2 rounded bg-navy-blue text-white placeholder-yellow-200 focus:outline-none focus:ring-2 focus:ring-yellow-400">\
          <button type="submit"
            class="mt-3 w-full bg-yellow-400 text-red-700 px-4 py-2 rounded font-semibold hover:bg-white transition-colors duration-300 text-sm">Berlangganan</button>
        </form>
      </div>
    </div>

    <!-- Copyright -->
    <div class="mt-12 border-t border-yellow-400 pt-6 text-center text-sm text-yellow-100">
      &copy; {{ date('Y') }} Bengkel Beteng Betawi. All rights reserved.
    </div>
  </div>
</footer>
