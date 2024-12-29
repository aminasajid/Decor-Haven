<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="logo text-3xl">Décor Haven</span>
      </a>
    </div>

    <!-- Mobile menu button -->
    <div class="flex lg:hidden">
      <button id="mobile-menu-button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>

    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>

  <!-- Mobile Menu (Hidden by default) -->
  <div id="mobile-menu" class="lg:hidden hidden fixed inset-0 z-10 bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
    <div class="flex items-center justify-between">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="logo text-xl">Décor Haven</span>
      </a>
      <button id="close-menu-button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Close menu</span>
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu Links -->
    <div class="mt-6 flow-root">
      <div class="-my-6 divide-y divide-gray-500/10">
        <div class="py-6">
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="line border-b border-custom-red/30"></div>

<script>
  // Handle opening and closing the mobile menu
document.getElementById('mobile-menu-button').addEventListener('click', () => {
  document.getElementById('mobile-menu').classList.remove('hidden');
});

document.getElementById('close-menu-button').addEventListener('click', () => {
  document.getElementById('mobile-menu').classList.add('hidden');
});

</script>