<!-- ✅ Preloader -->
<div id="preloader" class="fixed inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 flex flex-col items-center justify-center z-50 text-white">
    <!-- Logo -->
    <img src="/images/fullLogo (1).png" 
         alt="Loading..." 
         class="h-16 w-auto mb-8 animate-bounce">

    <!-- Pulse Loader -->
    <div class="flex space-x-2">
        <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
        <div class="w-3 h-3 bg-white rounded-full animate-pulse delay-150"></div>
        <div class="w-3 h-3 bg-white rounded-full animate-pulse delay-300"></div>
    </div>
</div>

<script>
  // 🕒 Fade out preloader smoothly when page loads
  window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    preloader.style.opacity = '0';
    setTimeout(() => preloader.style.display = 'none', 800);
  });
</script>
