<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us | LA'REALEZA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9fafb 0%, #f0f4f8 100%);
      scroll-behavior: smooth;
    }
    
    .contact-hero {
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
    
    .contact-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
    
    .contact-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .contact-info-card {
      background: linear-gradient(135deg, #4f46e5 0%, #7c73e9 100%);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(79, 70, 229, 0.2);
    }
    
    .form-input:focus {
      border-color: #4f46e5;
      box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
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
    
    .map-container {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .hours-card {
      background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(249, 115, 22, 0.2);
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
        <a href="about.php" class="hover:text-orange-500 transition-colors">About</a>
        <a href="contact.php" class="text-indigo-700 font-semibold">Contact</a>
      </nav>
      <a href="tel:07007003344" class="hidden md:block bg-orange-500 text-white px-6 py-2 rounded-full font-medium hover:bg-orange-600 transition-colors">
        <i class="fas fa-phone mr-2"></i> Call Now
      </a>
      <button class="md:hidden text-gray-600">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="contact-hero text-white py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Connect With LA'REALEZA</h1>
      <p class="text-xl max-w-3xl mx-auto mb-8">Have questions about our estates or services? Our team is ready to assist you.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#contact-form" class="btn-secondary px-8 py-4 rounded-full text-lg font-semibold">Send a Message</a>
        <a href="tel:07007003344" class="bg-white text-indigo-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-colors">
          <i class="fas fa-phone mr-2"></i> 07007003344
        </a>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Reach out to us through any of these convenient methods</p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8 mb-16">
        <div class="contact-card bg-white p-8 text-center">
          <div class="w-16 h-16 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl mx-auto mb-6">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h4 class="text-xl font-bold text-indigo-800 mb-3">Our Offices</h4>
          <div class="space-y-4">
            <div>
              <h5 class="font-semibold text-gray-800 mb-1">Lagos Office</h5>
              <p class="text-gray-600">39, Alhaji Olakunle Street, Ijesha Surulere Lagos</p>
            </div>
            <div>
              <h5 class="font-semibold text-gray-800 mb-1">Asaba Office</h5>
              <p class="text-gray-600">No 1 Tosan Ifedigbo Crescent, Nnebisi Road, Opp SPC, Asaba</p>
            </div>
          </div>
        </div>
        
        <div class="contact-card bg-white p-8 text-center">
          <div class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 text-2xl mx-auto mb-6">
            <i class="fas fa-phone-alt"></i>
          </div>
          <h4 class="text-xl font-bold text-indigo-800 mb-3">Contact Details</h4>
          <div class="space-y-4">
            <div>
              <h5 class="font-semibold text-gray-800 mb-1">Phone</h5>
              <p class="text-gray-600">07007003344</p>
            </div>
            <div>
              <h5 class="font-semibold text-gray-800 mb-1">Email</h5>
              <p class="text-gray-600">info@larealeza.com</p>
            </div>
            <div>
              <h5 class="font-semibold text-gray-800 mb-1">Social Media</h5>
              <div class="flex justify-center gap-4 mt-2">
                <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 hover:bg-indigo-200">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 hover:bg-indigo-200">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 hover:bg-indigo-200">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="hours-card text-white p-8 text-center">
          <div class="w-16 h-16 rounded-full bg-orange-200 flex items-center justify-center text-orange-700 text-2xl mx-auto mb-6">
            <i class="fas fa-clock"></i>
          </div>
          <h4 class="text-xl font-bold text-white mb-3">Business Hours</h4>
          <div class="space-y-3">
            <div class="flex justify-between">
              <span>Monday - Friday</span>
              <span>9:00 AM - 5:00 PM</span>
            </div>
            <div class="flex justify-between">
              <span>Saturday</span>
              <span>10:00 AM - 3:00 PM</span>
            </div>
            <div class="flex justify-between">
              <span>Sunday</span>
              <span>Closed</span>
            </div>
          </div>
          <div class="mt-6 bg-white text-orange-600 py-2 px-4 rounded-full font-semibold inline-block">
            <i class="fas fa-calendar-check mr-2"></i> Schedule Appointment
          </div>
        </div>
      </div>
      
      <!-- Contact Form and Maps -->
      <div class="grid md:grid-cols-2 gap-10">
        <!-- Contact Form -->
        <div id="contact-form" class="contact-card bg-white p-8">
          <h3 class="text-2xl font-bold text-indigo-800 mb-6">Send Us a Message</h3>
          <form class="space-y-4">
            <div>
              <label class="block text-gray-700 mb-2" for="name">Full Name</label>
              <input type="text" id="name" placeholder="Your full name" class="form-input w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500" required />
            </div>
            
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <label class="block text-gray-700 mb-2" for="email">Email Address</label>
                <input type="email" id="email" placeholder="Your email" class="form-input w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500" required />
              </div>
              <div>
                <label class="block text-gray-700 mb-2" for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="Your phone number" class="form-input w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500" required />
              </div>
            </div>
            
            <div>
              <label class="block text-gray-700 mb-2" for="subject">Subject</label>
              <select id="subject" class="form-input w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500" required>
                <option value="">Select a subject</option>
                <option value="land">Land Inquiry</option>
                <option value="construction">Construction Services</option>
                <option value="interior">Interior Design</option>
                <option value="appointment">Schedule Appointment</option>
                <option value="other">Other</option>
              </select>
            </div>
            
            <div>
              <label class="block text-gray-700 mb-2" for="message">Your Message</label>
              <textarea id="message" rows="5" placeholder="How can we assist you?" class="form-input w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500" required></textarea>
            </div>
            
            <button type="submit" class="btn-primary w-full py-4 rounded-lg font-semibold">
              <i class="fas fa-paper-plane mr-2"></i> Send Message
            </button>
          </form>
        </div>
        
        <!-- Maps Section -->
        <div>
          <h3 class="text-2xl font-bold text-indigo-800 mb-6">Our Office Locations</h3>
          
          <div class="space-y-8">
            <!-- Lagos Office Map -->
            <div class="contact-card bg-white p-6">
              <h4 class="text-xl font-bold text-indigo-700 mb-4 flex items-center">
                <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Lagos Office
              </h4>
              <p class="text-gray-600 mb-4">39, Alhaji Olakunle Street, Ijesha Surulere Lagos</p>
              <div class="map-container h-64 bg-gray-200 rounded-lg overflow-hidden">
                <!-- In a real implementation, you would embed a Google Maps iframe here -->
                <div class="w-full h-full flex items-center justify-center bg-indigo-100">
                  <div class="text-center">
                    <i class="fas fa-map-marked-alt text-4xl text-indigo-600 mb-3"></i>
                    <p class="text-indigo-800 font-medium">Lagos Office Location</p>
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-800">
                  <i class="fas fa-directions mr-2"></i> Get Directions
                </a>
              </div>
            </div>
            
            <!-- Asaba Office Map -->
            <div class="contact-card bg-white p-6">
              <h4 class="text-xl font-bold text-indigo-700 mb-4 flex items-center">
                <i class="fas fa-map-marker-alt text-orange-500 mr-2"></i> Asaba Office
              </h4>
              <p class="text-gray-600 mb-4">No 1 Tosan Ifedigbo Crescent, Nnebisi Road, Opp SPC, Asaba</p>
              <div class="map-container h-64 bg-gray-200 rounded-lg overflow-hidden">
                <!-- In a real implementation, you would embed a Google Maps iframe here -->
                <div class="w-full h-full flex items-center justify-center bg-indigo-100">
                  <div class="text-center">
                    <i class="fas fa-map-marked-alt text-4xl text-indigo-600 mb-3"></i>
                    <p class="text-indigo-800 font-medium">Asaba Office Location</p>
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-800">
                  <i class="fas fa-directions mr-2"></i> Get Directions
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="py-16 bg-indigo-50">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Find answers to common questions about contacting us</p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-8">
        <div class="contact-card bg-white p-8">
          <h4 class="text-xl font-bold text-indigo-800 mb-3">How quickly do you respond to inquiries?</h4>
          <p class="text-gray-600">We strive to respond to all inquiries within 24 business hours. For urgent matters, please call our office directly.</p>
        </div>
        
        <div class="contact-card bg-white p-8">
          <h4 class="text-xl font-bold text-indigo-800 mb-3">Do I need to schedule an appointment?</h4>
          <p class="text-gray-600">While walk-ins are welcome at our offices, we recommend scheduling an appointment to ensure dedicated time with our specialists.</p>
        </div>
        
        <div class="contact-card bg-white p-8">
          <h4 class="text-xl font-bold text-indigo-800 mb-3">What documents should I bring to a consultation?</h4>
          <p class="text-gray-600">Please bring any identification documents and information about your property needs or investment goals.</p>
        </div>
        
        <div class="contact-card bg-white p-8">
          <h4 class="text-xl font-bold text-indigo-800 mb-3">Do you offer virtual consultations?</h4>
          <p class="text-gray-600">Yes, we offer virtual consultations via Zoom, WhatsApp, or phone call for your convenience.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-indigo-800 to-indigo-600 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Property Journey?</h2>
      <p class="text-xl mb-10 max-w-2xl mx-auto">Contact us today to schedule a consultation with one of our real estate specialists.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="tel:07007003344" class="btn-secondary px-8 py-4 rounded-full text-lg font-semibold inline-block">
          <i class="fas fa-phone mr-2"></i> Call Now: 07007003344
        </a>
        <a href="#contact-form" class="bg-white text-indigo-700 px-8 py-4 rounded-full text-lg font-semibold inline-block hover:bg-gray-100 transition-colors">
          <i class="fas fa-envelope mr-2"></i> Send Message
        </a>
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
              <div>
                <p class="font-medium">Lagos Office</p>
                <p>39, Alhaji Olakunle Street, Ijesha Surulere Lagos</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-map-marker-alt mt-1 mr-3 text-orange-500"></i>
              <div>
                <p class="font-medium">Asaba Office</p>
                <p>No 1 Tosan Ifedigbo Crescent, Nnebisi Road, Opp SPC, Asaba</p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-phone-alt mt-1 mr-3 text-orange-500"></i>
              <span>07007003344</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-envelope mt-1 mr-3 text-orange-500"></i>
              <span>info@larealeza.com</span>
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