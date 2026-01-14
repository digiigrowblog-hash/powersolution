<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | Nucleus Power</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  />

  <!-- Tailwind Custom Colors -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            nucleusBlue: '#1e293b',
            nucleusTeal: '#0d9488',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-zinc-50 font-sans">

<!-- HEADER (simple placeholder) -->
<?php include __DIR__ . '/../component/header.php'; ?>

<!-- HERO -->
<section class=" bg-nucleusBlue py-20 text-center">
   <!-- <div class="absolute -top-24 -right-24 w-96 h-48 bg-nucleusTeal/20 rounded-full blur-3xl"></div>
  <div class="absolute bottom-0 left-0 w-72 h-48 bg-nucleusPink/10 rounded-full blur-3xl"></div> -->

  <div class="max-w-4xl mx-auto px-6">
    <h1 class="text-5xl font-bold text-white mb-6">Let&apos;s Talk Power</h1>
    <p class="text-gray-300 text-lg">
      Have questions about our products or need a bulk quotation? 
      Our experts are ready to assist you.
    </p>
  </div>
</section>

<!-- CONTENT -->
<div class="max-w-7xl mx-auto px-6 -mt-12 pb-24">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    <!-- CONTACT INFO -->
    <div class="space-y-6">
      <div class="bg-white p-8 rounded-3xl shadow-xl border">
        <h3 class="text-xl font-bold text-nucleusBlue mb-8">Contact Information</h3>

        <div class="space-y-8">

          <div class="flex space-x-4">
            <div class="p-3 bg-nucleusTeal/10 rounded-xl text-nucleusTeal">
              <i class="fa-solid fa-phone fa-lg"></i>
            </div>
            <div>
              <p class="text-xs font-bold text-gray-400 uppercase">Call Support</p>
              <p class="text-lg font-bold text-nucleusBlue">+91 9076262727</p>
              <p class="text-sm text-gray-500">Mon–sun: 10:00 am - 8:00 pm</p>
            </div>
          </div>

          <div class="flex space-x-4">
            <div class="p-3 bg-amber-400/10 rounded-xl text-amber-500">
              <i class="fa-solid fa-envelope fa-lg"></i>
            </div>
            <div>
              <p class="text-xs font-bold text-gray-400 uppercase">Email Us</p>
              <p class="text-lg font-bold text-nucleusBlue">info@nucleuspower.com</p>
              <p class="text-sm text-gray-500">Response within 24h</p>
            </div>
          </div>

          <div class="flex space-x-4">
            <div class="p-3 bg-pink-500/10 rounded-xl text-pink-600">
              <i class="fa-solid fa-location-dot fa-lg"></i>
            </div>
            <div>
              
              
              <p class="text-xs font-bold text-gray-400 uppercase">Headquarters</p>
              <p class="text-lg font-bold text-nucleusBlue"> 1st Floor, 106, Plot No.18,</p>
              <p class="text-sm text-gray-500">
                Nilesh Chamber Annexe, Sector-19, Vashi, Navi Mumbai, Navi Mumbai, Thane-400703, Maharashtra, India
              </p>
            </div>
          </div>

        </div>
      </div>

      <div class="bg-nucleusTeal text-white p-8 rounded-3xl shadow-xl">
        <div class="flex items-center space-x-3 mb-4">
          <i class="fa-solid fa-clock"></i>
          <h4 class="font-bold">24/7 Support</h4>
        </div>
        <p class="text-white/80 text-sm mb-6">
           we provide localized support for major Inverter batteries and ONLINE UPS Products.
        </p>
        <div class="flex items-center space-x-2 text-xs uppercase font-bold">
          <i class="fa-solid fa-globe"></i>
          <span>Navi mumbai</span>
        </div>
      </div>
    </div>

    <!-- CONTACT FORM -->
    <div class="lg:col-span-2">
      <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border">
        <div class="flex items-center space-x-3 mb-8">
          <i class="fa-solid fa-message text-nucleusTeal"></i>
          <h2 class="text-2xl font-bold text-nucleusBlue">Send a Message</h2>
        </div>

        <form action="submit-contact.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <div>
            <label class="text-sm font-bold text-gray-600">Full Name</label>
            <input type="text" name="name" required
              class="w-full px-5 py-4 rounded-xl bg-gray-50 border focus:ring-2 focus:ring-nucleusTeal">
          </div>

          <div>
            <label class="text-sm font-bold text-gray-600">Email Address</label>
            <input type="email" name="email" required
              class="w-full px-5 py-4 rounded-xl bg-gray-50 border focus:ring-2 focus:ring-nucleusTeal">
          </div>

          <div>
            <label class="text-sm font-bold text-gray-600">Subject</label>
            <select name="subject"
              class="w-full px-5 py-4 rounded-xl bg-gray-50 border focus:ring-2 focus:ring-nucleusTeal">
              <option>General Inquiry</option>
              <option>Product Quotation</option>
              <option>Buy Product</option>
              <option>Dealership Inquiry</option>
            </select>
          </div>

          <div>
            <label class="text-sm font-bold text-gray-600">Phone Number</label>
            <input type="tel" name="phone"
              class="w-full px-5 py-4 rounded-xl bg-gray-50 border focus:ring-2 focus:ring-nucleusTeal">
          </div>

          <div class="md:col-span-2">
            <label class="text-sm font-bold text-gray-600">Your Message</label>
            <textarea name="message" rows="5" required
              class="w-full px-5 py-4 rounded-xl bg-gray-50 border focus:ring-2 focus:ring-nucleusTeal"></textarea>
          </div>

          <div class="md:col-span-2">
            <button
              class="w-full bg-nucleusBlue text-white py-5 rounded-2xl font-bold hover:bg-black transition">
              Submit Message
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- MAP PLACEHOLDER -->

  <!-- MAP -->
  <div class="mt-16 bg-white rounded-[3rem] p-4 shadow-xl h-96 relative overflow-hidden">
    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2940.8783147540385!2d73.00195847387506!3d19.08093925182008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3a258fda5f7%3A0xef313111a8be7871!2sNUCLEUS%20POWER%20SOLUTIONS!5e1!3m2!1sen!2sus!4v1768279971421!5m2!1sen!2sus"
      width="100%" 
      height="100%" 
      style="border:0; border-radius: 1.5rem;"
      allowfullscreen="" 
      title="nucleus power solutions map direction"
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

</div>

<?php include __DIR__ . '/../component/footer.php'; ?>

</body>
</html>
