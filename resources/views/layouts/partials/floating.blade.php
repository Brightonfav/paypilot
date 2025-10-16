<!-- ✅ Floating Contact + Scroll-to-top -->
<div x-data="{ openContact:false, showTop:false }"
     x-init="window.addEventListener('scroll', () => showTop = window.scrollY > 200)"
     class="pointer-events-none">

  <!-- CONTACT MENU -->
  <div class="fixed bottom-20 left-6 flex flex-col items-center z-50 pointer-events-auto" @click.away="openContact = false">

    <!-- Social icons -->
    <div class="flex flex-col items-center mb-3 space-y-3">
      <!-- WhatsApp -->
      <a x-show="openContact"
         x-transition:enter="transition transform ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-0 translate-y-8"
         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
         x-transition:leave="transition transform ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
         x-transition:leave-end="opacity-0 scale-0 translate-y-8"
         href="https://wa.me/234XXXXXXXXXX" target="_blank"
         class="w-12 h-12 rounded-full bg-green-500 hover:bg-green-600 flex items-center justify-center shadow-lg transition transform hover:scale-110"
         aria-label="WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path d="M21 12a9 9 0 11-3.6-7.2L21 3l-2.4 5.8A9 9 0 0121 12z"/>
        </svg>
      </a>

      <!-- Instagram -->
      <a x-show="openContact"
         x-transition:enter="transition transform ease-out duration-400"
         x-transition:enter-start="opacity-0 scale-0 translate-y-8"
         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
         x-transition:leave="transition transform ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
         x-transition:leave-end="opacity-0 scale-0 translate-y-8"
         href="https://instagram.com/yourprofile" target="_blank"
         class="w-12 h-12 rounded-full bg-pink-500 hover:bg-pink-600 flex items-center justify-center shadow-lg transition transform hover:scale-110"
         aria-label="Instagram">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
        </svg>
      </a>

      <!-- Facebook -->
      <a x-show="openContact"
         x-transition:enter="transition transform ease-out duration-500"
         x-transition:enter-start="opacity-0 scale-0 translate-y-8"
         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
         x-transition:leave="transition transform ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
         x-transition:leave-end="opacity-0 scale-0 translate-y-8"
         href="https://facebook.com/yourpage" target="_blank"
         class="w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-700 flex items-center justify-center shadow-lg transition transform hover:scale-110"
         aria-label="Facebook">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path d="M18 2h-3a4 4 0 00-4 4v3H8v4h3v9h4v-9h3l1-4h-4V6a1 1 0 011-1h3z"/>
        </svg>
      </a>
    </div>

    <!-- Toggle button -->
    <button @click="openContact = !openContact"
            :class="openContact ? 'bg-white text-indigo-600 shadow-xl' : 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg'"
            class="w-14 h-14 rounded-full flex items-center justify-center transition-transform transform hover:scale-105 focus:outline-none">
      
      <svg x-show="!openContact" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path d="M21 15a2 2 0 01-2 2h-4l-4 4v-4H7a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z"/>
      </svg>

      <svg x-show="openContact" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>

  <!-- SCROLL TO TOP -->
  <div class="fixed bottom-20 right-6 z-50 pointer-events-auto">
    <button x-show="showTop"
            x-transition:enter="transition transform ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 scale-90"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition transform ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 scale-90"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="bg-indigo-600 text-white p-3 rounded-full shadow-lg hover:bg-indigo-700 transition focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path d="M5 15l7-7 7 7"/>
      </svg>
    </button>
  </div>
</div>
