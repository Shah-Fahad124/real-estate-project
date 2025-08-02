<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - NIP Real Estate</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
    .card-wrapper {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      z-index: 100;
    }

    .card-wrapper::before {
      content: '';
      width: 90%;
      min-width: 220px;
      max-width: 300px;
      min-height: 200px;
      max-height: 300px;
      background-size: cover;
      background-position: center;
      border-radius: 0.5rem;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      margin-bottom: -110px;
      z-index: 200;
      display: block;
    }

    /* shange background images for each agent */
    .agent1::before {
      background-image: url('./assets/images/buy-sell2.jpg')
    }

    .agent2::before {
      background-image: url('./assets/images/buy-sell2.jpg')
    }

    .agent3::before {
      background-image: url('./assets/images/buy-sell2.jpg')
    }

    .agent4::before {
      background-image: url('./assets/images/buy-sell2.jpg')
    }
  </style>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0E1319',
            secondary: '#9E9E9E',
            dark: '#505050',
            light: '#D3D3D3'
          },
          fontFamily: {
            heading: ['Agatho', 'Cormorant Garamond', 'serif'],
            subheading: ['"Playfair Display"', 'serif'],
            body: ['Gilroy', 'Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>

</head>

<body class="font-body min-h-screen flex flex-col overflow-x-hidden">
    <!-- Navbar -->
  <?php include 'components/navbar.php'; ?>

  <!-- Hero Section -->
  <section class="h-[30vh] md:h-[40vh] lg:h-[60vh] flex items-center relative"
    style="background:url('assets/images/about-us-hero-bg-img.jpg'); background-repeat: no-repeat;background-size: cover;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-4 font-heading">About Us</h1>
      <!-- <nav class="flex justify-center space-x-2">
        <a href="index.php" class="hover:text-[#dcdcdc]">Home</a>
        <span>—</span>
        <a href="premium-services.html" class="hover:text-[#dcdcdc]">About Us</a>
        <span>—</span>
        <a href="contact-us.html" class="hover:text-[#dcdcdc]">Contact Us</a>
      </nav> -->
    </div>
    <div class="bg-black bg-opacity-70 absolute inset-0 w-full h-full z-2"></div>
  </section>

  <!-- Why Choose Section -->
  <section class="w-full py-16 bg-white px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
      <div
        class="grid grid-cols-1 items-center justify-items-center text-center lg:grid-cols-4 lg:text-left lg:justify-items-start gap-8 items-start">

        <div class="lg:col-span-1">
          <span
            class="inline-block bg-primary text-white text-xs font-medium px-4 py-2 rounded-full font-body mb-4">Exclusive
            Living</span>
          <h2 class="text-3xl lg:text-4xl font-bold text-primary font-heading leading-tight mb-2">Why
            Choose<br>NIP?</h2>
        </div>
        <div
          class="lg:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-10 relative justify-items-center text-center lg:text-left lg:justify-items-start">
          <!-- Feature 1 -->
          <div class="flex flex-col items-center lg:items-start space-y-3">
            <div class="w-20 h-20 text-secondary">
              <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0v-4a1 1 0 011-1h2a1 1 0 011 1v4" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-primary font-subheading">Legacy Investments</h3>
            <p class="text-secondary text-[17px] font-heading leading-relaxed">We curate properties in
              sought-after global districts, empowering clients to build generational legacies through
              secure, high-yield investments.</p>
          </div>

          <!-- Feature 2 -->
          <div class="flex flex-col items-center lg:items-start space-y-3">
            <div class="w-20 h-20 text-secondary">
              <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M12 3v18m9-9H3" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-primary font-subheading">Turnkey Luxury</h3>
            <p class="text-secondary text-[17px] font-heading leading-relaxed">Fully furnished, serviced
              offerings ready for immediate occupancy. Every detail reflects curated sophistication
              and elegance.</p>
          </div>

          <!-- Feature 3 -->
          <div class="flex flex-col items-center lg:items-start space-y-3">
            <div class="w-20 h-20 text-secondary">
              <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-primary font-subheading whitespace-nowrap">Architectural Excellence</h3>
            <p class="text-secondary text-[17px] font-heading leading-relaxed">From timeless façades to
              efficient layouts, our properties reflect the synergy of form and function—built to
              impress and endure.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Odyssey Section -->
  <section class="w-full py-16 bg-[#283344]">
    <!-- First Odyssey Section -->
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center justify-center gap-y-8 mb-10 lg:mb-0 px-4">
      <!-- Left Column - Image -->
      <div class="w-full h-[300px] lg:h-[90vh] lg:w-[60%]">
        <img src="./assets/images/odsey-img1.jpg" alt="Modern apartment building"
          class="w-full h-full object-cover object-center rounded-tr-lg lg:rounded-br-lg">
      </div>

      <!-- Right Column - Content -->
      <div class="w-full lg:w-[40%] flex items-center px-4 sm:px-6 lg:px-10 bg-transparent mt-6 lg:mt-0">
        <div class="space-y-4 text-center lg:text-left">
          <span class="inline-block bg-secondary text-white text-xs font-medium px-4 py-2 rounded-full font-body">
            Where Vision Meets Ownership
          </span>
          <h2 class="text-3xl xl:text-4xl text-white font-bold font-heading leading-tight">
            A Legacy Begins With a Door You Open
          </h2>
          <p class="text-[#cecece] text-base leading-relaxed font-subheading">
            At NIP, property is more than space—it's a strategic asset. We guide discerning investors and visionary
            homeowners toward acquisitions that echo trust, privacy, and global prestige.
          </p>
          <div class="space-y-2 bg-white text-primary p-5 rounded-lg">
            <h3 class="text-xl font-bold font-subheading">Your Next Move, Curated</h3>
            <p class="text-base leading-relaxed font-body">
              Our team offers seamless, fully-managed transitions—whether listing or living. Enter with clarity. Exit
              with success.
            </p>
            <div class="flex items-center justify-center lg:justify-start mt-3">
              <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Odyssey Section (Reversed Layout) -->
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center justify-center gap-y-8 px-4">
      <!-- Left Column - Content -->
      <div class="w-full lg:w-[40%] flex items-center px-4 sm:px-6 lg:px-10 mb-6 lg:mb-0">
        <div class="space-y-4 text-center lg:text-left">
          <span class="inline-block bg-secondary text-white text-xs font-medium px-4 py-2 rounded-full font-body">
            Unlocking Dreams, Opening Doors
          </span>
          <h2 class="text-3xl xl:text-4xl font-bold text-white font-heading leading-tight">
            Global Property, Personal Touch
          </h2>
          <p class="text-[#cecece] text-base leading-relaxed font-subheading">
            With discretion and expertise, NIP curates global real estate opportunities designed for long-term value.
            Every property reflects a legacy built on trust and thoughtful design.
          </p>
          <div class="space-y-2 bg-white text-primary p-5 rounded-lg">
            <h3 class="text-xl font-bold font-subheading">Sell with Strategy</h3>
            <p class="text-base leading-relaxed font-body">
              Your home is a statement. Our approach ensures it reaches the right buyers—with impact, insight, and
              integrity.
            </p>
            <div class="flex items-center justify-center lg:justify-start mt-3">
              <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column - Image -->
      <div class="w-full h-[300px] lg:h-[90vh] lg:w-[60%]">
        <img src="./assets/images/odsey-img2.jpg" alt="Modern apartment building"
          class="w-full h-full object-cover object-center rounded-tr-lg lg:rounded-br-lg">
      </div>
    </div>
  </section>



  <!-- Testimonial Section -->
  <!-- <section class="w-4/5 mx-auto flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-5xl w-full text-center flex flex-col justify-center h-full">

   
      <div class="mb-8">
        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-secondary mx-auto" fill="currentColor" viewBox="0 0 24 24">
          <path
            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z" />
        </svg>
      </div>

      <blockquote class="mb-10">
        <p
          class="text-2xl sm:text-3xl xl:text-4xl font-bold text-primary font-heading leading-relaxed max-w-4xl mx-auto">
          “Beyond Boundaries, We Craft Experiences. More than Properties — We Offer Possibilities.”
        </p>
      </blockquote>

      <div class="flex items-center justify-center mb-12">
        <div class="flex items-center space-x-4">
          <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client"
            class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border-2 border-light shadow-md">
          <div class="text-left">
            <h4 class="text-base sm:text-lg font-bold text-primary font-subheading">Jenny Loren</h4>
            <p class="text-sm text-secondary font-body">Residential Appraiser</p>
          </div>
        </div>

      <div>
        <p class="text-sm text-secondary uppercase tracking-widest font-body mb-6">Trusted By</p>

        <div class="w-full overflow-x-auto">
          <div
            class="flex items-center justify-between gap-6 min-w-max px-4 py-2 text-dark font-bold text-sm sm:text-base font-body whitespace-nowrap">
            <div class="flex-shrink-0">Mackora</div>
            <div class="flex-shrink-0">Esterlen</div>
            <div class="flex-shrink-0">CVX</div>
            <div class="flex-shrink-0">Golben</div>
            <div class="flex-shrink-0">Jertix</div>
            <div class="flex-shrink-0">Nimba</div>
            <div class="flex-shrink-0">Jahuka</div>
          </div>
        </div>


        <div class="grid grid-cols-2 gap-4 mt-6 sm:hidden text-dark font-bold text-sm font-body text-center">
          <div>Golben</div>
          <div>Jertix</div>
        </div>
        <div
          class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-2 lg:hidden text-dark font-bold text-sm font-body text-center">
          <div>Nimba</div>
          <div>Jahuka</div>
        </div>
      </div>
    </div>
  </section> -->


  <!--Second Testimonials Section -->
  <section class="w-screen bg-[#fbfbfb] py-10 lg:py-16 px-4 sm:px-5 lg:px-5">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <!-- Left Column - Message -->
      <div class="space-y-6">
        <span class="inline-block bg-[#9E9E9E] text-white text-xs font-medium px-4 py-2 rounded-full font-body">
          Trusted by Global Investors
        </span>

        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-heading text-[#0E1319] font-bold leading-tight">
          Real Stories, Real Trust
        </h2>

        <p class="text-[#505050] text-base leading-relaxed font-body">
          At NIP, we deliver experiences that transcend transactions. Our clients are global achievers, legacy builders,
          and discerning investors who value precision, clarity, and long-term vision.
        </p>

        <div class="grid grid-cols-2 gap-6">
          <div>
            <h3 class="text-4xl font-heading text-[#0E1319] font-bold">15K+</h3>
            <p class="text-[#505050] text-sm mt-1 font-body">Global Clients Served</p>
          </div>
          <div>
            <h3 class="text-4xl font-heading text-[#0E1319] font-bold">1000+</h3>
            <p class="text-[#505050] text-sm mt-1 font-body">Strategic Properties Listed</p>
          </div>
        </div>
      </div>

      <!-- Right Column - Testimonials -->
      <div class="space-y-6">

        <!-- Testimonial 1 -->
        <div class="bg-white p-6 lg:p-8 rounded-xl shadow border border-gray-200">
          <p class="text-[#505050] text-sm leading-relaxed font-body mb-4">
            “NIP exceeded every expectation. Their team helped us secure a property in Dubai that not only matched our
            lifestyle, but also promised long-term value.”
          </p>
          <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full" alt="Client">
              <span class="text-sm font-medium text-[#0E1319] font-subheading">R. Alvarez</span>
            </div>
            <span class="text-xs text-[#9E9E9E] font-body">Legacy Investor</span>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white p-6 lg:p-8 rounded-xl shadow border border-gray-200">
          <p class="text-[#505050] text-sm leading-relaxed font-body mb-4">
            “From consultation to closing, NIP operated with unmatched discretion and clarity. Their professionalism
            redefines luxury brokerage.”
          </p>
          <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full" alt="Client">
              <span class="text-sm font-medium text-[#0E1319] font-subheading">L. Chen</span>
            </div>
            <span class="text-xs text-[#9E9E9E] font-body">Family Office Advisor</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- our mission section -->
  <section class="relative py-10 md:py-15 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-5">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        <!-- Vision Card -->
        <div class="relative overflow-hidden rounded-xl shadow-2xl h-96 lg:h-[80vh]">
          <!-- Background Image -->
          <div
            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')] bg-cover bg-center">
          </div>
          <div class="absolute inset-0 bg-black bg-opacity-50"></div>
          <div class="relative h-full flex flex-col justify-end p-10 text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Our Vision</h2>
            <p class="text-lg md:text-xl leading-relaxed font-subheading">
              To be the first name in precision, discretion and transformative experiences redefining modern living in
              Dubai's luxury property and lifestyle industry.
            </p>
          </div>
        </div>

        <!-- Mission Card -->
        <div class="relative overflow-hidden rounded-xl shadow-2xl h-96 lg:h-[80vh]">
          <!-- Background Image -->
          <div
            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1400&q=80')] bg-cover bg-center">
          </div>
          <div class="absolute inset-0 bg-black bg-opacity-50"></div>
          <div class="relative h-full flex flex-col justify-end p-10 text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Our Mission</h2>
            <p class="text-lg md:text-xl leading-relaxed font-subheading">
              To create intelligent, elegant and individualized property and lifestyle solutions, where living is not
              simply about the space, but the entire experience, in any and every part of the home.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Agents section -->
  <!-- <section class="py-10 bg-[linear-gradient(135deg,#0E1319,#151A22,#1F2733,#283344)]  text-center -z-10 text-white">
    <h2 class="text-4xl font-bold mb-4 font-heading">Real Estate Agents</h2>
    <p class="max-w-2xl mx-auto mb-12 font-subheading">
      Meet our top professionals in the real estate market.
    </p>

    <div
      class="cards  grid mb-12 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 px-4 max-w-6xl mx-auto">

      <div class="card-wrapper agent1">
        <div
          class="bg-gradient-to-b  from-blue-100 to-yellow-50 pt-32 flex flex-col gap-4  rounded-lg shadow-lg pb-6 px-4 w-full max-w-xs text-center">
          <h3 class="text-xl font-semibold text-black font-heading">Christopher Baker</h3>
          <p class="text-gray-600 text-sm">Residential Property Manager</p>
          <div class="flex justify-center gap-6 text-green-700 text-xl">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

    
      <div class="card-wrapper agent2">
        <div
          class="bg-gradient-to-b pt-32 flex flex-col gap-4 from-blue-100 to-yellow-50 rounded-lg shadow-lg pb-6 px-4 w-full max-w-xs text-center">
          <h3 class="text-xl font-semibold text-black font-heading">Christopher Baker</h3>
          <p class="text-gray-600 text-sm">Residential Property Manager</p>
          <div class="flex justify-center gap-6 text-green-700 text-xl">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
=
      <div class="card-wrapper agent3">
        <div
          class="bg-gradient-to-b pt-32 flex flex-col gap-4 from-blue-100 to-yellow-50 rounded-lg shadow-lg pb-6 px-4 w-full max-w-xs text-center">
          <h3 class="text-xl font-semibold text-black font-heading">Christopher Baker</h3>
          <p class="text-gray-600 text-sm">Residential Property Manager</p>
          <div class="flex justify-center gap-6 text-green-700 text-xl">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

  
      <div class="card-wrapper agent4">
        <div
          class="bg-gradient-to-b pt-32 flex flex-col gap-4 from-blue-100 to-yellow-50 rounded-lg shadow-lg pb-6 px-4 w-full max-w-xs text-center">
          <h3 class="text-xl font-semibold text-black font-heading">Christopher Baker</h3>
          <p class="text-gray-600 text-sm">Residential Property Manager</p>
          <div class="flex justify-center gap-6 text-green-700 text-xl">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

    </div>
       
      
  </section> -->


  <!-- about section -->
  <section class="flex justify-center">
    <div
      class="flex flex-col lg:flex-row items-center justify-between lg:items-start  min-h-screen mb-20  max-w-6xl p-5">
      <!-- Left Content -->
      <div class="max-w-2xl lg:w-[65%] flex flex-col justify-center  lg:ps-5 lg:pe-12 py-10 h-full bg-white">
        <span class="flex justify-center w-[70%] bg-[#283344] text-white font-medium px-3 py-1 rounded-full mb-5">
          A Journey Through Real Estate
        </span>
        <h1 class="text-2xl md:text-4xl font-bold mb-6 text-primary font-heading leading-tight">
          Exploring Exceptional Homes in a World of Opportunity
        </h1>
        <p class="text-secondary text-lg mb-6 max-w-xl">
          At NIP, we go beyond brick and mortar—we curate lifestyles, experiences, and legacies. Each home we represent
          is handpicked for its design, value, and potential to elevate how you live and invest. Whether you're stepping
          into your first investment or expanding your global portfolio, our properties speak the language of timeless
          quality and long-term returns.

          Start your journey with a partner who understands that real estate is not just about space—it’s about vision,
          purpose, and future value
        </p>
      </div>
      <!-- Right Image -->
      <div class="  h-full  flex items-center justify-center mx-auto max-w-2xl  min-h-[300px] ">
        <img src="./assets/images/exploring-img.jpg" alt="Modern Building" class=" h-full object-cover">
      </div>
    </div>
  </section>

<?php include 'components/footer.php'; ?>

</body>

</html>