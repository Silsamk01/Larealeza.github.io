<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Services | LA'REALEZA Limited</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9fafb 0%, #f0f4f8 100%);
    }
    
    .hero-image {
      height: 500px;
      position: relative;
      overflow: hidden;
    }
    
    .hero-image::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, rgba(79, 70, 229, 0.85) 0%, rgba(79, 70, 229, 0.7) 100%);
    }
    
    .service-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .service-icon {
      width: 70px;
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      margin-bottom: 20px;
    }
    
    .section-title {
      font-family: 'Playfair Display', serif;
      position: relative;
      display: inline-block;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 4px;
      background: linear-gradient(90deg, #4f46e5 0%, #f97316 100%);
      border-radius: 2px;
    }
    
    .btn-primary {
      background: linear-gradient(90deg, #4f46e5 0%, #7c73e9 100%);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    
    .btn-primary:hover {
      background: linear-gradient(90deg, #4338ca 0%, #6d65e6 100%);
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(79, 70, 229, 0.2);
    }
    
    .btn-secondary {
      background: linear-gradient(90deg, #f97316 0%, #fb923c 100%);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    
    .btn-secondary:hover {
      background: linear-gradient(90deg, #ea580c 0%, #f97316 100%);
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(249, 115, 22, 0.2);
    }
    
    .feature-badge {
      position: absolute;
      top: 20px;
      right: 20px;
      background: linear-gradient(90deg, #4f46e5 0%, #7c73e9 100%);
      color: white;
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(79, 70, 229, 0.3);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- HEADER -->
<header class="bg-white shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <a href="index.php">
      <div class="flex items-center gap-2">
        <img src="https://i.ibb.co/jZyCgF5L/logo.jpg" alt="Company Logo" class="h-12 w-12 object-contain rounded-md">
        <h1 class="text-xl font-bold text-indigo-800">LA'REALEZA <span class="text-orange-500">Limited</span></h1>
      </div>
    </a>
    <nav class="hidden md:flex gap-6 text-sm font-medium">
      <a href="index.php" class="hover:text-orange-500 transition-colors">Home</a>
      <a href="about.php" class="hover:text-orange-500 transition-colors">About</a>
      <a href="services.php" class="text-indigo-700 font-semibold">Services</a>
      <a href="estates.php" class="hover:text-orange-500 transition-colors">Estates</a>
      <a href="contact.php" class="hover:text-orange-500 transition-colors">Contact</a>
    </nav>
    <button class="md:hidden text-gray-600">
      <i class="fas fa-bars text-xl"></i>
    </button>
  </div>
</header>

<!-- SERVICES HERO -->
<section class="bg-indigo-700 text-white py-16 relative">
  <div class="max-w-4xl mx-auto text-center px-4 relative z-10">
    <h2 class="text-4xl md:text-5xl font-bold mb-3 font-serif">Our Premium Services</h2>
    <p class="text-lg max-w-2xl mx-auto">Beyond selling prime real estate, we shape your vision through world-class construction and elegant interior design.</p>
  </div>
</section>

<!-- SINGLE HERO IMAGE SECTION -->
<section class="hero-image">
  <div class="w-full h-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80')"></div>
  <div class="absolute inset-0 flex items-center justify-center">
    <div class="max-w-4xl px-4 text-center text-white">
      <h2 class="text-3xl md:text-5xl font-bold mb-6 font-serif">Transforming Visions into Reality</h2>
      <p class="text-xl mb-8 max-w-3xl mx-auto">At LA'REALEZA Limited, we provide integrated real estate solutions that cover every aspect of property development, from land acquisition to interior design.</p>
      <a href="contact.php" class="btn-primary px-8 py-3 rounded-full text-lg font-semibold inline-block">Get Started Today</a>
    </div>
  </div>
</section>

<!-- SERVICE CARDS SECTION -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Comprehensive Services</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Each service we offer is designed to seamlessly integrate with the others, providing you with a complete real estate solution.</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Land Sales Card -->
      <div class="service-card bg-white">
        <div class="p-8">
          <div class="service-icon bg-indigo-100 mx-auto">
            <i class="fas fa-map-marked-alt text-indigo-600 text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-indigo-800 mb-3 text-center">Land Sales</h3>
          <p class="text-gray-600 mb-6 text-center">Secure and verifiable plots of land in premium locations across Delta and Lagos, with genuine documentation and competitive pricing.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Prime locations with high appreciation potential</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Fully documented and government-approved</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Flexible payment plans available</span>
            </li>
          </ul>
          <div class="text-center">
            <a href="estates.php" class="btn-primary px-6 py-3 rounded-full font-medium inline-block w-full">Explore Available Estates</a>
          </div>
        </div>
      </div>
      
      <!-- Construction Card -->
      <div class="service-card bg-white relative">
        <div class="feature-badge">Most Popular</div>
        <div class="p-8">
          <div class="service-icon bg-orange-100 mx-auto">
            <i class="fas fa-building text-orange-600 text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-indigo-800 mb-3 text-center">Construction Services</h3>
          <p class="text-gray-600 mb-6 text-center">From architectural design to finishing, we construct residential and commercial buildings that blend aesthetics with functionality.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Custom architectural design services</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Quality materials and expert craftsmanship</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Project management from concept to completion</span>
            </li>
          </ul>
          <div class="text-center">
            <a href="contact.php" class="btn-secondary px-6 py-3 rounded-full font-medium inline-block w-full">Request a Quote</a>
          </div>
        </div>
      </div>
      
      <!-- Interior Decor Card -->
      <div class="service-card bg-white">
        <div class="p-8">
          <div class="service-icon bg-indigo-100 mx-auto">
            <i class="fas fa-couch text-indigo-600 text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-indigo-800 mb-3 text-center">Interior Decor</h3>
          <p class="text-gray-600 mb-6 text-center">Bespoke interior designs that reflect your personal taste and elevate your living and working spaces.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Personalized design consultations</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Modern, classic, and minimalist styles</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Quality furnishings and finishing materials</span>
            </li>
          </ul>
          <div class="text-center">
            <a href="contact.php" class="btn-primary px-6 py-3 rounded-full font-medium inline-block w-full">Book Consultation</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS SECTION -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Seamless Process</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">From initial consultation to final delivery, we ensure a smooth and transparent experience.</p>
    </div>
    
    <div class="grid md:grid-cols-4 gap-8">
      <div class="text-center">
        <div class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-6">
          <span class="text-indigo-700 text-2xl font-bold">1</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Consultation</h3>
        <p class="text-gray-600">Understanding your vision and requirements</p>
      </div>
      
      <div class="text-center">
        <div class="w-20 h-20 rounded-full bg-orange-100 flex items-center justify-center mx-auto mb-6">
          <span class="text-orange-600 text-2xl font-bold">2</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Planning</h3>
        <p class="text-gray-600">Creating detailed project plans and designs</p>
      </div>
      
      <div class="text-center">
        <div class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-6">
          <span class="text-indigo-700 text-2xl font-bold">3</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Execution</h3>
        <p class="text-gray-600">Implementing with precision and quality</p>
      </div>
      
      <div class="text-center">
        <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
          <span class="text-green-600 text-2xl font-bold">4</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Delivery</h3>
        <p class="text-gray-600">Handing over your completed project</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL SECTION -->
<section class="py-16 bg-gray-100">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <div class="text-center mb-16">
      <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Client Testimonials</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Hear what our satisfied clients have to say about our services.</p>
    </div>
    
    <div class="bg-white rounded-xl shadow-lg p-8 max-w-3xl mx-auto">
      <div class="flex justify-center mb-6">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Client" class="w-16 h-16 rounded-full object-cover">
      </div>
      <p class="text-gray-700 italic text-lg mb-6">"LA'REALEZA transformed our vision into a stunning reality. Their attention to detail and commitment to quality made our construction project seamless from start to finish."</p>
      <div class="font-semibold text-gray-800">Aisha Mohammed</div>
      <div class="text-sm text-gray-600">Lekki Phase 1 Residence</div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 bg-indigo-800 text-white">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Project?</h2>
    <p class="text-xl mb-10 max-w-2xl mx-auto">Contact us today for a personalized consultation and discover how we can bring your real estate vision to life.</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="contact.php" class="btn-secondary px-8 py-4 rounded-full text-lg font-semibold inline-block">Schedule a Consultation</a>
      <a href="tel:+2348123456789" class="bg-white text-indigo-700 px-8 py-4 rounded-full text-lg font-semibold inline-block hover:bg-gray-100 transition-colors">Call: +234 812 345 6789</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-indigo-900 text-white py-12">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid md:grid-cols-4 gap-8 mb-8">
      <div>
        <div class="flex items-center gap-2 mb-4">
          <img src="https://i.ibb.co/jZyCgF5L/logo.jpg" alt="Company Logo" class="h-12 w-12 object-contain rounded-md">
          <h3 class="text-xl font-bold">LA'REALEZA <span class="text-orange-500">Limited</span></h3>
        </div>
        <p class="text-gray-300 mb-4">Transforming real estate visions into exceptional realities through premium land sales, construction, and interior design.</p>
        <div class="flex gap-4">
          <a href="#" class="hover:text-orange-400"><i class="fab fa-facebook text-lg"></i></a>
          <a href="#" class="hover:text-orange-400"><i class="fab fa-instagram text-lg"></i></a>
          <a href="#" class="hover:text-orange-400"><i class="fab fa-linkedin text-lg"></i></a>
          <a href="#" class="hover:text-orange-400"><i class="fab fa-whatsapp text-lg"></i></a>
        </div>
      </div>
      
      <div>
        <h4 class="text-lg font-bold mb-4">Services</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Land Sales</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Construction</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Interior Design</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Property Management</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-bold mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="index.php" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
          <li><a href="about.php" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
          <li><a href="estates.php" class="text-gray-300 hover:text-white transition-colors">Available Estates</a></li>
          <li><a href="contact.php" class="text-gray-300 hover:text-white transition-colors">Contact Us</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-bold mb-4">Contact Us</h4>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start">
            <i class="fas fa-map-marker-alt mt-1 mr-3 text-orange-500"></i>
            <span>123 Victoria Island, Lagos, Nigeria</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-phone-alt mt-1 mr-3 text-orange-500"></i>
            <span>+234 7007003344</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-envelope mt-1 mr-3 text-orange-500"></i>
            <span>info@larealeza.com</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-clock mt-1 mr-3 text-orange-500"></i>
            <span>Mon-Fri: 9am - 5pm</span>
          </li>
        </ul>
      </div>
    </div>
    
    <div class="pt-8 border-t border-indigo-800 text-center">
      <p>© 2025 LA'REALEZA INTERNATIONAL LIMITED. All rights reserved.</p>
    </div>
  </div>
</footer>

</body>
</html>