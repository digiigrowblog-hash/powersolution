<?php
// pages/product.php

/* ---------------- PRODUCT DATA ---------------- */
$products = [
  [
    'id' => 'nps-auto-gold',
    'name' => 'Nucleus Gold Automotive 60Ah',
    'category' => 'Automotive',
    'description' => 'High-performance battery designed for passenger vehicles with modern electronics.',
    'specs' => [
      'Voltage' => '12V',
      'Capacity' => '60Ah',
      'Warranty' => '48 Months',
      'CCA' => '540A'
    ],
    'image' => '../images/nature.avif',
    'features' => ['Maintenance Free', 'Vibration Resistant', 'High Cold Cranking Amps']
  ],
  [
    'id' => 'nps-solar-deep',
    'name' => 'Nucleus Solar-Max Tubular 150Ah',
    'category' => 'Solar',
    'description' => 'Designed for deep cycle applications and long-lasting solar backup solutions.',
    'specs' => [
      'Voltage' => '12V',
      'Capacity' => '150Ah',
      'Warranty' => '60 Months',
      'Cycles' => '1500+ @ 80% DOD'
    ],
    'image' => '../images/nature.avif',
    'features' => ['Low Water Loss', 'Excellent Recovery', 'Ultra Deep Cycle']
  ],
  [
    'id' => 'nps-ind-traction',
    'name' => 'Industrial Heavy Duty Traction',
    'category' => 'Industrial',
    'description' => 'Reliable power for forklifts and industrial material handling equipment.',
    'specs' => [
      'Voltage' => '24V - 80V Options',
      'Capacity' => 'Up to 1200Ah',
      'Warranty' => '24 Months'
    ],
    'image' => '../images/nature.avif',
    'features' => ['Robust Plate Design', 'Optimized Performance', 'Shock Resistant']
  ],
  [
    'id' => 'nps-ups-premium',
    'name' => 'Premium UPS Pro VRLA',
    'category' => 'UPS/Inverter',
    'description' => 'Critical backup power for data centers and commercial offices.',
    'specs' => [
      'Voltage' => '12V',
      'Capacity' => '7Ah - 100Ah',
      'Design Life' => '10 Years'
    ],
    'image' => '../images/nature.avif',
    'features' => ['Leak Proof', 'High Discharge Rate', 'Compact Design']
  ]
];

$categories = ['All', 'Automotive', 'Solar', 'Industrial', 'UPS/Inverter'];

$search   = $_GET['search'] ?? '';
$category = $_GET['category'] ?? 'All';

/* ---------------- FILTER LOGIC ---------------- */
$filteredProducts = array_filter($products, function ($p) use ($search, $category) {
  $matchCategory = ($category === 'All' || $p['category'] === $category);
  $matchSearch =
    stripos($p['name'], $search) !== false ||
    stripos($p['description'], $search) !== false;

  return $matchCategory && $matchSearch;
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Products | Nucleus Power Solutions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            nucleusBlue: '#1e293b',
            nucleusTeal: '#0d9488',
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

<body class="bg-zinc-50 font-sans">

<?php include __DIR__ . '/../component/header.php'; ?>

<!-- HERO -->
<section class="bg-nucleusBlue py-20 text-center">
  <h1 class="text-5xl font-bold text-white mb-6">Our Product Range</h1>
  <p class="text-gray-400 max-w-2xl mx-auto text-lg">
    High-efficiency power storage solutions tailored for every segment.
  </p>
</section>

<div class="max-w-7xl mx-auto px-6 -mt-8 pb-24">

  <!-- FILTER BAR -->
  <form method="GET"
    class="bg-white rounded-2xl shadow-xl border p-6 flex flex-col md:flex-row gap-6 items-center justify-between mb-12">

    <div class="relative w-full md:w-96">
      <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
      <input
        type="text"
        name="search"
        value="<?= htmlspecialchars($search) ?>"
        placeholder="Search products..."
        class="w-full pl-12 pr-4 py-3 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-nucleusTeal">
    </div>

    <div class="flex flex-wrap gap-2">
      <?php foreach ($categories as $cat): ?>
        <button
          type="submit"
          name="category"
          value="<?= $cat ?>"
          class="px-5 py-2 rounded-full text-sm font-bold
          <?= $category === $cat ? 'bg-nucleusTeal text-white' : 'bg-gray-100 text-gray-500'; ?>">
          <?= $cat ?>
        </button>
      <?php endforeach; ?>
    </div>

  </form>

  <!-- PRODUCT GRID -->
  <div class="grid md:grid-cols-2 gap-12">
    <?php if ($filteredProducts): ?>
      <?php foreach ($filteredProducts as $product): ?>
        <div class="bg-white rounded-[2rem] border overflow-hidden flex flex-col md:flex-row hover:shadow-2xl transition">
          
          <div class="md:w-2/5">
            <img src="<?= $product['image']; ?>" class="w-full h-full object-cover" alt="">
          </div>

          <div class="p-8 md:w-3/5 flex flex-col justify-between">
            <div>
              <h3 class="text-2xl font-bold text-nucleusBlue mb-3"><?= $product['name']; ?></h3>
              <p class="text-gray-500 text-sm mb-6"><?= $product['description']; ?></p>

              <h4 class="text-xs font-bold uppercase text-nucleusPink mb-4">
                <i class="fa-solid fa-battery-full mr-2"></i> Technical Specifications
              </h4>

              <div class="grid grid-cols-2 gap-4 mb-6">
                <?php foreach ($product['specs'] as $label => $value): ?>
                  <div>
                    <p class="text-[10px] text-gray-400 uppercase"><?= $label; ?></p>
                    <p class="text-sm font-semibold"><?= $value; ?></p>
                  </div>
                <?php endforeach; ?>
              </div>

              <?php foreach ($product['features'] as $feat): ?>
                <div class="flex items-center text-xs text-gray-600 mb-2">
                  <i class="fa-solid fa-circle-check text-nucleusTeal mr-2"></i>
                  <?= $feat; ?>
                </div>
              <?php endforeach; ?>
            </div>

            <a href="contactUs.php"
              class="mt-6 bg-gray-50 text-nucleusBlue font-bold py-4 rounded-2xl hover:bg-nucleusTeal hover:text-white text-center transition">
              Contact for Quote →
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-span-full text-center py-20">
        <i class="fa-solid fa-search text-4xl text-gray-300 mb-4"></i>
        <h3 class="text-2xl font-bold text-nucleusBlue">No products found</h3>
        <p class="text-gray-500">Try adjusting your filters or search.</p>
      </div>
    <?php endif; ?>
  </div>

</div>

<?php include __DIR__ . '/../component/footer.php'; ?>

</body>
</html>
