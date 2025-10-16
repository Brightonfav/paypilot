 <!-- ✅ Footer -->
<footer class="bg-gray-900 text-gray-300 py-10 mt-16">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10">
    
    <!-- Logo + About -->
    <div>
      <div class="flex items-center space-x-2 mb-3">
        <img src="/images/fullLogo (1).png" alt="Logo" class="h-10 w-auto">
        <span class="font-semibold text-lg text-white">Afriportal</span>
      </div>
      <p class="text-sm text-gray-400">
        Empowering businesses across Africa with smart digital solutions that connect, grow, and inspire.
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h3 class="text-white font-semibold mb-3">Quick Links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="/" class="hover:text-indigo-400 transition">Home</a></li>
        <li><a href="/about" class="hover:text-indigo-400 transition">About</a></li>
        <li><a href="/services" class="hover:text-indigo-400 transition">Services</a></li>
        <li><a href="/contact" class="hover:text-indigo-400 transition">Contact</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div>
      <h3 class="text-white font-semibold mb-3">Resources</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-indigo-400 transition">Blog</a></li>
        <li><a href="#" class="hover:text-indigo-400 transition">Help Center</a></li>
        <li><a href="#" class="hover:text-indigo-400 transition">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-indigo-400 transition">Terms of Service</a></li>
      </ul>
    </div>

    <!-- Newsletter -->
    <div>
      <h3 class="text-white font-semibold mb-3">Stay Updated</h3>
      <form class="flex items-center space-x-2">
        <input type="email" placeholder="Your email" class="w-full px-3 py-2 rounded-md bg-gray-800 border border-gray-700 text-white focus:ring-2 focus:ring-indigo-500 outline-none">
        <button type="submit" class="bg-indigo-600 px-4 py-2 rounded-md text-white hover:bg-indigo-700 transition">→</button>
      </form>
    </div>
  </div>

  <!-- Bottom -->
  <div class="border-t border-gray-800 mt-10 pt-5 text-center text-sm text-gray-500">
    © {{ date('Y') }} Afriportal Network Ltd. All rights reserved.
  </div>
</footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
    
    <script>
    window.addEventListener("load", function() {
        const preloader = document.getElementById("preloader");

        setTimeout(() => {
            preloader.style.transition = "opacity 1s ease";
            preloader.style.opacity = "0";
            setTimeout(() => {
                preloader.style.display = "none";
            }, 1000); 
        }, 3000); // Show for 3 seconds
    });
</script>
<!-- ✅ Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- ✅ AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<!-- ✅ Your custom page JS (home.js etc.) -->
<!-- @vite(['resources/js/home.js']) -->

