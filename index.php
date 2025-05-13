<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Andre - Kosgoro Support #WTI
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Poppins', sans-serif;
    }
   /* Ensure portfolio cards have consistent height and overlay fits nicely */
   .portfolio-slider .group {
     height: 280px; /* fixed height to avoid too tall cards */
     position: relative;
     overflow: hidden;
     border-radius: 0.5rem; /* rounded-lg */
     box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1); /* shadow-lg */
   }
   .portfolio-slider .group img {
     height: 100%;
     width: 100%;
     object-fit: cover;
     transition: transform 0.3s ease;
   }
   .portfolio-slider .group:hover img {
     transform: scale(1.1);
   }
   .portfolio-slider .overlay {
     position: absolute;
     inset: 0;
     background-color: rgba(0,0,0,0.5);
     opacity: 0;
     transition: opacity 0.3s ease;
     display: flex;
     align-items: center;
     justify-content: center;
     padding: 0 1rem;
     text-align: center;
   }
   .portfolio-slider .group:hover .overlay {
     opacity: 1;
   }
   .portfolio-slider .overlay h3 {
     color: white;
     font-size: 1.25rem; /* text-xl */
     font-weight: 600; /* font-semibold */
     line-height: 1.3;
     max-height: 4.5rem; /* about 3 lines max */
     overflow: hidden;
     display: -webkit-box;
     -webkit-line-clamp: 3;
     -webkit-box-orient: vertical;
     word-break: break-word;
   }
  </style>
 </head>
 <body class="bg-white text-gray-800">
  <!-- Header -->
  <header class="fixed w-full bg-white shadow-md z-50">
   <div class="container mx-auto flex items-center justify-between py-4 px-6 md:px-12">
    <a class="text-2xl font-bold text-indigo-600" href="#">
     Dam's
    </a>
    <nav class="hidden md:flex space-x-8 font-semibold text-gray-700">
     <a class="hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="home" href="javascript:void(0)">
      Home
     </a>
     <a class="hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="services" href="javascript:void(0)">
      Services
     </a>
     <a class="hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="portfolio" href="javascript:void(0)">
      Portfolio
     </a>
     <a class="hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="about" href="javascript:void(0)">
      About
     </a>
     <a class="hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="blog" href="javascript:void(0)">
      Blog
     </a>
     <a class="hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="contact" href="javascript:void(0)">
      Contact
     </a>
    </nav>
    <button class="md:hidden focus:outline-none" id="menu-btn">
     <i class="fas fa-bars text-2xl text-gray-700">
     </i>
    </button>
   </div>
   <nav class="hidden md:hidden bg-white shadow-md" id="mobile-menu">
    <a class="block px-6 py-3 border-b border-gray-200 font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="home" href="javascript:void(0)">
     Home
    </a>
    <a class="block px-6 py-3 border-b border-gray-200 font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="services" href="javascript:void(0)">
     Services
    </a>
    <a class="block px-6 py-3 border-b border-gray-200 font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="portfolio" href="javascript:void(0)">
     Portfolio
    </a>
    <a class="block px-6 py-3 border-b border-gray-200 font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="about" href="javascript:void(0)">
     About
    </a>
    <a class="block px-6 py-3 border-b border-gray-200 font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="blog" href="javascript:void(0)">
     Blog
    </a>
    <a class="block px-6 py-3 font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="contact" href="javascript:void(0)">
     Contact
    </a>
   </nav>
  </header>
  <!-- Hero Section -->
  <section class="pt-24 bg-gradient-to-r from-indigo-600 to-indigo-400 text-white" id="home">
   <div class="container mx-auto px-6 md:px-12 flex flex-col-reverse md:flex-row items-center md:space-x-12 py-20">
    <div class="md:w-1/2 text-center md:text-left">
     <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
      Hai
      <br/>
      Nama Saya Andrean
     </h1>
     <p class="mb-8 text-lg md:text-xl font-light max-w-xl mx-auto md:mx-0">
      Saya salah seorang Team Support dari SMK Kosgoro di PT.Wan Teknologi International sebagai seorang Programmer pemula.
     </p>
     <div class="space-x-4">
      <a class="inline-block bg-white text-indigo-600 font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-50 transition scroll-link cursor-pointer" data-target="contact" href="javascript:void(0)">
       Contact Us
      </a>
      <a class="inline-block border border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition scroll-link cursor-pointer" data-target="portfolio" href="javascript:void(0)">
       My Portfolio
      </a>
     </div>
    </div>
    <div class="md:w-1/2 mb-12 md:mb-0">
     <img alt="Creative digital agency team working on a project with laptops and sketches in a modern office" class="rounded-lg shadow-lg mx-auto" height="400" src="https://storage.googleapis.com/a1aa/image/05ca465f-ba76-4977-62f7-d85f5805a7cd.jpg" width="600"/>
    </div>
   </div>
  </section>
  <!-- Services Section -->
  <section class="py-20 bg-gray-50" id="services">
   <div class="container mx-auto px-6 md:px-12 text-center max-w-5xl">
    <h2 class="text-4xl font-extrabold mb-6 text-gray-900">
     My Skills
    </h2>
    <p class="mb-16 text-gray-600 text-lg font-light">
    Saya belajar desain grafis untuk bikin konten visual, web development buat bikin website sederhana, dan digital marketing untuk promosiin konten lewat sosial media dan iklan online.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
     <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
      <div class="text-indigo-600 mb-6 text-5xl">
       <i class="fas fa-paint-brush">
       </i>
      </div>
      <h3 class="text-2xl font-semibold mb-4">
       Graphic Design
      </h3>
      <p class="text-gray-600 font-light">
      Saya suka ngedesain hal-hal visual kayak poster, feed Instagram, atau logo. Biasanya pakai Canva atau Photoshop, dan masih terus belajar biar makin rapi dan menarik.
      </p>
     </div>
     <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
      <div class="text-indigo-600 mb-6 text-5xl">
       <i class="fas fa-code">
       </i>
      </div>
      <h3 class="text-2xl font-semibold mb-4">
       Web Development
      </h3>
      <p class="text-gray-600 font-light">
      Pernah bikin beberapa website sederhana pakai HTML, CSS, dan sedikit JavaScript. Masih belajar biar bisa bikin website yang tampilannya bagus dan bisa jalan lancar.
      </p>
     </div>
     <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
      <div class="text-indigo-600 mb-6 text-5xl">
       <i class="fas fa-bullhorn">
       </i>
      </div>
      <h3 class="text-2xl font-semibold mb-4">
       Digital Marketing
      </h3>
      <p class="text-gray-600 font-light">
      Lagi ngulik cara promosiin produk atau konten lewat internet, kayak lewat Instagram, TikTok, atau iklan berbayar. Sering coba-coba buat konten, nulis caption, dan lihat hasilnya dari insight.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Portfolio Section -->
  <section class="py-20 container mx-auto px-6 md:px-12 max-w-7xl" id="portfolio">
   <h2 class="text-4xl font-extrabold mb-12 text-center text-gray-900">
    My Portfolio
   </h2>
   <div class="portfolio-slider" >
    <div class="group mx-2">
     <img alt="Portfolio project showing a modern website design with clean layout and vibrant colors" src="img/project1.png" />
     <div class="overlay">
      <h3>
       Modern Website Design
      </h3>
     </div>
    </div>
    <div class="group mx-2" >
     <img alt="Portfolio project showing social media campaign graphics with vibrant colors and engaging content" src="img/project2.png" />
     <div class="overlay">
      <h3>
       Social Media Campaign
      </h3>
     </div>
    </div>
   </div>
  </section>
  <!-- About Section -->
  <section class="py-20 bg-white" id="about">
   <div class="container mx-auto px-6 md:px-12 max-w-6xl flex flex-col md:flex-row items-center md:space-x-16">
    <div class="md:w-1/2 mb-12 md:mb-0">
     <img alt="About us team working together in a modern office environment with laptops and brainstorming" class="rounded-lg shadow-lg mx-auto" height="500" src="https://storage.googleapis.com/a1aa/image/8dc30dd4-686a-45d0-686e-34d2077480da.jpg" width="600"/>
    </div>
    <div class="md:w-1/2 text-center md:text-left">
     <h2 class="text-4xl font-extrabold mb-6 text-gray-900">
      About Us
     </h2>
     <p class="mb-6 text-gray-600 font-light text-lg">
     Saya Andre, seseorang yang masih dalam proses belajar di dunia desain grafis, pengembangan web, dan digital marketing.
     </p>
     <p class="mb-6 text-gray-600 font-light text-lg">
     Saat ini saya baru menguasai dasar-dasarnya, seperti membuat desain sederhana, membangun website basic, dan memahami cara kerja promosi online.
     </p>
     <a class="inline-block bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition scroll-link cursor-pointer" data-target="contact" href="javascript:void(0)">
      Get in Touch
     </a>
    </div>
   </div>
  </section>
  <!-- Blog Section -->
  <section class="py-20 bg-gray-50" id="blog">
   <div class="container mx-auto px-6 md:px-12 max-w-4xl text-center">
    <h2 class="text-4xl font-extrabold mb-12 text-gray-900">
     Latest Blog Posts
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-center">
     <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer mx-auto max-w-md">
      <img alt="Blog post image showing creative design tips with colorful sketches and tools" class="w-full h-48 object-cover" height="400" src="img/Artikel1.png" width="600"/>
      <div class="p-6">
       <h3 class="text-2xl font-semibold mb-3 text-gray-900">
       Buka Peluang Baru Lewat Aplikasi – Cocok Buat yang Mau Naik Level
       </h3>
       <p class="text-gray-600 font-light mb-4">
        Belajar tentang Aplikasi agar meningkatkan penjualan.
       </p>
       <a class="text-indigo-600 font-semibold hover:underline" href="https://jasaaplikasibogorr.blogspot.com/2025/05/buka-peluang-baru-lewat-aplikasi-cocok.html">
        Read More
       </a>
      </div>
     </article>
     <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
      <img alt="Blog post image showing web development trends with code on screen and developer working" class="w-full h-48 object-cover" height="400" src="img/Artikel2.png" width="600"/>
      <div class="p-6">
       <h3 class="text-2xl font-semibold mb-3 text-gray-900">
       Google Ads 101: Biar Bisnis Kamu Gak Cuma Viral, Tapi Laku!
       </h3>
       <p class="text-gray-600 font-light mb-4">
        Belajar tentang Google ads agar bisnis kamu bisa semakin Go International.
       </p>
       <a class="text-indigo-600 font-semibold hover:underline" href="https://jasaaplikasibogorr.blogspot.com/2025/05/google-ads-101-biar-bisnis-kamu-gak.html">
        Read More
       </a>
      </div>
     </article>
    </div>
   </div>
  </section>
  <!-- Contact Section -->
  <section class="py-20 bg-white" id="contact">
   <div class="container mx-auto px-6 md:px-12 max-w-4xl">
    <h2 class="text-4xl font-extrabold mb-12 text-center text-gray-900">
     Contact Us
    </h2>
    <form action="#" class="space-y-8" method="POST">
     <div>
      <label class="block mb-2 font-semibold text-gray-700" for="name">
       Name
      </label>
      <input class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-600" id="name" name="name" placeholder="Your full name" required="" type="text"/>
     </div>
     <div>
      <label class="block mb-2 font-semibold text-gray-700" for="email">
       Email
      </label>
      <input class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-600" id="email" name="email" placeholder="Your email address" required="" type="email"/>
     </div>
     <div>
      <label class="block mb-2 font-semibold text-gray-700" for="message">
       Message
      </label>
      <textarea class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-600" id="message" name="message" placeholder="Write your message here" required="" rows="5"></textarea>
     </div>
     <div class="text-center">
      <button class="bg-indigo-600 text-white font-semibold px-12 py-4 rounded-lg shadow-lg hover:bg-indigo-700 transition" type="submit">
       Send Message
      </button>
     </div>
    </form>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-indigo-600 text-white py-12">
   <div class="container mx-auto px-6 md:px-12 max-w-7xl flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
    <div class="text-center md:text-left">
     <a class="text-2xl font-bold" href="#">
      Dam's
     </a>
     <p class="mt-2 max-w-xs font-light">
      © 2024 Dam's. All rights reserved.
     </p>
    </div>
    <div class="flex space-x-6 text-xl">
     <a aria-label="Facebook" class="hover:text-indigo-300 transition" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a aria-label="Instagram" class="hover:text-indigo-300 transition" href="https://www.instagram.com/majesticadre/">
      <i class="fab fa-instagram">
      </i>
     </a>
     <a aria-label="Whatsapp" class="hover:text-indigo-300 transition" href="https://wa.me/6285155322135">
      <i class="fab fa-whatsapp">
      </i>
     </a>
    </div>
   </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
  </script>
  <script>
   $(document).ready(function() {
      // Mobile menu toggle
      $('#menu-btn').click(function() {
        $('#mobile-menu').toggleClass('hidden');
      });

      // Smooth scroll on click
      $('.scroll-link').click(function(e) {
        e.preventDefault();
        var targetId = $(this).data('target');
        var target = $('#' + targetId);
        if(target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 70
          }, 700);
          // Close mobile menu if open
          if(!$('#mobile-menu').hasClass('hidden')) {
            $('#mobile-menu').addClass('hidden');
          }
        }
      });

      // Initialize slick slider for portfolio
      $('.portfolio-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    });
  </script>
 </body>
</html>
