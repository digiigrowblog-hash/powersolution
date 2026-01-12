<?php
// index.php

$products = [
  [
    'id' => 1,
    'name' => 'Tubular Inverter Battery',
    'category' => 'Inverter',
    'description' => 'High performance tubular battery designed for long backup and durability.',
    'image' => 'images/battery1.jpg',
    'warranty' => '60 Months',
  ],
  [
    'id' => 2,
    'name' => 'Solar Deep Cycle Battery',
    'category' => 'Solar',
    'description' => 'Deep cycle battery optimized for solar energy storage solutions.',
    'image' => 'images/battery2.jpg',
    'warranty' => '48 Months',
  ],
  [
    'id' => 3,
    'name' => 'Industrial UPS Battery',
    'category' => 'UPS',
    'description' => 'Reliable power backup for industrial and enterprise applications.',
    'image' => 'images/battery3.jpg',
    'warranty' => '36 Months',
  ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nucleus Power Solutions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Colors -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            nucleusBlue: '#1e293b',
            nucleusTeal: '#0d9488',
            nucleusOrange: '#f97316',
            nucleusPink: '#db2777',
          }
        }
      }
    }
  </script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  />
</head>

<body class="font-sans text-gray-800">

<?php include __DIR__ . '/component/header.php'; ?>

<!-- HERO -->
<section class="relative min-h-[85vh] flex items-center overflow-hidden pt-3">
  <div class="absolute top-0 right-0 w-2/3 h-full bg-nucleusBlue/5 -skew-x-12 origin-top-right -z-10"></div>
  <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-nucleusTeal/10 rounded-full blur-3xl -z-10"></div>

  <div class="max-w-7xl mx-auto px-6 w-full">
    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <div class="space-y-8">
        <div class="inline-flex items-center space-x-2 bg-nucleusTeal/10 text-nucleusTeal px-4 py-2 rounded-full text-sm font-bold">
          <i class="fa-solid fa-bolt"></i>
          <span>NEXT GENERATION ENERGY STORAGE</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold text-nucleusBlue leading-tight">
          Empowering
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-nucleusTeal via-nucleusOrange to-nucleusPink">
            Your World
          </span>
          with Precision
        </h1>

        <p class="text-xl text-gray-600 max-w-lg">
          Nucleus Power Solutions provides high-performance battery technology engineered
          for the toughest environments.
        </p>

        <div class="flex gap-4">
          <a href="products.php"
             class="bg-nucleusTeal text-white px-8 py-4 rounded-xl font-bold shadow-xl hover:bg-nucleusBlue transition flex items-center gap-2">
            Explore Products <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="aboutus.php"
             class="bg-white border px-8 py-4 rounded-xl font-bold hover:bg-gray-50">
            Learn More
          </a>
        </div>

        <div class="flex items-center gap-8 pt-6">
          <div>
            <p class="text-3xl font-bold text-nucleusBlue">15+</p>
            <p class="text-sm text-gray-500">Years Experience</p>
          </div>
          <div class="w-px h-10 bg-gray-200"></div>
          <div>
            <p class="text-3xl font-bold text-nucleusBlue">500k+</p>
            <p class="text-sm text-gray-500">Batteries Sold</p>
          </div>
          <div class="w-px h-10 bg-gray-200"></div>
          <div>
            <p class="text-3xl font-bold text-nucleusBlue">24/7</p>
            <p class="text-sm text-gray-500">Support Center</p>
          </div>
        </div>
      </div>

      <div class="relative">
        <img src="images/nature.avif" class="rounded-3xl shadow-2xl w-full" alt="">
        <div class="absolute -bottom-10 -right-10 bg-white p-6 rounded-2xl shadow-xl hidden md:block">
          <div class="flex items-center gap-3 mb-2">
            <i class="fa-solid fa-shield-halved text-green-600 text-xl"></i>
            <span class="font-bold text-nucleusBlue">Certified Safe</span>
          </div>
          <p class="text-xs text-gray-500">
            ISO 9001 certified for performance and safety.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PRODUCTS -->
<section class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex justify-between items-end mb-12">
      <div>
        <p class="text-nucleusTeal font-bold uppercase text-sm">Quick Peek</p>
        <h3 class="text-4xl font-bold text-nucleusBlue">Bestselling Products</h3>
      </div>
      <a href="products.php" class="hidden md:flex items-center text-nucleusTeal font-bold border-b-2">
        All Products <i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach ($products as $product): ?>
        <div class="bg-white rounded-3xl overflow-hidden shadow hover:shadow-2xl transition border flex flex-col">
          <img src="<?= $product['image']; ?>" class="h-48 w-full object-cover" alt="">
          <div class="p-8 flex flex-col grow">
            <span class="text-xs font-bold uppercase text-nucleusBlue"><?= $product['category']; ?></span>
            <h4 class="text-xl font-bold text-nucleusBlue mt-2"><?= $product['name']; ?></h4>
            <p class="text-gray-500 text-sm mt-2 grow"><?= $product['description']; ?></p>
            <div class="flex justify-between items-center mt-6">
              <span class="text-xs font-bold text-nucleusPink uppercase">
                <?= $product['warranty']; ?> Warranty
              </span>
              <a href="contactus.php" class="p-2 bg-gray-50 rounded-full hover:bg-nucleusTeal hover:text-white">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white text-center">
  <h3 class="text-3xl font-bold text-nucleusBlue">Stay Powered Up</h3>
  <p class="text-gray-500 mt-2">Join our newsletter for updates.</p>
  <form class="mt-6 flex justify-center gap-4 flex-wrap">
    <input type="email" placeholder="Your email"
           class="px-6 py-4 rounded-xl border bg-gray-50 focus:ring-2 focus:ring-nucleusTeal">
    <button class="bg-nucleusBlue text-white px-8 py-4 rounded-xl font-bold hover:bg-black">
      Subscribe
    </button>
  </form>
</section>

<?php include __DIR__ . '/component/footer.php'; ?>

</body>
</html>
