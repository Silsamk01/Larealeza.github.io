<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us | LA'REALEZA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9fafb 0%, #f0f4f8 100%);
      scroll-behavior: smooth;
    }
    
    .hero-section {
      background: linear-gradient(rgba(79, 70, 229, 0.85), rgba(79, 70, 229, 0.9)), url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80');
      background-size: cover;
      background-position: center;
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
    
    .feature-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
    
    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .timeline-item {
      position: relative;
      padding-left: 30px;
      margin-bottom: 40px;
    }
    
    .timeline-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 5px;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background: linear-gradient(90deg, #4f46e5 0%, #f97316 100%);
    }
    
    .timeline-item::after {
      content: '';
      position: absolute;
      left: 7px;
      top: 25px;
      bottom: -25px;
      width: 1px;
      background: #c7d2fe;
    }
    
    .timeline-item:last-child::after {
      display: none;
    }
    
    .certificate-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
    
    .certificate-card:hover {
      transform: scale(1.03);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .founder-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
    
    .founder-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .mission-vision-card {
      background: linear-gradient(135deg, #4f46e5 0%, #7c73e9 100%);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(79, 70, 229, 0.2);
    }
  </style>
</head>
<body class="bg-gray-50">

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
        <a href="estates.php" class="hover:text-orange-500 transition-colors">Estates</a>
        <a href="services.php" class="hover:text-orange-500 transition-colors">Services</a>
        <a href="about.php" class="text-indigo-700 font-semibold">About</a>
        <a href="contact.php" class="hover:text-orange-500 transition-colors">Contact</a>
      </nav>
      <a href="contact.php" class="hidden md:block bg-indigo-600 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-700 transition-colors">Book Consultation</a>
      <button class="md:hidden text-gray-600">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="hero-section text-white py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Building Legacies, Shaping Futures</h1>
      <p class="text-xl max-w-3xl mx-auto mb-8">Discover the story behind LA'REALEZA - where vision meets excellence in real estate development</p>
      <a href="#our-story" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full text-lg font-semibold inline-block">Our Journey</a>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section id="our-story" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Story</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">From vision to reality - the journey of LA'REALEZA International Limited</p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <h3 class="text-2xl font-bold text-indigo-800 mb-4">Transforming Real Estate in Nigeria</h3>
          <p class="text-gray-700 mb-6 leading-relaxed">
            Founded in 2023, LA'REALEZA International Limited began with a vision to redefine real estate development in Nigeria. What started as a passion for creating exceptional living spaces has grown into a premier real estate company with a portfolio of luxury estates and smart cities.
          </p>
          <p class="text-gray-700 mb-6 leading-relaxed">
            Our journey has been guided by a commitment to integrity, innovation, and client satisfaction. Today, we stand as a symbol of trust and excellence in the Nigerian real estate market, having delivered premium properties to over 2,500 satisfied clients.
          </p>
          <div class="bg-indigo-50 p-6 rounded-lg border-l-4 border-indigo-600">
            <p class="text-gray-700 italic">"Our mission is to create spaces that inspire, communities that thrive, and investments that appreciate - all while maintaining the highest standards of integrity and excellence."</p>
          </div>
        </div>
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Our Story" class="rounded-xl shadow-lg">
          <div class="absolute -bottom-6 -right-6 bg-orange-500 text-white p-6 rounded-xl shadow-lg">
            <div class="text-4xl font-bold">7+</div>
            <div class="text-lg">Years of Excellence</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TIMELINE SECTION -->
  <section class="py-16 bg-indigo-50">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Journey</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Key milestones in the growth of LA'REALEZA International Limited</p>
      </div>
      
      <div class="max-w-3xl mx-auto">
        <div class="timeline-item">
          <div class="bg-white p-6 rounded-lg shadow">
            <div class="text-indigo-600 font-bold mb-2">2023</div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">Company Founding</h3>
            <p class="text-gray-600">LA'REALEZA International Limited was established with a vision to transform Nigeria's real estate landscape through premium developments and client-focused services.</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="bg-white p-6 rounded-lg shadow">
            <div class="text-indigo-600 font-bold mb-2">2023</div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">First Major Development</h3>
            <p class="text-gray-600">Launched our flagship project in Delta State, setting new standards for luxury living and community development in the region.</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="bg-white p-6 rounded-lg shadow">
            <div class="text-indigo-600 font-bold mb-2">2023</div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">Expansion to Lagos</h3>
            <p class="text-gray-600">Expanded operations to Lagos, bringing our signature blend of quality and value to Nigeria's commercial capital.</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="bg-white p-6 rounded-lg shadow">
            <div class="text-indigo-600 font-bold mb-2">2023</div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">Smart City Launch</h3>
            <p class="text-gray-600">Introduced Pinnacle Smart City - our most ambitious project to date, featuring integrated technology and sustainable design.</p>
          </div>
        </div>
        
        <div class="timeline-item">
          <div class="bg-white p-6 rounded-lg shadow">
            <div class="text-indigo-600 font-bold mb-2">2025</div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">2,500+ Clients Served</h3>
            <p class="text-gray-600">Celebrated serving over 2,500 satisfied clients across Nigeria, a testament to our commitment to excellence and customer satisfaction.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOUNDER SECTION -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Leadership</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Visionary leadership driving innovation in real estate development</p>
      </div>
      
      <div class="max-w-4xl mx-auto">
        <div class="founder-card bg-white p-0 overflow-hidden">
          <div class="md:flex">
            <div class="md:w-1/3">
              <img src="https://i.ibb.co/ynsJwQ1t/founder.jpg" alt="Founder of LA'REALEZA" class="w-full h-full object-cover">
            </div>
            <div class="md:w-2/3 p-8">
              <h3 class="text-2xl font-bold text-indigo-800 mb-2">ENG. IKHARO ARUNA SHAKA ROYALTY</h3>
              <p class="text-orange-500 font-semibold mb-6">Founder & CEO</p>
              <p class="text-gray-700 mb-6">
                With over 15 years of experience in real estate development and construction, Eng. Ikharo brings a unique blend of technical expertise and business acumen to LA'REALEZA. His passion for creating sustainable communities drives the company's vision.
              </p>
              <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="flex items-center">
                  <i class="fas fa-graduation-cap text-indigo-600 mr-3"></i>
                  <span>M.Sc. Civil Engineering</span>
                </div>
                <!-- <div class="flex items-center">
                  <i class="fas fa-award text-indigo-600 mr-3"></i>
                  <span>15+ Industry Awards</span>
                </div> -->
                <div class="flex items-center">
                  <i class="fas fa-city text-indigo-600 mr-3"></i>
                  <span>30+ Developments</span>
                </div>
                <div class="flex items-center">
                  <i class="fas fa-users text-indigo-600 mr-3"></i>
                  <span>2,500+ Clients Served</span>
                </div>
              </div>
              <div class="flex space-x-4">
                <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 hover:bg-indigo-200">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 hover:bg-indigo-200">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 hover:bg-indigo-200">
                  <i class="fas fa-envelope"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MISSION & VISION -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-8">
        <div class="mission-vision-card text-white p-8 rounded-xl">
          <div class="text-center mb-8">
            <i class="fas fa-bullseye text-5xl mb-4"></i>
            <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
          </div>
          <p class="text-center text-indigo-100 leading-relaxed">
            To transform the real estate landscape by creating exceptional living and investment opportunities that combine innovative design, sustainable practices, and unparalleled value. We are committed to building communities that enrich lives and deliver lasting returns for our clients.
          </p>
        </div>
        
        <div class="mission-vision-card bg-gradient-to-r from-orange-500 to-amber-500 text-white p-8 rounded-xl">
          <div class="text-center mb-8">
            <i class="fas fa-eye text-5xl mb-4"></i>
            <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
          </div>
          <p class="text-center text-amber-100 leading-relaxed">
            To be Nigeria's most trusted real estate brand, recognized for excellence in developing premium communities that set new standards for quality living and smart investment. We envision a future where every Nigerian has access to secure, well-planned, and value-driven property solutions.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose LA'REALEZA</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">The values and principles that set us apart</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="feature-card bg-white p-8">
          <div class="w-16 h-16 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl mb-6">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h4 class="font-bold text-xl text-gray-800 mb-3">Trust & Integrity</h4>
          <p class="text-gray-600">We operate with complete transparency, ensuring every project is legally verified and every transaction is trustworthy.</p>
        </div>
        
        <div class="feature-card bg-white p-8">
          <div class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 text-2xl mb-6">
            <i class="fas fa-lightbulb"></i>
          </div>
          <h4 class="font-bold text-xl text-gray-800 mb-3">Smart Investment</h4>
          <p class="text-gray-600">Our estates are strategically located for maximum growth potential and long-term value appreciation.</p>
        </div>
        
        <div class="feature-card bg-white p-8">
          <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 text-2xl mb-6">
            <i class="fas fa-people-carry"></i>
          </div>
          <h4 class="font-bold text-xl text-gray-800 mb-3">Client-Centered</h4>
          <p class="text-gray-600">Your satisfaction is our priority. We provide personalized support throughout your property journey.</p>
        </div>
        
        <div class="feature-card bg-white p-8">
          <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-2xl mb-6">
            <i class="fas fa-leaf"></i>
          </div>
          <h4 class="font-bold text-xl text-gray-800 mb-3">Sustainable Development</h4>
          <p class="text-gray-600">We build communities with environmental consciousness and long-term sustainability in mind.</p>
        </div>
        
        <div class="feature-card bg-white p-8">
          <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-2xl mb-6">
            <i class="fas fa-home"></i>
          </div>
          <h4 class="font-bold text-xl text-gray-800 mb-3">Quality Construction</h4>
          <p class="text-gray-600">We use premium materials and employ skilled craftsmen to ensure exceptional build quality in all our projects.</p>
        </div>
        
        <div class="feature-card bg-white p-8">
          <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 text-2xl mb-6">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <h4 class="font-bold text-xl text-gray-800 mb-3">Flexible Payment</h4>
          <p class="text-gray-600">Our customized payment plans make property ownership accessible without financial strain.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CERTIFICATIONS SECTION -->
  <section class="py-16 bg-indigo-50">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Legal Certifications</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          LA'REALEZA International Limited is fully compliant with all Nigerian regulatory requirements
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <div class="certificate-card bg-white overflow-hidden">
          <div class="p-6">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 mr-4">
                <i class="fas fa-file-contract"></i>
              </div>
              <h3 class="text-xl font-bold text-gray-800">CAC Registration</h3>
            </div>
            <p class="text-gray-600 mb-4">
              We are duly registered with the Corporate Affairs Commission (CAC) under the Companies and Allied Matters Act, ensuring full legal compliance for all our operations.
            </p>
            <img src="https://i.ibb.co/qYybmyZD/Screenshot-68.png" alt="CAC Registration" class="rounded-lg border">
          </div>
        </div>
        
        <div class="certificate-card bg-white overflow-hidden">
          <div class="p-6">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-700 mr-4">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h3 class="text-xl font-bold text-gray-800">SCUML Compliance</h3>
            </div>
            <p class="text-gray-600 mb-4">
              We are registered with the Special Control Unit Against Money Laundering (SCUML), demonstrating our commitment to transparent financial practices and regulatory compliance.
            </p>
            <img src="https://i.ibb.co/Z1Bwhbs9/Screenshot-69.png" alt="SCUML Certificate" class="rounded-lg border">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-indigo-800 to-indigo-600 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Invest in Your Future?</h2>
      <p class="text-xl mb-10 max-w-2xl mx-auto">Join thousands of satisfied clients who have trusted LA'REALEZA for their real estate needs.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="estates.php" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-full text-lg font-semibold inline-block">View Our Estates</a>
        <a href="contact.php" class="bg-white text-indigo-700 px-8 py-4 rounded-full text-lg font-semibold inline-block hover:bg-gray-100 transition-colors">Contact Us</a>
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
          <h4 class="text-lg font-bold mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="index.php" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
            <li><a href="estates.php" class="text-gray-300 hover:text-white transition-colors">Available Estates</a></li>
            <li><a href="services.php" class="text-gray-300 hover:text-white transition-colors">Our Services</a></li>
            <li><a href="about.php" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="text-lg font-bold mb-4">Our Services</h4>
          <ul class="space-y-2">
            <li><a href="services.php" class="text-gray-300 hover:text-white transition-colors">Land Sales</a></li>
            <li><a href="services.php" class="text-gray-300 hover:text-white transition-colors">Construction</a></li>
            <li><a href="services.php" class="text-gray-300 hover:text-white transition-colors">Interior Design</a></li>
            <li><a href="services.php" class="text-gray-300 hover:text-white transition-colors">Property Management</a></li>
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
      
      <div class="pt-8 border-t border-indigo-800 text-center text-gray-400">
        <p>© 2025 LA'REALEZA INTERNATIONAL LIMITED. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 100,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>

</body>
</html>