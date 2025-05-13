<html lang="id">
 <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Damar Project</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&amp;display=swap"
    rel="stylesheet"
  />
  <!-- WhatsApp Floating Button (ukuran besar) -->
<a href="https://wa.me/6285155322135" target="_blank" class="fixed bottom-20 right-6 bg-green-500 hover:bg-green-600 text-white p-6 rounded-full shadow-xl z-50 transition transform hover:scale-110 group" title="Chat via WhatsApp">
<i class="fab fa-whatsapp text-4xl"></i>
</a>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      background: linear-gradient(90deg, #2b2b2b 0%, #3533cd 100%);
      color: white;
    }
    /* Loader styles */
    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: linear-gradient(90deg, #2b2b2b 0%, #3533cd 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      opacity: 1;
      transition: opacity 0.3s ease;
    }
    #loader.fade-out {
      opacity: 0;
      pointer-events: none;
    }
    /* Spinner */
    .spinner {
      border: 6px solid rgba(255, 255, 255, 0.2);
      border-top: 6px solid white;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
    /* Fade-in animation for main content */
    #main-content {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    #main-content.visible {
      opacity: 1;
      transform: translateY(0);
    }
    /* Smooth transitions */
    header, nav a, button, section, img, form input, form textarea {
      transition: all 0.4s ease;
    }
    nav a:hover {
      color: #93c5fd; /* Tailwind blue-300 */
    }
    button:hover {
      background-color: #2563eb; /* Tailwind blue-600 darker */
    }
    /* Carousel fade */
    .carousel-fade {
      opacity: 0;
      transition: opacity 0.7s ease-in-out;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }
    .carousel-fade.active {
      opacity: 1;
      z-index: 10;
    }
    /* Service cards */
    #service-section .service-card {
      width: 12rem; /* Tailwind w-48 */
      padding: 1rem; /* Tailwind p-4 */
      max-height: 20rem;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      overflow: hidden;
      background-color: #1e40af; /* Tailwind blue-800 */
      border-radius: 1rem; /* Tailwind rounded-2xl */
      box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.5), 0 4px 6px -2px rgba(59, 130, 246, 0.3);
      color: white;
      text-align: center;
      gap: 0.75rem;
      flex-shrink: 0;
      scroll-snap-align: start;
    }
    #service-section .service-card img {
      width: 9rem;
      height: 9rem;
      padding: 0.5rem;
      object-fit: contain;
      margin: 0 auto;
      flex-shrink: 0;
    }
    #service-section .service-card h3 {
      font-size: 1.125rem;
      font-weight: 600;
      margin: 0;
    }
    #service-section .service-card p {
      font-size: 0.75rem;
      margin: 0;
      padding: 0 0.5rem 0.5rem 0.5rem;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 5;
      -webkit-box-orient: vertical;
    }
    /* Service cards container with scroll snap and adjusted padding */
    #service-cards-container {
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
      overflow-x: auto;
      display: flex;
      justify-content: flex-start;
      gap: 1.5rem;
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      scroll-padding-left: 0.5rem;
      scroll-padding-right: 0.5rem;
      scrollbar-width: none; /* Firefox */
    }
    #service-cards-container::-webkit-scrollbar {
      display: none; /* Chrome, Safari, Opera */
    }
    /* Service navigation container */
    #service-nav {
      max-width: 7xl;
      margin: 1.5rem auto 4rem auto;
      padding: 0 1.5rem;
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      user-select: none;
    }
    /* Buttons for service slide */
    #service-prev, #service-next {
      border: 2px solid white;
      background: transparent;
      color: white;
      width: 44px;
      height: 44px;
      border-radius: 0.375rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    #service-prev:hover, #service-next:hover {
      background-color: white;
      color: #1e40af;
    }
    /* Mobile menu styles */
    #mobile-menu {
      display: none;
      position: fixed;
      top: 0;
      right: 0;
      height: 100vh;
      width: 70vw;
      max-width: 300px;
      background: #1e40af;
      box-shadow: -4px 0 12px rgba(0,0,0,0.5);
      padding: 2rem 1.5rem;
      z-index: 60;
      flex-direction: column;
      gap: 1.5rem;
      transform: translateX(100%);
      transition: transform 0.3s ease;
    }
    #mobile-menu.open {
      transform: translateX(0);
      display: flex;
    }
    #mobile-menu a {
      color: white;
      font-weight: 600;
      font-size: 1.125rem;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    #mobile-menu a:hover {
      color: #93c5fd;
    }
    /* Overlay for mobile menu */
    #menu-overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.5);
      z-index: 50;
      transition: opacity 0.3s ease;
      opacity: 0;
    }
    #menu-overlay.active {
      display: block;
      opacity: 1;
    }
  </style>
 </head>
 <body>
  <!-- Loader -->
  <div id="loader" aria-label="Loading animation">
    <div class="spinner" role="status" aria-live="polite" aria-busy="true"></div>
  </div>

  <div id="main-content" class="fade-in">
   <!-- Navbar -->
    <header class="flex items-center justify-between p-6 max-w-7xl mx-auto relative">
     <div class="flex items-center space-x-2">
      <div class="bg-white rounded-full p-1">
       <img
         alt="logo of Damar Project, a white circular icon with blue and black details"
         class="w-5 h-5"
         src="https://cdn-icons-png.freepik.com/512/18343/18343611.png?ga=GA1.1.2000641150.1746493197"
       />
      </div>
      <span class="font-semibold text-lg">Damar Project</span>
     </div>
     <nav class="hidden md:flex space-x-6 text-sm font-medium">
      <a class="hover:text-blue-300 cursor-pointer" data-target="home-section" href="#home-section">Beranda</a>
      <a class="hover:text-blue-300 cursor-pointer" data-target="service-section" href="#service-section">Service</a>
      <a class="hover:text-blue-300 cursor-pointer" data-target="portfolio-section" href="#portfolio-section">Portfolio</a>
      <a class="hover:text-blue-300 cursor-pointer" data-target="get-in-touch" href="#get-in-touch">Contacts</a>
     </nav>
     <button id="menu-toggle" aria-label="Open menu" class="md:hidden text-white text-2xl focus:outline-none">
       <i class="fas fa-bars"></i>
     </button>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu" aria-label="Mobile navigation menu" role="dialog" aria-modal="true" aria-hidden="true">
      <button id="menu-close" aria-label="Close menu" class="self-end text-white text-3xl focus:outline-none mb-6">
        <i class="fas fa-times"></i>
      </button>
      <a href="#home-section" data-target="home-section" tabindex="0">Beranda</a>
      <a href="#service-section" data-target="service-section" tabindex="0">Service</a>
      <a href="#portfolio-section" data-target="portfolio-section" tabindex="0">Portfolio</a>
      <a href="#get-in-touch" data-target="get-in-touch" tabindex="0">Contacts</a>
    </div>
    <div id="menu-overlay" tabindex="-1" aria-hidden="true"></div>

    <!-- Carousel -->
    <div class="w-full h-80 relative overflow-hidden select-none" id="home-section" aria-label="Image carousel">  
      <div id="slidesContainer" class="w-full h-full relative" aria-live="polite" aria-atomic="true" aria-relevant="additions removals"></div>
      <div id="slideText" class="absolute inset-0 flex items-center justify-center text-white text-3xl font-sans font-semibold pointer-events-none z-30 drop-shadow-lg select-none">Damar Project</div>
    </div>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-10 md:px-20 py-10 space-y-10 md:space-y-0 max-w-7xl mx-auto" aria-label="Hero section introducing Damar Project">
     <div class="md:w-1/2">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Damar Project</h1>
      <p class="text-sm leading-relaxed mb-6">
       Kami adalah tim profesional di bidang IT yang berfokus pada pengembangan situs web yang modern, responsif, dan fungsional. Damar Project hadir untuk membantu bisnis dan individu membangun kehadiran digital yang kuat melalui solusi web yang handal dan inovatif. Dengan pengalaman dan komitmen terhadap kualitas, kami siap mewujudkan ide Anda menjadi kenyataan di dunia digital.
      </p>
      <button class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-full text-white font-semibold transition-colors duration-300" aria-label="Contact Us button">Contact Us</button>
     </div>
     <div class="md:w-1/2">
      <img alt="Illustration of a web developer engineer working with laptop and tablet, cross-platform development concept" class="w-full rounded-xl shadow-lg" src="https://img.freepik.com/free-vector/engineer-developer-with-laptop-tablet-code-cross-platform-development-cross-platform-operating-systems-software-environments-concept-pinkish-coral-bluevector-isolated-illustration_335657-2524.jpg" />
     </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 px-2 md:px-10 max-w-7xl mx-auto text-center relative" id="service-section" aria-label="Services section" style="">
      <h2 class="text-3xl font-extrabold mb-10 border-b-4 border-blue-600 inline-block pb-2" style="font-weight: 800">Service</h2>
      <button id="service-prev" aria-label="Previous service" type="button" title="Previous" class="absolute top-1/2 -left-6 -translate-y-1/2 border border-white rounded-md w-11 h-11 flex items-center justify-center text-white hover:bg-white hover:text-blue-800 transition z-20 hidden md:flex">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div id="service-cards-container" class="flex overflow-x-auto space-x-6 scroll-snap-x mandatory px-2">
        <div class="service-card" tabindex="0">
          <img alt="Illustration of website creation concept with landing page setup" src="https://img.freepik.com/free-vector/concept-landing-page-website-setup_52683-25031.jpg" />
          <h3>Website Creation</h3>
          <p>Web creation adalah proses membuat dan membangun situs web, mulai dari perencanaan, desain, pengkodean, hingga publikasi di internet.</p>
        </div>
        <div class="service-card" tabindex="0">
          <img alt="Cartoon illustration of usability testing for web development" src="https://img.freepik.com/premium-vector/usability-testing-isolated-cartoon-vector-illustrations_107173-22504.jpg" />
          <h3>Web Development</h3>
          <p>Web Development adalah Proses membangun fungsi dan struktur teknis dari situs web menggunakan bahasa pemrograman.</p>
        </div>
        <div class="service-card" tabindex="0">
          <img alt="Abstract vector illustration of website maintenance and security" src="https://img.freepik.com/free-vector/website-maintenance-abstract-concept-vector-illustration-website-service-webpage-seo-maintenance-web-design-corporate-site-professional-support-security-analysis-update-abstract-metaphor_335657-2295.jpg" />
          <h3>Website Maintenance</h3>
          <p>Web Maintenance adalah Kegiatan rutin untuk memperbarui, memperbaiki, dan menjaga kinerja serta keamanan situs web.</p>
        </div>
        <div class="service-card" tabindex="0">
          <img alt="Abstract concept vector illustration of job interview and consultation" src="https://img.freepik.com/premium-vector/job-interview-abstract-concept-vector-illustration_107173-29196.jpg" />
          <h3>Website Consultation</h3>
          <p>Web Consultation: Layanan pemberian saran profesional tentang strategi, desain, atau teknis dalam pengembangan situs web.</p>
        </div>
        <div class="service-card" tabindex="0">
          <img alt="Illustration of digital marketing strategy with charts and graphs" src="https://img.freepik.com/free-vector/digital-marketing-concept-illustration_114360-1079.jpg" />
          <h3>Digital Marketing</h3>
          <p>Digital Marketing membantu mempromosikan bisnis Anda secara online melalui strategi pemasaran digital yang efektif dan terukur.</p>
        </div>
        <div class="service-card" tabindex="0">
          <img alt="Illustration of mobile app development with smartphone and coding symbols" src="https://img.freepik.com/free-vector/mobile-app-development-concept-illustration_114360-1076.jpg" />
          <h3>Mobile App Development</h3>
          <p>Mobile App Development adalah proses pembuatan aplikasi mobile yang responsif dan user-friendly untuk berbagai platform.</p>
        </div>
      </div>
      <button id="service-next" aria-label="Next service" type="button" title="Next" class="absolute top-1/2 -right-6 -translate-y-1/2 border border-white rounded-md w-11 h-11 flex items-center justify-center text-white hover:bg-white hover:text-blue-800 transition z-20 hidden md:flex">
        <i class="fas fa-chevron-right"></i>
      </button>
    </section>

    <!-- Portfolio Section -->
    <section class="py-16 px-6 md:px-20 max-w-7xl mx-auto text-center" id="portfolio-section" aria-label="Portfolio section">
      <h2 class="text-3xl font-extrabold mb-10 border-b-4 border-blue-600 inline-block pb-2" style="font-weight: 800">Portfolio</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-blue-800 rounded-2xl p-6 shadow-lg" tabindex="0">
          <img alt="Portfolio project 1 screenshot showing a modern website homepage" class="w-full rounded-lg mb-4" height="250" src="https://wansolution.co.id/asset_wansolution/upload/portfolio/840839_portfolio.jpg" width="400" />
          <h3 class="text-xl font-semibold mb-2">Website Artejo Cipta Karya</h3>
          <p class="text-sm">Website Artejo Cipta Karya memperkenalkan layanan konstruksi berkualitas tinggi bagi masyarakat.</p>
        </div>
        <div class="bg-blue-800 rounded-2xl p-6 shadow-lg" tabindex="0">
          <img alt="Portfolio project 2 screenshot showing an e-commerce product page" class="w-full rounded-lg mb-4" height="250" src="https://wansolution.co.id/asset_wansolution/upload/portfolio/723768_portfolio.jpg" width="400" />
          <h3 class="text-xl font-semibold mb-2">Website Dian Permata Cibubur</h3>
          <p class="text-sm">Website Dian Permata Cibubur adalah platform digital yang dirancang untuk memberikan informasi lengkap mengenai proyek-proyek properti.</p>
        </div>
        <div class="bg-blue-800 rounded-2xl p-6 shadow-lg" tabindex="0">
          <img alt="Portfolio project 3 screenshot showing a blog layout with articles" class="w-full rounded-lg mb-4" height="250" src="https://wansolution.co.id/asset_wansolution/upload/portfolio/190499_portfolio.jpg" width="400" />
          <h3 class="text-xl font-semibold mb-2">Website Lidi si Umang</h3>
          <p class="text-sm">Website Lidi si Umang bertujuan untuk mempromosikan dan menjual produk mie lidi dengan inovatif dan berkualitas tinggi.</p>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="get-in-touch" class="min-h-screen flex flex-col justify-center px-6 md:px-12 lg:px-24 relative max-w-7xl mx-auto" style="background: linear-gradient(90deg, #2b2b2b 0%, #3533cd 100%)" aria-label="Contact section">
      <img alt="Polka dot pattern background with gradient from dark gray to blue" class="pointer-events-none absolute top-0 left-0 w-full h-full object-cover opacity-20 -z-10 rounded-xl" height="600" src="https://storage.googleapis.com/a1aa/image/7240b8f6-6561-4acc-dc41-c322075887dd.jpg" width="600" />
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
          <h1 class="text-white font-extrabold text-4xl md:text-5xl mb-12" style="font-weight: 800">Get in Touch.</h1>
          <form class="space-y-4 max-w-md" onsubmit="event.preventDefault(); window.location.href='mailto:andrean.wantek@gmail.com';">
            <div class="flex space-x-4">
              <input class="bg-transparent border border-gray-700 text-gray-300 placeholder-gray-400 rounded px-4 py-2 w-1/2 focus:outline-none focus:ring-1 focus:ring-blue-600 transition" placeholder="First Name" type="text" required aria-label="First Name" />
              <input class="bg-transparent border border-gray-700 text-gray-300 placeholder-gray-400 rounded px-4 py-2 w-1/2 focus:outline-none focus:ring-1 focus:ring-blue-600 transition" placeholder="Last Name" type="text" required aria-label="Last Name" />
            </div>
            <input class="bg-transparent border border-gray-700 text-gray-300 placeholder-gray-400 rounded px-4 py-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-600 transition" placeholder="Email Address" type="email" required aria-label="Email Address" />
            <textarea class="bg-transparent border border-gray-700 text-gray-300 placeholder-gray-400 rounded px-4 py-2 w-full resize-none focus:outline-none focus:ring-1 focus:ring-blue-600 transition" placeholder="Message" rows="5" required aria-label="Message"></textarea>
            <button class="bg-white text-black rounded px-6 py-2 mt-2 font-normal transition hover:bg-gray-200" type="submit" aria-label="Submit contact form">Submit</button>
          </form>
        </div>
        <div class="text-white max-w-md">
          <h2 class="font-extrabold text-2xl mb-4 border-b-4 border-blue-600 inline-block pb-1" style="font-weight: 800">Contact Us</h2>
          <p class="text-sm mb-8 leading-relaxed">Whether you have questions about our services, need support, or want to share your feedback, our dedicated team is here to assist you every step of the way.</p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-8 text-sm">
            <div class="flex items-start space-x-3">
              <div class="bg-white text-black rounded-md p-3 flex items-center justify-center" style="width: 38px; height: 38px">
                <i class="fas fa-envelope text-base"></i>
              </div>
              <div>
                <p class="font-bold mb-0.5">Email</p>
                <p class="text-xs">andrean.wantek@gmail.com</p>
              </div>
            </div>
            <div class="flex items-start space-x-3">
              <div class="bg-white text-black rounded-md p-3 flex items-center justify-center" style="width: 38px; height: 38px">
                <i class="fas fa-globe text-base"></i>
              </div>
              <div>
                <p class="font-bold mb-0.5">Website</p>
                <p class="text-xs">wansolution.co.id</p>
              </div>
            </div>
            <div class="flex items-start space-x-3">
              <div class="bg-white text-black rounded-md p-3 flex items-center justify-center" style="width: 38px; height: 38px">
                <i class="fas fa-phone-alt text-base"></i>
              </div>
              <div>
                <p class="font-bold mb-0.5">Phone</p>
                <p class="text-xs">+62 851-5532-2135</p>
              </div>
            </div>
            <div class="flex items-start space-x-3">
              <div class="bg-white text-black rounded-md p-3 flex items-center justify-center" style="width: 38px; height: 38px">
                <i class="fas fa-map-marker-alt text-base"></i>
              </div>
              <div>
                <p class="font-bold mb-0.5">Location</p>
                <p class="text-xs leading-tight">Graha nurul menteng, Jl. Terapi Raya, RT.03/RW.19, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16111</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    const slides = [
      {
        img: "https://img.freepik.com/free-photo/person-front-computer-working-html_23-2150040428.jpg",
        alt: "Person working on HTML coding in front of a computer, modern office environment",
      },
      {
        img: "https://img.freepik.com/free-photo/miniature-workmen-repairing-laptop-keyboard_1252-853.jpg",
        alt: "Miniature workmen repairing a laptop keyboard, close-up technology concept",
      },
      {
        img: "https://img.freepik.com/premium-photo/website-design-software-provide-snugly-template-online-retail-business_31965-539724.jpg",
        alt: "Website design software showing online retail business template on screen",
      },
    ];

    const slidesContainer = document.getElementById("slidesContainer");
    let currentIndex = 0;
    let slideElements = [];

    function createSlideElement(slide, isActive) {
      const img = document.createElement("img");
      img.src = slide.img;
      img.alt = slide.alt;
      img.className = "carousel-fade" + (isActive ? " active" : "");
      return img;
    }

    function renderSlides() {
      slidesContainer.innerHTML = "";
      slideElements = [];
      slides.forEach((slide, index) => {
        const slideEl = createSlideElement(slide, index === currentIndex);
        slidesContainer.appendChild(slideEl);
        slideElements.push(slideEl);
      });
    }

    function showSlide(index) {
      currentIndex = index;
      slideElements.forEach((img, i) => {
        if (i === currentIndex) {
          img.classList.add("active");
          img.setAttribute("aria-hidden", "false");
        } else {
          img.classList.remove("active");
          img.setAttribute("aria-hidden", "true");
        }
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    renderSlides();
    showSlide(currentIndex);

    // Auto slide every 5 seconds
    setInterval(() => {
      nextSlide();
    }, 5000);

    // Smooth scroll for nav links (desktop and mobile)
    function smoothScrollHandler(e) {
      e.preventDefault();
      const targetId = e.currentTarget.getAttribute("data-target");
      const targetEl = document.getElementById(targetId);
      if (targetEl) {
        targetEl.scrollIntoView({ behavior: "smooth" });
      }
      // Close mobile menu if open
      closeMobileMenu();
    }

    document.querySelectorAll("nav a[data-target], #mobile-menu a[data-target]").forEach((link) => {
      link.addEventListener("click", smoothScrollHandler);
    });

    // Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuClose = document.getElementById('menu-close');
    const menuOverlay = document.getElementById('menu-overlay');

    function openMobileMenu() {
      mobileMenu.classList.add('open');
      mobileMenu.setAttribute('aria-hidden', 'false');
      menuOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
      mobileMenu.classList.remove('open');
      mobileMenu.setAttribute('aria-hidden', 'true');
      menuOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }

    menuToggle.addEventListener('click', openMobileMenu);
    menuClose.addEventListener('click', closeMobileMenu);
    menuOverlay.addEventListener('click', closeMobileMenu);

    // Close menu on Escape key
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        closeMobileMenu();
      }
    });

    // Service cards scroll navigation buttons
    const serviceContainer = document.getElementById('service-cards-container');
    const servicePrevBtn = document.getElementById('service-prev');
    const serviceNextBtn = document.getElementById('service-next');

    servicePrevBtn.addEventListener('click', () => {
      serviceContainer.scrollBy({
        left: -300,
        behavior: 'smooth'
      });
    });

    serviceNextBtn.addEventListener('click', () => {
      serviceContainer.scrollBy({
        left: 300,
        behavior: 'smooth'
      });
    });

    // Loader fade out and show main content
    window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      const mainContent = document.getElementById('main-content');
      loader.classList.add('fade-out');
      setTimeout(() => {
        loader.style.display = 'none';
        mainContent.classList.add('visible');
      }, 300);
    });
  </script>
 </body>
</html>