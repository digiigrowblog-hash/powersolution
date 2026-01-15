<?php

$products = [
  [
    'id' => 1,
    'name' => 'Microtek Inverter',
    'category' => 'Inverter',
    'description' => 'High performance tubular battery designed for long backup and durability.',
    "image" => "/images/MI/MI.webp",
    'warranty' => '24 Months',
  ],
  [
    'id' => 2,
    'name' => 'Solar Deep Cycle Battery',
    'category' => 'Battery',
    'description' => 'Deep cycle battery optimized for solar energy storage solutions.',
    "image" => "/images/IB/IB7.webp",
    'warranty' => '24 Months',
  ],
  [
    'id' => 3,
    'name' => 'Industrial UPS and Online UPS',
    'category' => 'UPS',
    'description' => 'Reliable power backup for industrial and enterprise applications.',
    "image" => "/images/OUPS/UPS.webp",
    'warranty' => '24 Months',
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
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
          <div class="inline-flex items-center space-x-2 bg-nucleusTeal/10 
           text-nucleusTeal sm:px-4 sm:py-2 px-2 py-1 rounded-full  font-bold">
            <i class="fa-solid fa-bolt text-sm sm:text-base"></i>
            <span class="text-sm sm:text-base">NEXT GENERATION ENERGY STORAGE</span>
          </div>

          <h1 class="text-2xl md:text-7xl font-extrabold text-nucleusBlue leading-tight">
            Empowering
            <span class="text-transparent bg-clip-text 
          bg-gradient-to-r from-nucleusTeal via-nucleusOrange to-nucleusPink">
              Your World
            </span>
            with Precision
          </h1>

          <p class="text-xl text-gray-600 max-w-lg">
            Nucleus Power Solutions provides high-performance battery technology engineered
            for the toughest environments.
          </p>

          <div class="flex gap-4">
            <a href="/pages/product.php" class="bg-nucleusTeal text-white md:px-8 md:py-4 
               px-4 py-2 rounded-xl font-bold shadow-xl 
               hover:bg-nucleusBlue transition flex items-center gap-2">
              Explore Products <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="/pages/aboutUs.php" class="bg-white border md:px-8 md:py-4 px-4 py-2 rounded-xl font-bold hover:bg-gray-50">
              Learn More
            </a>
          </div>

          <div class="flex items-center md:gap-8 gap-4 pt-6">
            <div>
              <p class="text-3xl font-bold text-nucleusBlue">7+</p>
              <p class="text-sm text-gray-500">Years Experience</p>
            </div>
            <div class="w-px h-10 bg-gray-200"></div>
            <div>
              <p class="text-3xl font-bold text-nucleusBlue">10k+</p>
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
          <img src="images/home.jpeg" class="rounded-3xl shadow-2xl w-full w-96 object-cover" alt="home image">
          <div class="absolute -top-3 -right-6 bg-white p-4 rounded-2xl shadow-xl hidden md:block">
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
        <a href="/pages/product.php" class="hidden md:flex items-center text-nucleusTeal font-bold border-b-2">
          All Products <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <?php foreach ($products as $product): ?>
          <div class="bg-white rounded-3xl overflow-hidden shadow hover:shadow-2xl transition border flex flex-col">
            <img src="<?= $product['image']; ?>" class=" w-full object-cover" alt="">
            <div class="p-8 flex flex-col grow">
              <span class="text-xs font-bold uppercase text-nucleusBlue"><?= $product['category']; ?></span>
              <h4 class="text-xl font-bold text-nucleusBlue mt-2"><?= $product['name']; ?></h4>
              <p class="text-gray-500 text-sm mt-2 grow"><?= $product['description']; ?></p>
              <div class="flex justify-between items-center mt-6">
                <span class="text-xs font-bold text-nucleusPink uppercase">
                  <?= $product['warranty']; ?> Warranty
                </span>
                <a href="/pages/contactUs.php" class="p-2 bg-gray-50 rounded-full hover:bg-nucleusTeal hover:text-white">
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- why choose nucleus -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <h3 class="text-4xl font-bold text-nucleusBlue text-center">
        Why Choose Nucleus Power?
      </h3>

      <div class="grid md:grid-cols-4 gap-8 mt-12">
        <div class="text-center">
          <i class="fa-solid fa-battery-full text-4xl text-nucleusTeal"></i>
          <h4 class="font-bold mt-4">High Backup</h4>
          <p class="text-sm text-gray-500 mt-2">
            Designed for long-lasting power and deep discharge cycles.
          </p>
        </div>

        <div class="text-center">
          <i class="fa-solid fa-industry text-4xl text-nucleusOrange"></i>
          <h4 class="font-bold mt-4">Industrial Grade</h4>
          <p class="text-sm text-gray-500 mt-2">
            Built for demanding environments and heavy usage.
          </p>
        </div>

        <div class="text-center">
          <i class="fa-solid fa-shield text-4xl text-nucleusPink"></i>
          <h4 class="font-bold mt-4">Certified Safety</h4>
          <p class="text-sm text-gray-500 mt-2">
            ISO-compliant manufacturing & strict quality checks.
          </p>
        </div>

        <div class="text-center">
          <i class="fa-solid fa-headset text-4xl text-nucleusBlue"></i>
          <h4 class="font-bold mt-4">After-Sales Support</h4>
          <p class="text-sm text-gray-500 mt-2">
            Reliable service network and quick response support.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials / Trust Section (Huge credibility boost) -->
  <section class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h3 class="text-4xl font-bold text-nucleusBlue">
        Trusted by Customers
      </h3>

      <div class="grid md:grid-cols-2 gap-8 mt-12">
        <div class="p-8 border rounded-2xl">
          <p class="text-gray-600">
            “Excellent backup time and very reliable performance.
            Highly recommended for solar installations.”
          </p>
          <p class="mt-4 font-bold">— Solar Installer, Gujarat</p>
        </div>

        <div class="p-8 border rounded-2xl">
          <p class="text-gray-600">
            “Using Nucleus batteries for industrial UPS systems
            with zero complaints so far.”
          </p>
          <p class="mt-4 font-bold">— Factory Manager</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-24 bg-nucleusBlue text-white text-center">
    <h3 class="text-4xl font-bold">
      Looking for the Right Battery Solution?
    </h3>
    <p class="mt-4 text-gray-300">
      Talk to our experts and get the best power solution for your needs.
    </p>
    <a href="tel:9076262727"
      class="inline-block mt-8 bg-nucleusTeal px-6 py-3 rounded-xl font-bold hover:bg-nucleusOrange">
      Call Now
    </a>
  </section>

  <?php include __DIR__ . '/component/footer.php'; ?>

</body>

</html>