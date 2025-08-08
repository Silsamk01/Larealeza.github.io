<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Premium Estates | LA'REALEZA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9fafb 0%, #f0f4f8 100%);
    }
    
    .estate-hero {
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
    
    .estate-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
    
    .estate-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
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
    
    .filter-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
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
    
    .investment-badge {
      background: linear-gradient(90deg, #10b981 0%, #34d399 100%);
      color: white;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 600;
    }
    
    .feature-icon {
      width: 24px;
      height: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: #e0e7ff;
      color: #4f46e5;
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
        <a href="estates.php" class="text-indigo-700 font-semibold">Estates</a>
        <a href="services.php" class="hover:text-orange-500 transition-colors">Services</a>
        <a href="about.php" class="hover:text-orange-500 transition-colors">About</a>
        <a href="contact.php" class="hover:text-orange-500 transition-colors">Contact</a>
      </nav>
      <a href="contact.php" class="hidden md:block bg-orange-500 text-white px-6 py-2 rounded-full font-medium hover:bg-orange-600 transition-colors">Book Consultation</a>
      <button class="md:hidden text-gray-600">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="estate-hero text-white py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Discover Premium Real Estate Opportunities</h1>
      <p class="text-xl max-w-3xl mx-auto mb-8">Explore our carefully curated selection of prime properties in Nigeria's most promising locations</p>
      <a href="#estates" class="btn-secondary px-8 py-4 rounded-full text-lg font-semibold inline-block">View Available Estates</a>
    </div>
  </section>

  
  <!-- ESTATES SECTION -->
  <section id="estates" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Premium Estates</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Discover our exclusive collection of prime properties in strategic locations</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Grand Manor -->
        <div class="estate-card bg-white">
          <div class="relative">
            <img src="https://i.ibb.co/mFTfd93Q/Grandmanor.jpg" alt="Grand Manor" class="w-full h-64 object-cover">
            <div class="feature-badge">Most Popular</div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-indigo-700">Grand Manor</h4>
              <div class="investment-badge">High Growth</div>
            </div>
            <p class="text-gray-600 text-sm mb-4 flex items-center">
              <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Utulu-Iselle, Mkpetime - Near Ani MegaCity
            </p>
            
            <div class="flex justify-between items-center mb-4">
              <div>
                <div class="text-xs text-gray-500">Starting Price</div>
                <div class="text-orange-600 font-bold text-xl">₦1,250,000</div>
              </div>
              <div>
                <div class="text-xs text-gray-500">Plot Sizes</div>
                <div class="font-semibold">300-450 SQM</div>
              </div>
            </div>
            
            <div class="grid grid-cols-2 gap-3 mb-6">
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-road text-xs"></i>
                </div>
                <span class="text-sm">Tarred Roads</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-shield-alt text-xs"></i>
                </div>
                <span class="text-sm">24/7 Security</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-tint text-xs"></i>
                </div>
                <span class="text-sm">Water Supply</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-bolt text-xs"></i>
                </div>
                <span class="text-sm">Electricity</span>
              </div>
            </div>
            
            <div class="flex gap-2">
              <a href="forms/GrandManor-Subscription.pdf" download class="btn-secondary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-download mr-2"></i> Download Form
              </a>
              <a href="contact.php" class="btn-primary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-info-circle mr-2"></i> Details
              </a>
            </div>
          </div>
        </div>
        
        <!-- Pinnacle Smart City -->
        <div class="estate-card bg-white">
          <div class="relative">
            <img src="https://i.ibb.co/G4cv83rv/specialoffer-two.jpg" alt="Pinnacle Smart City" class="w-full h-64 object-cover">
            <div class="feature-badge">Smart City</div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-indigo-700">Pinnacle Smart City</h4>
              <div class="investment-badge">Premium</div>
            </div>
            <p class="text-gray-600 text-sm mb-4 flex items-center">
              <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Asaba - Prime Location
            </p>
            
            <div class="flex justify-between items-center mb-4">
              <div>
                <div class="text-xs text-gray-500">Starting Price</div>
                <div class="text-orange-600 font-bold text-xl">₦1,150,000</div>
              </div>
              <div>
                <div class="text-xs text-gray-500">Plot Sizes</div>
                <div class="font-semibold">300 & 464 SQM</div>
              </div>
            </div>
            
            <div class="grid grid-cols-2 gap-3 mb-6">
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-wifi text-xs"></i>
                </div>
                <span class="text-sm">Fiber Internet</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-solar-panel text-xs"></i>
                </div>
                <span class="text-sm">Solar Power</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-tree text-xs"></i>
                </div>
                <span class="text-sm">Green Spaces</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-camera text-xs"></i>
                </div>
                <span class="text-sm">CCTV Security</span>
              </div>
            </div>
            
            <div class="flex gap-2">
              <a href="forms/Pinnacle-Subscription.pdf" download class="btn-secondary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-download mr-2"></i> Download Form
              </a>
              <a href="contact.php" class="btn-primary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-info-circle mr-2"></i> Details
              </a>
            </div>
          </div>
        </div>
        
        <!-- Royal Haven -->
        <div class="estate-card bg-white">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Royal Haven" class="w-full h-64 object-cover">
            <div class="feature-badge">New Development</div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-3">
              <h4 class="text-xl font-bold text-indigo-700">Royal Haven</h4>
              <div class="investment-badge">Affordable</div>
            </div>
            <p class="text-gray-600 text-sm mb-4 flex items-center">
              <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Ogwashi-Uku, Delta State
            </p>
            
            <div class="flex justify-between items-center mb-4">
              <div>
                <div class="text-xs text-gray-500">Starting Price</div>
                <div class="text-orange-600 font-bold text-xl">₦950,000</div>
              </div>
              <div>
                <div class="text-xs text-gray-500">Plot Sizes</div>
                <div class="font-semibold">350 SQM</div>
              </div>
            </div>
            
            <div class="grid grid-cols-2 gap-3 mb-6">
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-home text-xs"></i>
                </div>
                <span class="text-sm">Residential Zone</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-school text-xs"></i>
                </div>
                <span class="text-sm">Near Schools</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-shopping-cart text-xs"></i>
                </div>
                <span class="text-sm">Market Access</span>
              </div>
              <div class="flex items-center">
                <div class="feature-icon mr-2">
                  <i class="fas fa-hospital text-xs"></i>
                </div>
                <span class="text-sm">Medical Facilities</span>
              </div>
            </div>
            
            <div class="flex gap-2">
              <a href="forms/RoyalHaven-Subscription.pdf" download class="btn-secondary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-download mr-2"></i> Download Form
              </a>
              <a href="contact.php" class="btn-primary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-info-circle mr-2"></i> Details
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- More Estates -->
      <div class="grid md:grid-cols-3 gap-8 mt-8">
        <!-- Estate 4 -->
        <div class="estate-card bg-white">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Legacy Gardens" class="w-full h-64 object-cover">
            <div class="feature-badge">Coming Soon</div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-indigo-700">Legacy Gardens</h4>
            <p class="text-gray-600 text-sm mb-4 flex items-center">
              <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Ibusa, Delta State
            </p>
            <div class="text-orange-600 font-bold text-xl mb-4">₦1,100,000</div>
            <div class="flex gap-2">
              <button class="btn-secondary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-bell mr-2"></i> Notify Me
              </button>
            </div>
          </div>
        </div>
        
        <!-- Estate 5 -->
        <div class="estate-card bg-white">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Smart Ville" class="w-full h-64 object-cover">
            <div class="feature-badge">Commercial</div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-indigo-700">Smart Ville</h4>
            <p class="text-gray-600 text-sm mb-4 flex items-center">
              <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Umunede, Delta
            </p>
            <div class="text-orange-600 font-bold text-xl mb-4">₦850,000</div>
            <div class="flex gap-2">
              <button class="btn-secondary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-bell mr-2"></i> Notify Me
              </button>
            </div>
          </div>
        </div>
        
        <!-- Estate 6 -->
        <div class="estate-card bg-white">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Crest View" class="w-full h-64 object-cover">
            <div class="feature-badge">Waterfront</div>
          </div>
          <div class="p-6">
            <h4 class="text-xl font-bold text-indigo-700">Crest View</h4>
            <p class="text-gray-600 text-sm mb-4 flex items-center">
              <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Isele-Azagba
            </p>
            <div class="text-orange-600 font-bold text-xl mb-4">₦1,300,000</div>
            <div class="flex gap-2">
              <button class="btn-secondary w-full text-center py-2 rounded-lg text-sm">
                <i class="fas fa-bell mr-2"></i> Notify Me
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BENEFITS SECTION -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Invest With LA'REALEZA</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">We make property investment secure, profitable, and hassle-free</p>
      </div>
      
      <div class="grid md:grid-cols-4 gap-8">
        <div class="text-center p-6">
          <div class="w-16 h-16 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl mx-auto mb-6">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h4 class="font-bold text-lg mb-3">Verified Titles</h4>
          <p class="text-gray-600">All our properties come with government-approved documentation and clear titles.</p>
        </div>
        
        <div class="text-center p-6">
          <div class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 text-2xl mx-auto mb-6">
            <i class="fas fa-chart-line"></i>
          </div>
          <h4 class="font-bold text-lg mb-3">High Appreciation</h4>
          <p class="text-gray-600">Strategic locations ensure your investment grows significantly over time.</p>
        </div>
        
        <div class="text-center p-6">
          <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-2xl mx-auto mb-6">
            <i class="fas fa-hand-holding-usd"></i>
          </div>
          <h4 class="font-bold text-lg mb-3">Flexible Payments</h4>
          <p class="text-gray-600">Spread your payments with our 3-12 month plans, no extra charges.</p>
        </div>
        
        <div class="text-center p-6">
          <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 text-2xl mx-auto mb-6">
            <i class="fas fa-hard-hat"></i>
          </div>
          <h4 class="font-bold text-lg mb-3">Full Development</h4>
          <p class="text-gray-600">From land to construction, we handle everything for a complete solution.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-indigo-800 to-indigo-600 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Secure Your Dream Property?</h2>
      <p class="text-xl mb-10 max-w-2xl mx-auto">Contact our real estate specialists today for a personalized consultation.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="contact.php" class="btn-secondary px-8 py-4 rounded-full text-lg font-semibold inline-block">Schedule Consultation</a>
        <a href="tel:07007003344" class="bg-white text-indigo-700 px-8 py-4 rounded-full text-lg font-semibold inline-block hover:bg-gray-100 transition-colors">Call: 07007003344</a>
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
          <h4 class="text-lg font-bold mb-4">Our Estates</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Grand Manor</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Pinnacle Smart City</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Royal Haven</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Legacy Gardens</a></li>
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
              <span>07007003344</span>
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

</body>
</html>