<?php

$currentPage = basename($_SERVER['PHP_SELF']); // detect active page

function isActive($page, $currentPage) {
  return $page === $currentPage ? 'text-teal-600 border-b-2 border-teal-500 pb-1' : 'text-gray-600';
}
?>

<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20 items-center">

      <!-- Logo -->
      <a href="index.php" class="flex items-center space-x-3 group">
        <div
          class="w-10 h-10 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 
          transition-transform"
        >
          <img
            src="/images/logo.png"
            alt="Nucleus Power Solutions Logo"
            class="w-7 h-7 object-contain"
          />
        </div>

        <div class="flex flex-col leading-none">
          <span class="text-xl font-bold text-[#1e293b] uppercase tracking-tight">
            Nucleus
          </span>
          <span class="text-[10px] font-bold text-pink-600 tracking-[0.2em] uppercase">
            Power Solutions
          </span>
        </div>
      </a>

      <!-- Desktop Nav -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="/index.php"
          class="text-sm font-semibold hover:text-teal-600 transition-colors <?= isActive('index.php', $currentPage); ?>">
          Home
        </a>
        <a href="/pages/product.php"
          class="text-sm font-semibold hover:text-teal-600 transition-colors <?= isActive('product.php', $currentPage); ?>">
          Products
        </a>
        <a href="/pages/aboutUs.php"
          class="text-sm font-semibold hover:text-teal-600 transition-colors <?= isActive('aboutUs.php', $currentPage); ?>">
          About Us
        </a>
        <a href="/pages/contactUs.php"
          class="text-sm font-semibold hover:text-teal-600 transition-colors <?= isActive('contactUs.php', $currentPage); ?>">
          Contact
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="mobile-menu-btn" class="text-gray-600 hover:text-teal-600">
          <i id="menu-open" class="fa-solid fa-bars text-2xl"></i>
          <i id="menu-close" class="fa-solid fa-xmark text-2xl hidden"></i>
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile Nav -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-100">
    <div class="px-4 pt-2 pb-6 space-y-1">
      <a href="/index.php"
        class="block px-3 py-4 text-base font-semibold rounded-md <?= isActive('index.php', $currentPage) ? 'bg-teal-500/10 text-teal-600' : 'text-gray-600 hover:bg-gray-50'; ?>">
        Home
      </a>
      <a href="/pages/product.php"
        class="block px-3 py-4 text-base font-semibold rounded-md <?= isActive('product.php', $currentPage) ? 'bg-teal-500/10 text-teal-600' : 'text-gray-600 hover:bg-gray-50'; ?>">
        Product
      </a>
      <a href="/pages/aboutUs.php"
        class="block px-3 py-4 text-base font-semibold rounded-md <?= isActive('aboutUs.php', $currentPage) ? 'bg-teal-500/10 text-teal-600' : 'text-gray-600 hover:bg-gray-50'; ?>">
        About Us
      </a>
      <a href="/pages/contactUs.php"
        class="block px-3 py-4 text-base font-semibold rounded-md <?= isActive('contactUs.php', $currentPage) ? 'bg-teal-500/10 text-teal-600' : 'text-gray-600 hover:bg-gray-50'; ?>">
        Contact
      </a>
    </div>
  </div>
</nav>

<!-- Mobile Menu Script -->
<script>
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const openIcon = document.getElementById('menu-open');
  const closeIcon = document.getElementById('menu-close');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    openIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
</script>
