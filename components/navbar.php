  <header class="fixed top-0 z-50 w-full">
      <nav id="navbar"
          class="container-fluid mx-auto px-4 sm:px-6 pt-3 sm:pt-4 flex items-center bg-transparent transition-all duration-300">
          <!-- Mobile Logo (left side) -->
          <div class="lg:hidden flex items-center mr-auto">
              <a href="#" class="w-16 h-16 flex items-center justify-center">
                  <img src="./assets/images/NIP WHITE LOGO PNG.png" alt="logo" class="w-full h-full object-contain">
              </a>
          </div>

          <div class="hidden lg:flex space-x-4 xl:space-x-6 text-[#fff] mx-auto pt-2">
              <!-- Desktop Navigation Items -->
              <a href="index.php"
                  class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base" style="margin-left: 100px !important;">Home</a>
              <a href="properties.php"
                  class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Sale</a>
              <a href="#" class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Projects</a>
              <a href="developers.php" class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Developers</a>
              <a href="#" class="sm:w-14 sm:h-14 md:w-[7rem] md:h-[6rem] flex items-center justify-center mt-[-30px]">
                  <img src="./assets/images/NIP WHITE LOGO PNG.png" alt="logo" class="w-full h-full">
              </a>
              <a href="area-page.php"
                  class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Areas</a>
              <!-- Desktop Dropdown -->
              <div class="relative group">
                  <button
                      class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base flex items-center">
                      NIP Approach
                      <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                  </button>

                  <!-- Desktop Dropdown Content -->
                  <div
                      class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-[40rem] bg-white rounded-xl shadow-2xl py-6 px-8 z-50 hidden group-hover:grid grid-cols-2 gap-8">
                      <!-- Premium Services Column -->
                      <div>
                          <h3 class="text-base font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">Premium
                              Services</h3>
                          <ul class="space-y-2 text-primary">
                              <!-- Smart Home Personalization -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="premium-services.html">smart home Personalization</a>
                              </li>

                              <!-- Concierge Relocation Service -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="">Concierge Relocation Service</a>
                              </li>

                              <!-- Property Valuation -->
                              <li class="hover:text-secondary cursor-pointer">
                                  Property Valuation
                              </li>

                              <!-- Luxury Interior Design -->
                              <li class="hover:text-secondary cursor-pointer">
                                  Luxury Interior Design Consultant
                              </li>

                              <!-- Developer Pre-Releases -->
                              <li class="hover:text-secondary cursor-pointer">
                                  Exclusive Access to Developer Pre-Releases
                              </li>
                          </ul>
                      </div>

                      <!-- VIP Services Column -->
                      <div>
                          <h3 class="text-base font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">VIP
                              Services</h3>
                          <ul class="space-y-2 text-primary">
                              <!-- Lifestyle Management -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="vip-services.html#lifestyle">Lifestyle Management Concierge</a>
                              </li>

                              <!-- Private Investment Advisory -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="vip-services.html#privateinvestment">Private Investment Advisory</a>
                              </li>

                              <!-- Jet & Yacht Club -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="vip-services.html#jet&clubmembership">Jet & Yacht Club Membership Access</a>
                              </li>

                              <!-- Legacy Circle Retreat -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="vip-services.html#legacycircle">Annual Invitation to "Legacy Circle" Retreat</a>
                              </li>

                              <!-- Golden Visa -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="vip-services.html#goldenvisa">Golden Visa</a>
                              </li>

                              <!-- Mortgage Guidance -->
                              <li class="hover:text-secondary cursor-pointer">
                                  <a href="vip-services.html#guidance"> Mortgage Guidance</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <a href="about-us.php"
                  class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">About Us</a>
              <a href="contact-us.php"
                  class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Contact Us</a>
          </div>

          <!-- Mobile Menu Button -->
          <button id="mobile-menu-button" class="lg:hidden text-white focus:outline-none p-2 ml-4">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
          </button>
      </nav>

      <!-- Mobile Menu -->
      <div id="mobile-menu"
          class="lg:hidden hidden bg-black bg-opacity-95 text-white px-4 sm:px-6 py-4 space-y-4 fixed inset-0 z-40 mt-16 sm:mt-20 overflow-y-auto">
          <div class="container mx-auto">
              <div class="flex flex-col space-y-6 py-4">
                  <a href="index.php" class="block font-medium hover:text-[#9e9e9e] py-2 border-b border-gray-700 pb-4">Home</a>
                  <a href="properties.php" class="block font-medium hover:text-[#9e9e9e] py-2 border-b border-gray-700 pb-4">Sale</a>
                  <a href="#" class="block font-medium hover:text-[#9e9e9e] py-2 border-b border-gray-700 pb-4">Projects</a>
                  <a href="developers.php" class="block font-medium hover:text-[#9e9e9e] py-2 border-b border-gray-700 pb-4">Developers</a>
                  <a href="area-page.php" class="block font-medium hover:text-[#9e9e9e] py-2 border-b border-gray-700 pb-4">Areas</a>

                  <!-- Mobile Dropdown Trigger -->
                  <div class="border-b border-gray-700 pb-4">
                      <button id="mobile-nip-approach"
                          class="w-full flex justify-between items-center font-medium hover:text-[#9e9e9e] py-2">
                          NIP Approach
                          <svg id="mobile-nip-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none"
                              stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                          </svg>
                      </button>

                      <!-- Mobile Dropdown Content -->
                      <div id="mobile-nip-dropdown" class="hidden pl-4 space-y-4 mt-3">
                          <!-- Premium Services Section -->
                          <div class="space-y-3">
                              <h3 class="text-sm font-semibold text-gray-300 uppercase tracking-wider">Premium Services</h3>
                              <ul class="space-y-3 pl-2">
                                  <li>
                                      <a href="premium-services.html" class="block py-1 text-gray-300 hover:text-white">Smart Home Personalization</a>
                                  </li>
                                  <li>
                                      <a href="#" class="block py-1 text-gray-300 hover:text-white">Concierge Relocation Service</a>
                                  </li>
                                  <li>
                                      <a href="#" class="block py-1 text-gray-300 hover:text-white">Property Valuation</a>
                                  </li>
                                  <li>
                                      <a href="#" class="block py-1 text-gray-300 hover:text-white">Luxury Interior Design Consultant</a>
                                  </li>
                                  <li>
                                      <a href="#" class="block py-1 text-gray-300 hover:text-white">Exclusive Access to Developer Pre-Releases</a>
                                  </li>
                              </ul>
                          </div>

                          <!-- VIP Services Section -->
                          <div class="space-y-3 pt-2">
                              <h3 class="text-sm font-semibold text-gray-300 uppercase tracking-wider">VIP Services</h3>
                              <ul class="space-y-3 pl-2">
                                  <li>
                                      <a href="vip-services.html#lifestyle" class="block py-1 text-gray-300 hover:text-white">Lifestyle Management Concierge</a>
                                  </li>
                                  <li>
                                      <a href="vip-services.html#privateinvestment" class="block py-1 text-gray-300 hover:text-white">Private Investment Advisory</a>
                                  </li>
                                  <li>
                                      <a href="vip-services.html#jet&clubmembership" class="block py-1 text-gray-300 hover:text-white">Jet & Yacht Club Membership Access</a>
                                  </li>
                                  <li>
                                      <a href="vip-services.html#legacycircle" class="block py-1 text-gray-300 hover:text-white">Annual Invitation to "Legacy Circle" Retreat</a>
                                  </li>
                                  <li>
                                      <a href="vip-services.html#goldenvisa" class="block py-1 text-gray-300 hover:text-white">Golden Visa</a>
                                  </li>
                                  <li>
                                      <a href="vip-services.html#guidance" class="block py-1 text-gray-300 hover:text-white">Mortgage Guidance</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <a href="about-us.php" class="block font-medium hover:text-[#9e9e9e] py-2 border-b border-gray-700 pb-4">About us</a>
                  <a href="contact-us.php" class="block font-medium hover:text-[#9e9e9e] py-2">Contact us</a>
              </div>
          </div>
      </div>
  </header>


  <script>
      // Navbar scroll effect - Trigger after 90% of viewport height
      window.addEventListener("scroll", () => {
          const navbar = document.getElementById("navbar");
          const scrollPosition = window.scrollY;

          if (scrollPosition >= window.innerHeight * 0.6) {
              navbar.classList.remove("bg-transparent");
              navbar.style.background = "linear-gradient(135deg, rgba(14, 19, 25, 0.8), rgba(15, 32, 39, 0.8), rgba(32, 58, 67, 0.8), rgba(44, 83, 100, 0.9))";
          } else {
              navbar.classList.add("bg-transparent");
              navbar.style.background = "transparent";
          }
      });

      // Mobile menu toggle
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');

      mobileMenuButton.addEventListener('click', (e) => {
          e.stopPropagation();
          mobileMenu.classList.toggle('hidden');
      });

      // NIP Approach dropdown toggle for mobile
      const mobileNipButton = document.getElementById('mobile-nip-approach');
      const mobileNipDropdown = document.getElementById('mobile-nip-dropdown');
      const mobileNipArrow = document.getElementById('mobile-nip-arrow');

      mobileNipButton.addEventListener('click', (e) => {
          e.stopPropagation();
          mobileNipDropdown.classList.toggle('hidden');
          mobileNipArrow.classList.toggle('rotate-180');
      });

      // Close dropdown when clicking empty space inside mobile menu
      mobileMenu.addEventListener('click', (e) => {
          // Check if click is on empty space (directly on the menu container)
          if (e.target === mobileMenu) {
              mobileMenu.classList.add('hidden');
              if (mobileNipDropdown) {
                  mobileNipDropdown.classList.add('hidden');
                  mobileNipArrow.classList.remove('rotate-180');
              }
          }
      });

      // Close menus when clicking outside
      document.addEventListener('click', (e) => {
          if (!mobileMenu.contains(e.target) && e.target !== mobileMenuButton) {
              mobileMenu.classList.add('hidden');
          }

          if (mobileNipDropdown && !mobileNipDropdown.contains(e.target) && e.target !== mobileNipButton) {
              mobileNipDropdown.classList.add('hidden');
              mobileNipArrow.classList.remove('rotate-180');
          }
      });

      // Close mobile menu when clicking on a link
      document.querySelectorAll('#mobile-menu a').forEach(link => {
          link.addEventListener('click', () => {
              mobileMenu.classList.add('hidden');
              if (mobileNipDropdown) {
                  mobileNipDropdown.classList.add('hidden');
                  mobileNipArrow.classList.remove('rotate-180');
              }
          });
      });

      // Stop propagation for clicks inside dropdowns
      if (mobileNipDropdown) {
          mobileNipDropdown.addEventListener('click', (e) => {
              e.stopPropagation();
          });
      }


  </script>