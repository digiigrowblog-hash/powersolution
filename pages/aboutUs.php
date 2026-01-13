<?php
// pages/aboutUs.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us | Nucleus Power Solutions</title>
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
            nucleusOrange: '#f97316',
            nucleusPink: '#db2777',
          },
          animation: {
            fadeUp: 'fadeUp 0.8s ease-out both',
            float: 'float 6s ease-in-out infinite',
          },
          keyframes: {
            fadeUp: {
              '0%': { opacity: 0, transform: 'translateY(30px)' },
              '100%': { opacity: 1, transform: 'translateY(0)' },
            },
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-12px)' },
            }
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
<section class="relative bg-nucleusBlue py-28 overflow-hidden">
  <div class="absolute -top-24 -right-24 w-96 h-96 bg-nucleusTeal/20 rounded-full blur-3xl overflow-hidden"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-nucleusPink/10 rounded-full blur-3xl"></div>

  <div class="max-w-5xl mx-auto px-6 text-center relative z-10 animate-fadeUp">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
      About Nucleus Power Solutions
    </h1>
    <p class="text-gray-300 text-lg max-w-3xl mx-auto">
      Engineering reliable energy systems that power homes, businesses, and industries with confidence.
    </p>
  </div>
</section>

<!-- INTRO -->
<section class="py-20">
  <div class="max-w-5xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center ">
    
    <div class="animate-fadeUp">
      <h2 class="text-3xl font-bold text-nucleusBlue mb-6">
        Powering Progress Since Day One
      </h2>
      <p class="text-gray-600 text-lg leading-relaxed mb-6">
        Established in the year 2019 at Navi Mumbai, Maharashtra. We 
        <span class="font-semibold text-nucleusBlue"> Nucleus Power Solutions</span> are a
        Proprietorship based firm,has grown into a trusted provider of advanced 
        energy storage and conversion systems.
      </p>
      <p class="text-gray-600 leading-relaxed">
       We " Nucleus Power Solution” are a Proprietorship based firm, engaged as the foremost Wholesaler, 
       Trader and Supplier Of Microtek Online UPS, Delta Online UPS, Somotec Online UPS, Amaron Qunta SMF 
       Battery etc.
      </p>
    </div>

    <div class="relative animate-float overflow-hidden rounded-2xl">
      <img
        src="../images/aboutus.jpeg"
        alt="Energy Infrastructure"
        class="rounded-2xl shadow-2xl border border-gray-100"
      />
      <div class="absolute z-10 lg:top-8 lg:right-6 md:top-16 md:right-16 sm:top-top-20 sm:right-20 top-10 right-6 
      bg-white sm:p-5 p-1.5 rounded-2xl shadow-xl flex items-center sm:space-x-3 space-x-2">
        <i class="fa-solid fa-bolt text-nucleusTeal text-2xl"></i>
        <div>
          <p class="text-xs uppercase text-gray-400 font-bold">Trusted By</p>
          <p class="text-sm sm:text-base font-bold text-nucleusBlue">10000+ Customers</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- VALUES -->
<section class="py-20 bg-gray-50 overflow-hidden">
  <div class="max-w-6xl mx-auto px-6 text-center mb-16">
    <h2 class="text-3xl font-bold text-nucleusBlue mb-4">What Drives Us</h2>
    <p class="text-gray-500 max-w-2xl mx-auto">
      Our philosophy is built around reliability, innovation, and customer trust.
    </p>
  </div>

  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 overflow-hidden">

    <div class="bg-white p-10 rounded-3xl shadow-xl text-center animate-fadeUp">
      <i class="fa-solid fa-bullseye text-nucleusOrange text-4xl mb-6"></i>
      <h3 class="text-xl font-bold mb-4">Our Mission</h3>
      <p class="text-gray-600">
        Deliver sustainable, reliable, and affordable power solutions nationwide.
      </p>
    </div>

    <div class="bg-white p-10 rounded-3xl shadow-xl text-center animate-fadeUp">
      <i class="fa-solid fa-shield-halved text-nucleusTeal text-4xl mb-6"></i>
      <h3 class="text-xl font-bold mb-4">Unmatched Quality</h3>
      <p class="text-gray-600">
        15+ rigorous quality checks ensure superior performance and safety.
      </p>
    </div>

    <div class="bg-white p-10 rounded-3xl shadow-xl text-center animate-fadeUp">
      <i class="fa-solid fa-gear text-nucleusPink text-4xl mb-6"></i>
      <h3 class="text-xl font-bold mb-4">Engineering Excellence</h3>
      <p class="text-gray-600">
        Designed by experts to meet modern energy demands with precision.
      </p>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="py-24 bg-nucleusBlue text-center relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-tr from-nucleusTeal/20 to-nucleusOrange/10"></div>

  <div class="relative z-10 max-w-4xl mx-auto px-6 animate-fadeUp">
    <h2 class="text-4xl font-bold text-white mb-6">
      Let’s Power the Future Together
    </h2>
    <p class="text-gray-300 mb-10">
      Talk to our experts and find the right power solution tailored to your needs.
    </p>
    <a
      href="contactUs.php"
      class="inline-block bg-white text-nucleusBlue px-10 py-4 rounded-xl font-bold hover:bg-nucleusTeal hover:text-white transition-all shadow-xl"
    >
      Contact Our Team
    </a>
  </div>
</section>

<?php include __DIR__ . '/../component/footer.php'; ?>

</body>
</html>
