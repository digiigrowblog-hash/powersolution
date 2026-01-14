<?php
/* ================= PRODUCT DATA ================= */
require_once __DIR__ . '/../data/data.php';

/* ================= NORMALIZE DATA ================= */
$products = [];
$categories = ['All'];

foreach ($data as $mainGroup) {
    foreach ($mainGroup as $categoryBlock) {

        $categoryName =
            $categoryBlock['product_name']
            ?? $categoryBlock['product_name']
            ?? 'General';

        if (!in_array($categoryName, $categories)) {
            $categories[] = $categoryName;
        }

        $subProducts =
            $categoryBlock['subProduct']
            ?? $categoryBlock['subProduct']
            ?? [];

        foreach ($subProducts as $sp) {

            // Extract specs dynamically
            $specs = $sp;
            unset(
                $specs['product_id'],
                $specs['product_name'],
                $specs['product_price'],
                $specs['image1'],
                $specs['image2']
            );

            $products[] = [
                'id' => $sp['product_id'] ?? uniqid(),
                'name' => $sp['product_name'] ?? 'Unnamed Product',
                'price' => $sp['product_price'] ?? '',
                'category' => $categoryName,
                'description' =>
                    $categoryBlock['product_detail']
                    ?? $categoryBlock['product_description']
                    ?? '',
                'specs' => $specs,
                'image' => $sp['image1'] ?? '../images/no-image.png',
                'features' => []
            ];
        }
    }
}

/* ================= FILTER INPUT ================= */
$search = $_GET['search'] ?? '';
$category = $_GET['category'] ?? 'All';

/* ================= FILTER LOGIC ================= */
$filteredProducts = array_filter($products, function ($p) use ($search, $category) {

    $matchCategory = ($category === 'All' || $p['category'] === $category);

    $matchSearch =
        $search === '' ||
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Search debounce -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let debounceTimer;
            const searchInput = document.getElementById('searchInput');

            if (!searchInput) return;

            searchInput.addEventListener('input', function () {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => {
                    this.form.submit();
                }, 400);
            });
        });
    </script>

    <!-- image light box -->

    <script>
function openImageModal(src) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');

    modalImg.src = src;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

// Close on ESC key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});

// Close when clicking outside image
document.getElementById('imageModal')?.addEventListener('click', function (e) {
    if (e.target === this) {
        closeImageModal();
    }
});
</script>

</head>

<!-- IMAGE PREVIEW MODAL -->
<div id="imageModal"
     class="fixed inset-0 bg-black/80 z-[9999] hidden items-center justify-center">

    <!-- Close button -->
    <button onclick="closeImageModal()"
        class="absolute top-6 right-6 text-white text-3xl hover:text-gray-300">
        &times;
    </button>

    <!-- Image -->
    <img id="modalImage"
         src=""
         class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain"
         alt="Product Image">
</div>


<body class="bg-zinc-50 font-sans">

    <?php include __DIR__ . '/../component/header.php'; ?>

    <!-- HERO -->
    <section class="bg-nucleusBlue py-20 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">Our Product Range</h1>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg">
            High-efficiency power storage solutions tailored for every segment.
        </p>
    </section>

    <div class="max-w-7xl mx-auto md:px-6 px-3 -mt-8 pb-24">

        <!-- FILTER BAR -->
        <form method="GET" class="bg-white rounded-2xl shadow-xl border p-6 flex flex-col md:flex-row gap-6 
            items-center justify-between mb-12">

            <!-- Preserve category on search -->
            <input type="hidden" name="category" value="<?= htmlspecialchars($category) ?>">

            <div class="relative w-full md:w-96">
                <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" name="search" id="searchInput" value="<?= htmlspecialchars($search) ?>"
                    placeholder="Search products..."
                    class="w-full pl-12 pr-4 py-3 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-nucleusTeal">
            </div>

            <div class="flex flex-wrap gap-2">
                <?php foreach ($categories as $cat): ?>
                    <button type="submit" name="category" value="<?= htmlspecialchars($cat) ?>" class="md:px-5 md:py-2 px-2 py-0.75 rounded-full sm:text-sm text-xs font-bold 
                    <?= $category === $cat
                        ? 'bg-nucleusTeal text-white'
                        : 'bg-gray-100 text-gray-500'; ?>">
                        <?= htmlspecialchars($cat) ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </form>

        <!-- PRODUCT GRID -->
        <div class="grid md:grid-cols-2 md:gap-12 gap-8">

            <?php if ($filteredProducts): ?>
                <?php foreach ($filteredProducts as $product): ?>

                    <div class="bg-white rounded-[2rem] border overflow-hidden flex flex-col 
                    md:flex-row hover:shadow-2xl transition">

                        <div class="md:w-2/5">
                            <!-- <img src="<?= htmlspecialchars($product['image']); ?>" 
                                class="w-full max-w-[200px] h-full object-cover"
                                alt="<?= htmlspecialchars($product['name']); ?>"> -->

                            <img src="<?= htmlspecialchars($product['image']); ?>"
                                alt="<?= htmlspecialchars($product['name']); ?>" 
                                onclick="openImageModal(this.src)" 
                                class=" md:w-[200px] w-full md:h-[200px] h-full object-cover cursor-pointer
                                 hover:scale-105 transition-transform duration-300">

                        </div>

                        <div class="md:p-8 p-4 md:w-3/5 flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl font-bold text-nucleusBlue mb-3">
                                    <?= htmlspecialchars($product['name']); ?>
                                </h3>

                                <p class="text-gray-500 text-sm mb-6">
                                    <?= htmlspecialchars($product['description']); ?>
                                </p>

                                <h4 class="text-xs font-bold uppercase text-nucleusPink mb-4">
                                    <i class="fa-solid fa-battery-full mr-2"></i>
                                    Technical Specifications
                                </h4>

                                <div class="grid grid-cols-2 gap-4 mb-6">
                                    <?php foreach ($product['specs'] as $label => $value): ?>
                                        <?php if ($value === '' || $value === null)
                                            continue; ?>
                                        <?php
                                        $prettyLabel = ucwords(str_replace('_', ' ', $label));
                                        ?>
                                        <div>
                                            <p class="text-[10px] text-gray-400 uppercase">
                                                <?= htmlspecialchars($prettyLabel); ?>
                                            </p>
                                            <p class="text-sm font-semibold">
                                                <?= htmlspecialchars($value); ?>
                                            </p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
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