<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIP - Real Estate</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Fallbacks -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0E1319',
                        secondary: '#9E9E9E', // Silver/gray
                        dark: '#505050', // Very dark blue
                        light: '#D3D3D3' // Light gray/white
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/css/splide.min.css">
</head>

<body class="bg-white font-body">
    <!-- Hero Wrapper with Background Image -->
    <div class="bg-cover bg-center min-h-screen relative"
        style="background-image: url('assets/images/hero-slider-img.jpg');">

        <!-- Black Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-70 z-0"></div>

        <!-- Header -->
        <header class="fixed top-0 z-50 w-full">
            <nav id="navbar"
                class="container-fluid mx-auto px-4 sm:px-6 pt-3 sm:pt-4 flex items-center bg-transparent transition-all duration-300">
                <div class="hidden lg:flex space-x-6 xl:space-x-8 text-[#fff] mx-auto pt-4">
                    <!-- Desktop Navigation Items -->
                    <a href="index.php"
                        class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Home</a>
                    <a href="vip-services.html"
                        class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Properties</a>
                    <a href="#" class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Projects</a>
                    <a href="#" class="sm:w-14 sm:h-14 md:w-[7rem] md:h-[7rem] flex items-center justify-center mt-[-30px]">
                        <img src="./assets/images/NIP WHITE LOGO PNG.png" alt="logo" class="w-full h-full">
                    </a>

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

                    <a href="premium-services.html"
                        class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">About Us</a>
                    <a href="contact-us.html"
                        class="hover:text-[#9e9e9e] transition-colors font-medium text-sm xl:text-base">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-white focus:outline-none p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </nav>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="lg:hidden hidden bg-black bg-opacity-90 text-white px-4 sm:px-6 py-4 space-y-4 fixed top-16 sm:top-20 left-0 right-0 z-40">
                <a href="index.php" class="block font-medium hover:text-[#9e9e9e] py-2">Home</a>
                <a href="vip-services.html" class="block font-medium hover:text-[#9e9e9e] py-2">Properties</a>
                <a href="#" class="block font-medium hover:text-[#9e9e9e] py-2">Projects</a>

                <!-- Mobile Dropdown Trigger -->
                <div>
                    <button id="mobile-nip-approach"
                        class="w-full flex justify-between items-center font-medium hover:text-[#9e9e9e] py-2">
                        NIP Approach
                        <svg id="mobile-nip-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Mobile Dropdown Content -->
                    <div id="mobile-nip-dropdown" class="hidden pl-4 space-y-2 mt-2">
                        <!-- Premium Baricons Section -->
                        <div class="space-y-2 border-l border-gray-600 pl-3 py-1">
                            <h3 class="text-sm font-semibold text-gray-300">Premium Baricons</h3>
                            <ul class="space-y-1">
                                <li>
                                    <button class="flex justify-between items-center w-full text-left">
                                        <span>Smart Home Personalization</span>
                                        <svg class="w-3 h-3 transform transition-transform duration-200" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <ul class="hidden pl-3 mt-1 space-y-1 border-l border-gray-600">
                                        <li>
                                            <button class="flex justify-between items-center w-full text-left">
                                                <span>Corelange Relevation Service</span>
                                                <svg class="w-3 h-3 transform transition-transform duration-200" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </button>
                                            <ul class="hidden pl-3 mt-1 space-y-1 border-l border-gray-600">
                                                <li><a href="#"
                                                        class="block py-1 text-xs text-gray-400 hover:text-white">Property
                                                        valuation</a></li>
                                                <li><a href="#"
                                                        class="block py-1 text-xs text-gray-400 hover:text-white">Leisure
                                                        Access to Developer</a></li>
                                                <li><a href="#"
                                                        class="block py-1 text-xs text-gray-400 hover:text-white">Pre-Broecom</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- VIP Baricons Section -->
                        <div class="space-y-2 border-l border-gray-600 pl-3 py-1">
                            <h3 class="text-sm font-semibold text-gray-300">VIP Baricons</h3>
                            <ul class="space-y-1">
                                <li>
                                    <button class="flex justify-between items-center w-full text-left">
                                        <span>Ubuntu Management Catalogue</span>
                                        <svg class="w-3 h-3 transform transition-transform duration-200" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <ul class="hidden pl-3 mt-1 space-y-1 border-l border-gray-600">
                                        <li><a href="#" class="block py-1 text-xs text-gray-400 hover:text-white">Private
                                                Investment Advisory at A. Scott C.A & Membership Access</a></li>
                                        <li><a href="#" class="block py-1 text-xs text-gray-400 hover:text-white">Annual
                                                Indicator for Trophy/Order Retired</a></li>
                                        <li><a href="#" class="block py-1 text-xs text-gray-400 hover:text-white">Golden
                                                War</a></li>
                                        <li><a href="#" class="block py-1 text-xs text-gray-400 hover:text-white">Aerospace
                                                Guidance</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a href="premium-services.html" class="block font-medium hover:text-[#9e9e9e] py-2">About us</a>
                <a href="contact-us.html" class="block font-medium hover:text-[#9e9e9e] py-2">Contact us</a>
            </div>
        </header>


        <!-- Hero Section Content -->
        <section class="relative min-h-screen flex items-center justify-center pt-20 sm:pt-24 md:pt-32 lg:pt-40 px-4 sm:px-6 lg:px-8 z-10">
            <div class="text-center text-white max-w-7xl mx-auto w-full relative z-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 sm:mb-6 leading-tight font-heading">
                    Where Vision Meets Ownership
                </h1>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 sm:mb-8 text-gray-200 max-w-4xl mx-auto px-2 font-subheading">
                    NIP transforms aspirations into legacy. We don't just help you find property — we help you secure
                    your place in the world's finest investments.
                </p>
                <!-- search form  -->
                <form action="properties.php" method="GET" class="bg-white p-4 sm:p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
                    <!-- Mobile -->
                    <div class="block lg:hidden space-y-4">
                        <input type="text" name="keyword" placeholder="Search by keyword or location"
                            class="w-full h-12 px-4 border border-secondary rounded-lg focus:outline-none focus:ring-1 focus:ring-secondary text-gray-700" />
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <select name="type" class="w-full h-12 border border-secondary rounded-lg text-secondary bg-white">
                                <option value="">Property Type</option>
                                <option>Apartment</option>
                                <option>Villa</option>
                                <option>Townhouse</option>
                            </select>
                            <select name="price_range" class="w-full h-12 px-4 border border-secondary text-secondary rounded-lg bg-white">
                                <option value="">All Prices</option>
                                <option>AED 100k - 500k</option>
                                <option>AED 500k - 1M</option>
                                <option>AED 1M+</option>
                            </select>
                        </div>
                        <button type="submit" class="h-12 w-full bg-secondary text-white font-medium px-6 rounded-lg hover:bg-dark transition-colors">
                            Search
                        </button>
                    </div>

                    <!-- Desktop -->
                    <div class="hidden lg:grid lg:grid-cols-5 gap-4 items-center">
                        <input type="text" name="keyword" placeholder="Search by keyword or location"
                            class="col-span-2 h-12 px-4 border border-gray-200 rounded-lg focus:ring-primary text-gray-700" />
                        <select name="type" class="h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                            <option value="">Property Type</option>
                            <option>Apartment</option>
                            <option>Villa</option>
                            <option>Townhouse</option>
                        </select>
                        <select name="price_range" class="h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                            <option value="">All Prices</option>
                            <option>AED 100k - 500k</option>
                            <option>AED 500k - 1M</option>
                            <option>AED 1M+</option>
                        </select>
                        <button type="submit" class="h-12 bg-secondary text-white font-medium px-6 rounded-lg hover:bg-dark transition-colors">
                            Search
                        </button>
                    </div>

                    <!-- Advanced Filters Section (initially hidden) -->
                    <div id="advanced-filters" class="hidden mt-6 pt-6 border-t border-gray-200">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                            <input type="text" name="keyword" placeholder="Keywords"
                                class="w-full h-12 px-4 pl-10 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary text-gray-700 bg-white">
                            <input type="text" name="location" placeholder="Location"
                                class="w-full h-12 px-4 pl-10 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary text-gray-700 bg-white">
                            <select name="type" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                                <option value="">Select property type</option>
                                <option>Apartment</option>
                                <option>Villa</option>
                                <option>Townhouse</option>
                                <option>Penthouse</option>
                                <option>Studio</option>
                                <option>Office</option>
                                <option>Retail</option>
                                <option>Warehouse</option>
                            </select>
                            <select name="community" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                                <option value="">Communities</option>
                                <option>Downtown Dubai</option>
                                <option>Dubai Marina</option>
                                <option>Jumeirah Beach Residence</option>
                                <option>Business Bay</option>
                                <option>Dubai Hills Estate</option>
                                <option>Arabian Ranches</option>
                                <option>The Springs</option>
                                <option>Emirates Hills</option>
                            </select>
                        </div>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <button type="submit" name="status" value="" class="px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-secondary transition-colors">
                                All
                            </button>
                            <button type="submit" name="status" value="Ready" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors">
                                Ready
                            </button>
                            <button type="submit" name="status" value="Off Plan" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors">
                                Off Plan
                            </button>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                            <select name="bedrooms" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                                <option value="">Bedroom</option>
                                <option>Studio</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6+</option>
                            </select>
                            <select name="bathrooms" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                                <option value="">Bathroom</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6+</option>
                            </select>
                            <input type="text" name="min_price" placeholder="Min. price"
                                class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                            <input type="text" name="max_price" placeholder="Max. price"
                                class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                        </div>

                        <div class="flex justify-center">
                            <button type="submit" class="h-12 bg-secondary text-white font-medium px-8 rounded-lg hover:bg-primary transition-colors">
                                Find My Home
                            </button>
                        </div>
                    </div>

                    <!-- Toggle Advanced Filters -->
                    <div class="mt-4 text-center">
                        <button type="button" id="advanced-toggle"
                            class="text-primary hover:bg-secondary font-medium text-sm flex items-center justify-center mx-auto p-1">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4" />
                            </svg>
                            Advanced Filters
                        </button>
                    </div>
                </form>

            </div>
        </section>
    </div>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                <!-- Left Content -->
                <div>
                    <h2 class="text-4xl font-bold text-dark mb-8 leading-tight font-heading">
                        We Shape Communities Where Vision Meets Lifestyle
                    </h2>

                    <!-- Features List -->
                    <div class="space-y-6">
                        <!-- Feature 1 -->
                        <div
                            class="md:flex items-center bg-[linear-gradient(to_right,#9E9E9E_0%,#12263E_50%,#0E1319_100%)] p-6 rounded-xl text-[#fff]">

                            <div
                                class="w-14 h-14 bg-primary rounded-xl flex items-center justify-center mr-6 flex-shrink-0">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 w-full font-heading">Discover Exceptional Properties
                                </h3>
                                <p class="leading-relaxed font-subheading">
                                    Access a curated portfolio of premium real estate opportunities in the most
                                    strategic and emerging areas of Dubai and beyond.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div
                            class="md:flex items-center bg-[linear-gradient(to_right,#9E9E9E_0%,#12263E_50%,#0E1319_100%)] p-6 rounded-xl text-[#fff]">

                            <div
                                class="w-14 h-14 bg-primary rounded-xl flex items-center justify-center mr-6 flex-shrink-0">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 font-heading">Tailored Property Development</h3>
                                <p class="leading-relaxed font-subheading">
                                    From architectural planning to luxury finishing — we help transform your vision into
                                    a property investment that lasts for generations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="flex justify-center self-end">
                    <div class="w-full max-w-md">
                        <p class="text-sm text-secondary mb-6 text-center">
                            NIP specializes in delivering properties that combine elevated design, elite location, and
                            enduring value for investors and families alike.
                        </p>
                        <img src="assets/images/second-sec-img.jpg" alt="Modern Building Community"
                            class="w-full h-80 object-cover rounded-lg shadow-lg">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Featured Neighbourhood Section -->
    <section class="py-8 sm:py-12 md:py-10 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary font-heading">FEATURED NEIGHBOURHOOD
                </h2>
            </div>

            <!-- Mobile Gallery (Stacked Cards) -->
            <div class="block sm:hidden space-y-4">
                <!-- Dubai Creek Harbour -->
                <a href="properties.php?community=Dubai+Creek+Harbour">
                    <div class="relative rounded-lg overflow-hidden group cursor-pointer h-48">
                        <img src="assets/images/neighbour-img1.jpg" alt="Dubai Creek Harbour"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-white text-lg font-semibold mb-2 uppercase">Dubai Creek Harbour</h3>
                            <div class="absolute bottom-3 right-3">
                                <div
                                    class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Business Bay -->
                <a href="properties.php?community=Business+Bay">
                    <div class="relative rounded-lg overflow-hidden group cursor-pointer h-48">
                        <img src="assets/images/Business Bay.jpg" alt="Business Bay"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-white text-lg font-semibold mb-2 uppercase">Business Bay</h3>
                            <div class="absolute bottom-3 right-3">
                                <div
                                    class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Jumeirah Golf Estates -->
                <a href="properties.php?community=Jumeirah+Golf+Estates">
                    <div class="relative rounded-lg overflow-hidden group cursor-pointer h-48">
                        <img src="assets/images/Jumeirah Golf Estates.jpg" alt="Bluewaters Island"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-white text-lg font-semibold mb-2 uppercase">Jumeirah Golf Estates</h3>
                            <div class="absolute bottom-3 right-3">
                                <div
                                    class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Two column grid for smaller items -->
                <div class="grid grid-cols-2 gap-3">
                    <!-- Arabian Ranches -->
                    <a href="properties.php?community=Arabian+Ranches">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-32">
                            <img src="assets/images/Arabian Ranches.jpg" alt="Downtown Dubai"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-3">
                                <h3 class="text-white text-sm font-semibold uppercase">Arabian Ranches</h3>
                                <div class="absolute bottom-2 right-2">
                                    <div
                                        class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Dubai Hills -->
                    <a href="properties.php?community=Dubai+Hills">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-32">
                            <img src="assets/images/Dubai Hills.jpg" alt="Dubai Hills"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-3">
                                <h3 class="text-white text-sm font-semibold uppercase">Dubai Hills</h3>
                                <div class="absolute bottom-2 right-2">
                                    <div
                                        class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- palm Jumeriah -->
                <a href="properties.php?community=Palm+Jumeirah">
                    <div class="relative rounded-lg overflow-hidden group cursor-pointer h-40">
                        <img src="assets/images/neighbour-img2.jpg" alt="palm Jumeriah"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-white text-lg font-semibold uppercase">Palm Jumeirah</h3>
                            <div class="absolute bottom-3 right-3">
                                <div
                                    class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tablet Gallery (2x3 Grid) -->
            <div class="hidden sm:block md:hidden">
                <div class="grid grid-cols-2 gap-4 h-[500px]">
                    <!-- Dubai Creek Harbour -->
                    <a href="properties.php?community=Dubai+Creek+Harbour" class="row-span-2">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/neighbour-img1.jpg" alt="Dubai Creek Harbour"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold mb-2 uppercase">Dubai Creek Harbour</h3>
                                <div class="absolute bottom-3 right-3">
                                    <div
                                        class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Business Bay -->
                    <a href="properties.php?community=Business+Bay">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/Business Bay.jpg" alt="Business Bay"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold uppercase">Business Bay</h3>
                                <div class="absolute bottom-3 right-3">
                                    <div
                                        class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Jumeirah Golf Estates -->
                    <a href="properties.php?community=Jumeirah+Golf+Estates">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/Jumeirah Golf Estates.jpg" alt="Bluewaters Island"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold uppercase">Jumeirah Golf Estates</h3>
                                <div class="absolute bottom-3 right-3">
                                    <div
                                        class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Dubai Hills -->
                    <a href="properties.php?community=Dubai+Hills" class="col-span-2">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/Dubai Hills.jpg" alt="palm Jumeriah"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold uppercase">Dubai Hills</h3>
                                <div class="absolute bottom-3 right-3">
                                    <div
                                        class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Desktop Gallery (Original 3x3 Grid) -->
            <div class="hidden md:block">
                <div class="grid grid-cols-3 grid-rows-3 gap-4 h-[600px]">
                    <!-- Dubai Harbour -->
                    <a href="properties.php?community=Dubai+Creek+Harbour" class="row-span-2">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/neighbour-img1.jpg" alt="Dubai Creek Harbour"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-white text-xl font-semibold mb-2 uppercase">Dubai Creek Harbour</h3>
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Dubai Hills -->
                    <a href="properties.php?community=Dubai+Hills" class="col-start-1 row-start-3">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/Dubai Hills.jpg" alt="Dubai Hills"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold uppercase">Dubai Hills</h3>
                                <div class="absolute bottom-3 right-3">
                                    <div
                                        class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Arabian Ranches -->
                    <a href="properties.php?community=Arabian+Ranches" class="col-start-2 row-start-1">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/Arabian Ranches.jpg" alt="Downtown Dubai"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold uppercase">Arabian Ranches</h3>
                                <div class="absolute bottom-3 right-3">
                                    <div
                                        class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Business Bay -->
                    <a href="properties.php?community=Business+Bay"
                        class="row-span-2 col-start-2 row-start-2">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/Business Bay.jpg" alt="Business Bay"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-white text-xl font-semibold mb-2 uppercase">Business Bay</h3>
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!--Jumeirah Golf Estates-->
                    <a href="properties.php?community=Jumeirah+Golf+Estates"
                        class="row-span-2 col-start-3 row-start-1">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/Jumeirah Golf Estates.jpg" alt="Bluewaters Island"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-white text-xl font-semibold mb-2 uppercase">Jumeirah Golf Estates</h3>
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Palm Jumeirah -->
                    <a href="properties.php?community=Palm+Jumeirah" class="col-start-3 row-start-3">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                            <img src="assets/images/neighbour-img2.jpg" alt="Palm Jumeirah"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold uppercase">PALM JUMEIRAH</h3>
                                <div class="absolute bottom-3 right-3">
                                    <div
                                        class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="py-8 sm:py-12 md:py-16"
        style="background: linear-gradient(135deg, #0E1319, #151A22, #1F2733, #283344);">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <!-- Section Header -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between mb-8 sm:mb-12">
                <div class="mb-6 lg:mb-0">
                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-white mb-4 leading-tight font-heading">
                        Latest Properties
                        <span class="block sm:inline">Exploring the World</span>
                    </h2>
                </div>

                <!-- Filter Tabs with Smooth Horizontal Scroll  -->
                <div class="w-full flex justify-end">
                    <div class="flex  gap-3 overflow-x-auto whitespace-nowrap no-scrollbar px-2 sm:px-0">
                        <button
                            class="bg-primary text-white px-4 py-2 rounded-full font-medium text-xs sm:text-sm hover:bg-blue-800 transition-colors">
                            All
                        </button>
                        <button
                            class="border border-white text-white px-4 py-2 rounded-full font-medium text-xs sm:text-sm hover:bg-white hover:text-dark transition-all">
                            For Sale
                        </button>
                        <button
                            class="border border-white text-white px-4 py-2 rounded-full font-medium text-xs sm:text-sm hover:bg-white hover:text-dark transition-all">
                            Apartment
                        </button>
                        <button
                            class="border border-white text-white px-4 py-2 rounded-full font-medium text-xs sm:text-sm hover:bg-white hover:text-dark transition-all">
                            Commercial
                        </button>
                        <button
                            class="border border-white text-white px-4 py-2 rounded-full font-medium text-xs sm:text-sm hover:bg-white hover:text-dark transition-all">
                            Residential
                        </button>
                    </div>
                </div>


            </div>

            <!-- Property Cards Grid - Responsive -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">

                <!-- Property Card 1 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <!-- Mobile: Stacked Layout, Desktop: Side by side -->
                    <div class="flex flex-col sm:flex-row min-h-full">
                        <!-- Image Section -->
                        <div class="relative w-full sm:w-2/5 min-h-full">
                            <img src="assets/images/third-sec-card1-img.jpg" alt="Heritage Building"
                                class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4">
                                <span
                                    class="bg-primary text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Featured</span>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="flex-1 p-4 sm:p-6 flex flex-col justify-between">
                            <div>
                                <!-- Tags -->
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Apartment</span>
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">For
                                        Sale</span>
                                </div>

                                <!-- Title and Heart -->
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 flex-1 pr-2">Heritage Building
                                    </h3>
                                </div>

                                <p class="text-secondary text-sm mb-3 sm:mb-4">Dubai, UAE</p>

                                <!-- Property Details - Responsive -->
                                <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4 flex-wrap">
                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M21 10h-1V7a2 2 0 00-2-2H6a2 2 0 00-2 2v3H3a1 1 0 000 2h1v6h2v-2h12v2h2v-6h1a1 1 0 000-2zM6 7h12v3H6V7z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">5</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M7 4a1 1 0 011-1h8a1 1 0 011 1v9H7V4zm12 9a1 1 0 100 2H5a1 1 0 100-2h14z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">3</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M4 6H2v14a2 2 0 002 2h14v-2H4V6zm16-4H8a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">3750</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Agent and Price - Responsive -->
                            <div class="flex items-center pt-2 sm:pt-0">
                                <div class="text-lg sm:text-2xl font-bold text-primary w-full text-right">AED 950,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="flex flex-col sm:flex-row min-h-full">
                        <div class="relative w-full sm:w-2/5 min-h-full">
                            <img src="assets/images/third-sec-card2-img.jpg" alt="Modern Villa"
                                class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4">
                                <span
                                    class="bg-primary text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Featured</span>
                            </div>
                        </div>

                        <div class="flex-1 p-4 sm:p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Villa</span>
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">For
                                        Sale</span>
                                </div>

                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 flex-1 pr-2">Modern Villa</h3>
                                </div>

                                <p class="text-secondary text-sm mb-3 sm:mb-4">Abu Dhabi, UAE</p>

                                <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4 flex-wrap">
                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M21 10h-1V7a2 2 0 00-2-2H6a2 2 0 00-2 2v3H3a1 1 0 000 2h1v6h2v-2h12v2h2v-6h1a1 1 0 000-2zM6 7h12v3H6V7z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">4</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M7 4a1 1 0 011-1h8a1 1 0 011 1v9H7V4zm12 9a1 1 0 100 2H5a1 1 0 100-2h14z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">4</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M4 6H2v14a2 2 0 002 2h14v-2H4V6zm16-4H8a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">4500</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center pt-2 sm:pt-0">
                                <div class="text-lg sm:text-2xl font-bold text-primary w-full text-right">AED 1,250,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="flex flex-col sm:flex-row min-h-full">
                        <div class="relative w-full sm:w-2/5 min-h-full">
                            <img src="assets/images/third-sec-card3-img.jpg" alt="Luxury Penthouse"
                                class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4">
                                <span
                                    class="bg-primary text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Featured</span>
                            </div>
                        </div>

                        <div class="flex-1 p-4 sm:p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Penthouse</span>
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">For
                                        Sale</span>
                                </div>

                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 flex-1 pr-2">Luxury Penthouse
                                    </h3>
                                </div>

                                <p class="text-secondary text-sm mb-3 sm:mb-4">Downtown Dubai, UAE</p>

                                <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4 flex-wrap">
                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M21 10h-1V7a2 2 0 00-2-2H6a2 2 0 00-2 2v3H3a1 1 0 000 2h1v6h2v-2h12v2h2v-6h1a1 1 0 000-2zM6 7h12v3H6V7z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">3</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M7 4a1 1 0 011-1h8a1 1 0 011 1v9H7V4zm12 9a1 1 0 100 2H5a1 1 0 100-2h14z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">4</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M4 6H2v14a2 2 0 002 2h14v-2H4V6zm16-4H8a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">2800</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-2 sm:pt-0">
                                <div class="text-lg sm:text-2xl font-bold text-primary w-full text-right">AED 2,100,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Card 4 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="flex flex-col sm:flex-row min-h-full">
                        <div class="relative w-full sm:w-2/5 min-h-full">
                            <img src="assets/images/third-sec-card4-img.jpg" alt="Waterfront Apartment"
                                class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4">
                                <span
                                    class="bg-primary text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Featured</span>
                            </div>
                        </div>

                        <div class="flex-1 p-4 sm:p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Apartment</span>
                                    <span
                                        class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">For
                                        Sale</span>
                                </div>

                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 flex-1 pr-2">Waterfront
                                        Apartment</h3>
                                </div>

                                <p class="text-secondary text-sm mb-3 sm:mb-4">Business Bay, UAE</p>

                                <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4 flex-wrap">
                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M21 10h-1V7a2 2 0 00-2-2H6a2 2 0 00-2 2v3H3a1 1 0 000 2h1v6h2v-2h12v2h2v-6h1a1 1 0 000-2zM6 7h12v3H6V7z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">2</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M7 4a1 1 0 011-1h8a1 1 0 011 1v9H7V4zm12 9a1 1 0 100 2H5a1 1 0 100-2h14z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">2</span>
                                    </div>

                                    <div class="flex items-center gap-1 sm:gap-2">
                                        <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M4 6H2v14a2 2 0 002 2h14v-2H4V6zm16-4H8a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs sm:text-sm text-dark font-medium">1850</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-2 sm:pt-0">
                                <div class="text-lg sm:text-2xl font-bold text-primary w-full text-right">AED 850,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center">
                <div class="flex space-x-2">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-white rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-secondary rounded-full"></div>
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-white rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!--Developers Brand Logos Section -->
    <section class="py-12 bg-light overflow-hidden">
        <div class="w-max flex gap-6 animate-[scroll-x_20s_linear_infinite]">
            <div class="flex gap-6">
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo1.jpg" alt="Brand 1" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo2.jpg" alt="Brand 2" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo3.jpg" alt="Brand 3" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo4.jpg" alt="Brand 4" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo5.jpg" alt="Brand 5" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo6.jpg" alt="Brand 6" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo7.jpg" alt="Brand 7" class="h-20 object-contain">
                </div>
            </div>
            <!-- Duplicate for seamless loop -->
            <div class="flex gap-6">
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo1.jpg" alt="Brand 1" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo2.jpg" alt="Brand 2" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo3.jpg" alt="Brand 3" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo4.jpg" alt="Brand 4" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo5.jpg" alt="Brand 5" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo6.jpg" alt="Brand 6" class="h-20 object-contain">
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                    <img src="assets/images/slider-logo7.jpg" alt="Brand 7" class="h-20 object-contain">
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Section -->
    <section class="py-5 md:py-10 bg-[#fbfbfb]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <!-- Header Section -->
            <div class="text-center mb-5 md:mb-8">
                <span class="inline-block bg-[#283344] text-[#fff] text-xs font-semibold px-3 py-1 rounded-full mb-4 uppercase tracking-wide">
                    Exclusive Living
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary font-heading mb-4">
                    Why Choose NIP?
                </h2>
                <p class="text-secondary text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-subheading">
                    Discover how NIP redefines luxury real estate through unmatched expertise, design, and a client-first approach.
                </p>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Card 1 -->
                <div class="group transition-all duration-300 border-b-8 border-[#283344] hover:border-none rounded-2xl">
                    <div class="bg-white group-hover:bg-[#283344] rounded-2xl p-8 h-full text-center shadow-md group-hover:shadow-lg transform group-hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col items-center space-y-4">
                            <div class="w-20 h-20 bg-[#283344] group-hover:bg-white rounded-full flex items-center justify-center shadow group-hover:shadow-lg transition duration-300">
                                <!-- Font Awesome Icon with hover text color change -->
                                <i class="fas fa-home text-3xl text-white group-hover:text-[#283344] transition duration-300"></i>
                            </div>
                            <h3 class="text-lg font-bold text-[#283344] group-hover:text-white font-heading">
                                Curated Global Properties
                            </h3>
                            <p class="text-sm text-secondary font-body group-hover:text-white leading-relaxed">
                                We handpick premium properties in high-growth areas, offering discerning investors a refined portfolio of opportunity.
                            </p>
                        </div>
                    </div>
                </div>



                <!-- Card 2 -->
                <div class="group transition-all duration-300 rounded-2xl">
                    <div class="bg-[#283344]  rounded-2xl p-8 h-full text-center shadow-md group-hover:shadow-lg transform group-hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col items-center space-y-4">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow group-hover:shadow-lg transition duration-300">
                                <!-- Font Awesome Diamond Icon -->
                                <i class="fas fa-gem text-3xl text-[#283344] transition duration-300"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white font-heading">
                                Bespoke Service & Strategy
                            </h3>
                            <p class="text-sm text-white leading-relaxed">
                                Every client experience is tailored with discretion, strategy, and insight, guided by our seasoned advisors.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group transition-all duration-300 border-b-8 border-[#283344] hover:border-none rounded-2xl">
                    <div class="bg-white group-hover:bg-[#283344] rounded-2xl p-8 h-full text-center shadow-md group-hover:shadow-lg transform group-hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col items-center space-y-4">
                            <div class="w-20 h-20 bg-[#283344] group-hover:bg-white rounded-full flex items-center justify-center shadow group-hover:shadow-lg transition duration-300">
                                <!-- Font Awesome Diamond Icon -->
                                <i class="fas fa-draw-polygon text-3xl text-white group-hover:text-[#283344] transition duration-300"></i>
                            </div>
                            <h3 class="text-lg font-bold text-[#283344] group-hover:text-white font-heading">
                                Architectural Distinction
                            </h3>
                            <p class="text-sm text-secondary font-body group-hover:text-white leading-relaxed">
                                We emphasize intelligent design and timeless architecture that reflect prestige, performance, and personality.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!-- Statistics Section -->
    <section class="py-20 text-white relative" style="background:linear-gradient( 135deg, rgba(14, 19, 25, 0.8), rgba(15, 32, 39, 0.8), rgba(32, 58, 67, 0.8), rgba(44, 83, 100, 0.9) )">
        <!-- Black Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

        <!-- Content on Top -->
        <div class="relative z-10 container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center items-start">
                <div>
                    <div class="text-5xl font-bold mb-2 counter" data-target="20">0</div>
                    <div class="text-gray-300">Years of Experience</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2 counter" data-target="25">0</div>
                    <div class="text-gray-300">Exclusive Listings</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2 counter" data-target="12">0</div>
                    <div class="text-gray-300">Trusted Partners</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">Up to 12%</div>
                    <div class="text-gray-300">Investment Returns</div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="py-8 sm:py-12 md:py-16 bg-[#fbfbfb]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-4 items-start">
                <!-- Left Column -->
                <div class="flex flex-col space-y-4 sm:space-y-6">
                    <span
                        class="inline-block bg-[#283344] text-[#fff] text-xs font-semibold px-3 py-1 rounded-full w-fit">
                        CLIENT VOICES
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading">What People Say</h2>
                    <p class="text-sm sm:text-base max-w-sm leading-relaxed font-subheading">
                        Reflections from global investors and discerning buyers—each experience a testament to our
                        legacy of trust, discretion, and excellence.
                    </p>
                    <!-- Custom navigation -->
                    <div class="flex space-x-3 mt-6 sm:mt-8">
                        <label for="prev-testimonials"
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-secondary flex items-center justify-center hover:bg-gray-100 transition-colors cursor-pointer">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-dark" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </label>
                        <label for="next-testimonials"
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-secondary flex items-center justify-center hover:bg-gray-100 transition-colors cursor-pointer">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-dark" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </label>
                    </div>
                </div>

                <!-- Right Column: Testimonials Carousel -->
                <div class="testimonials-carousel">
                    <!-- Hidden radio buttons for carousel control -->
                    <input type="radio" id="slide-1" name="testimonial-slide" class="carousel-control" checked>
                    <input type="radio" id="slide-2" name="testimonial-slide" class="carousel-control">
                    <input type="radio" id="slide-3" name="testimonial-slide" class="carousel-control">

                    <!-- Hidden buttons for navigation logic -->
                    <input type="button" id="next-testimonials" class="nav-control">
                    <input type="button" id="prev-testimonials" class="nav-control">

                    <div class="carousel-container flex justify-center">
                        <!-- Slide 1: First pair of testimonials -->
                        <div class="carousel-slide slide-1">
                            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                                <!-- Testimonial 1 -->
                                <div
                                    class="testimonial-card bg-white rounded-lg shadow-sm border border-gray-100 p-4 sm:p-6 flex-1">
                                    <div class="flex space-x-1 mb-2 sm:mb-2">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="testimonial-text text-xs sm:text-sm text-dark leading-relaxed mb-4">
                                            Working with NIP was unlike any other brokerage experience. Their approach
                                            was calm, discreet, and deeply informed. It wasn't just a property—it felt
                                            like a generational decision made right.
                                        </p>
                                    </div>
                                    <div class="testimonial-author flex items-center space-x-2 sm:space-x-3">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sophia Rahman"
                                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover flex-shrink-0">
                                        <div class="min-w-0">
                                            <p class="text-xs sm:text-sm font-semibold text-dark truncate font-heading">
                                                Sophia Rahman</p>
                                            <p class="text-xs text-secondary truncate font-subheading">Private Investor
                                                – UK</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 2 -->
                                <div
                                    class="testimonial-card bg-white rounded-lg shadow-sm border border-gray-100 p-4 sm:p-6 flex-1">
                                    <div class="flex space-x-1 mb-2 sm:mb-2">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="testimonial-text text-xs sm:text-sm text-dark leading-relaxed mb-4">
                                            NIP handled our acquisition with precision and full respect for
                                            confidentiality. The level of professionalism and integrity they uphold is
                                            rare in global real estate today.
                                        </p>
                                    </div>
                                    <div class="testimonial-author flex items-center space-x-2 sm:space-x-3">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                            alt="Yousef Al-Mansoori"
                                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover flex-shrink-0">
                                        <div class="min-w-0">
                                            <p class="text-xs sm:text-sm font-semibold text-dark truncate font-heading">
                                                Yousef Al-Mansoori</p>
                                            <p class="text-xs text-secondary truncate font-subheading">Family Office
                                                Representative – UAE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Second pair of testimonials -->
                        <div class="carousel-slide slide-2">
                            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                                <!-- Testimonial 3 -->
                                <div
                                    class="testimonial-card bg-white rounded-lg shadow-sm border border-gray-100 p-4 sm:p-6 flex-1">
                                    <div class="flex space-x-1 mb-2 sm:mb-2">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-content">

                                        <p class="testimonial-text text-xs sm:text-sm text-dark leading-relaxed mb-4">
                                            The team at NIP exceeded every expectation. From initial consultation to
                                            final handover, their attention to detail and market knowledge was
                                            exceptional. Truly a world-class service.
                                        </p>
                                    </div>
                                    <div class="testimonial-author flex items-center space-x-2 sm:space-x-3">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                            alt="Maria Rodriguez"
                                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover flex-shrink-0">
                                        <div class="min-w-0">
                                            <p class="text-xs sm:text-sm font-semibold text-dark truncate font-heading">
                                                Maria Rodriguez</p>
                                            <p class="text-xs text-secondary truncate font-subheading">Investment
                                                Manager – Spain</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 4 -->
                                <div
                                    class="testimonial-card bg-white rounded-lg shadow-sm border border-gray-100 p-4 sm:p-6 flex-1">
                                    <div class="flex space-x-1 mb-2 sm:mb-2">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-content">

                                        <p class="testimonial-text text-xs sm:text-sm text-dark leading-relaxed mb-4">
                                            NIP's global network and local expertise made our Dubai investment seamless.
                                            Their strategic insights and personalized approach set them apart in the
                                            luxury real estate market.
                                        </p>
                                    </div>
                                    <div class="testimonial-author flex items-center space-x-2 sm:space-x-3">
                                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="James Chen"
                                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover flex-shrink-0">
                                        <div class="min-w-0">
                                            <p class="text-xs sm:text-sm font-semibold text-dark truncate font-heading">
                                                James Chen</p>
                                            <p class="text-xs text-secondary truncate font-subheading">Portfolio Manager
                                                – Singapore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Third pair of testimonials -->
                        <div class="carousel-slide slide-3">
                            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                                <!-- Testimonial 5 -->
                                <div
                                    class="testimonial-card bg-white rounded-lg shadow-sm border border-gray-100 p-4 sm:p-6 flex-1">
                                    <div class="flex space-x-1 mb-2 sm:mb-2">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-content">

                                        <p class="testimonial-text text-xs sm:text-sm text-dark leading-relaxed mb-4">
                                            Outstanding service from start to finish. NIP's commitment to excellence and
                                            their deep understanding of the luxury market made our property acquisition
                                            effortless and rewarding.
                                        </p>
                                    </div>
                                    <div class="testimonial-author flex items-center space-x-2 sm:space-x-3">
                                        <img src="https://randomuser.me/api/portraits/women/72.jpg" alt="Emma Thompson"
                                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover flex-shrink-0">
                                        <div class="min-w-0">
                                            <p class="text-xs sm:text-sm font-semibold text-dark truncate font-heading">
                                                Emma Thompson</p>
                                            <p class="text-xs text-secondary truncate font-subheading">Real Estate
                                                Investor – Australia</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 6 -->
                                <div
                                    class="testimonial-card bg-white rounded-lg shadow-sm border border-gray-100 p-4 sm:p-6 flex-1">
                                    <div class="flex space-x-1 mb-2 sm:mb-2">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-primary fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-content">

                                        <p class="testimonial-text text-xs sm:text-sm text-dark leading-relaxed mb-4">
                                            NIP's expertise in the Dubai market is unmatched. Their personalized
                                            approach and attention to detail made our investment journey smooth and
                                            highly profitable. Highly recommended.
                                        </p>
                                    </div>
                                    <div class="testimonial-author flex items-center space-x-2 sm:space-x-3">
                                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Ahmed Hassan"
                                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover flex-shrink-0">
                                        <div class="min-w-0">
                                            <p class="text-xs sm:text-sm font-semibold text-dark truncate font-heading">
                                                Ahmed Hassan</p>
                                            <p class="text-xs text-secondary truncate font-subheading">Business Owner –
                                                Egypt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact/Consultation Section -->
    <section class="py-12 sm:py-16 md:py-20 text-white relative overflow-hidden"
        style="background: url('assets/images/Business Bay.jpg') center center / cover no-repeat;">

        <!-- Black Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-85 z-0"></div>

        <!-- Main Content -->
        <div class="relative z-10 container mx-auto px-4 sm:px-6 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 items-center">

                <!-- Left Content -->
                <div class="space-y-4 sm:space-y-6">
                    <div class="flex items-center space-x-4 mb-6 sm:mb-8">
                        <div class="w-12 sm:w-16 h-0.5 bg-white"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6 leading-tight font-heading">
                        Request a
                        Consultation</h2>
                    <p class="text-gray-300 text-base sm:text-lg leading-relaxed max-w-md font-subheading">
                        Begin your journey toward property ownership with confidence. Our advisors offer tailored
                        insight for investors, families, and global professionals seeking exceptional opportunities in
                        Dubai and beyond.
                    </p>
                </div>

                <!-- Right Contact Form -->
                <div class="bg-[#f5f5f5] rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-lg">
                    <form class="space-y-3 sm:space-y-4">
                        <!-- Name Field -->
                        <div>
                            <input type="text" placeholder="Full Name"
                                class="w-full px-3 sm:px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 text-sm sm:text-base">
                        </div>

                        <!-- Email Field -->
                        <div>
                            <input type="email" placeholder="Email Address"
                                class="w-full px-3 sm:px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 text-sm sm:text-base">
                        </div>

                        <!-- Language Dropdown -->
                        <div class="relative">
                            <select
                                class="w-full px-3 sm:px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 appearance-none bg-white text-sm sm:text-base">
                                <option value="">Preferred Language</option>
                                <option value="english">English</option>
                                <option value="arabic">Arabic</option>
                                <option value="hindi">Hindi</option>
                                <option value="urdu">Urdu</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-3 sm:px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div class="flex flex-wrap gap-2 sm:gap-3">
                            <div class="relative w-24 flex-shrink-0">
                                <select
                                    class="w-full px-3 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 appearance-none bg-white text-sm">
                                    <option value="+971">+971</option>
                                    <option value="+1">+1</option>
                                    <option value="+44">+44</option>
                                    <option value="+91">+91</option>
                                </select>
                                <div class="absolute inset-y-0 right-2 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            <input type="tel" placeholder="Phone Number"
                                class="flex-1 min-w-0 w-full px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 text-sm sm:text-base">
                        </div>

                        <!-- Privacy Checkbox -->
                        <div class="flex items-start space-x-3 pt-2">
                            <input type="checkbox" id="privacy"
                                class="mt-1 w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary focus:ring-2 flex-shrink-0">
                            <label for="privacy" class="text-xs sm:text-sm text-primary leading-relaxed">
                                I agree to the terms and privacy policy.
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-primary hover:bg-secondary text-white font-semibold py-3 sm:py-4 px-4 sm:px-6 rounded-lg transition-colors duration-200 text-sm sm:text-lg">
                            Submit Inquiry
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[linear-gradient(135deg,#0E1319,#151A22,#1F2733,#283344)] text-white pb-8 sm:pb-10 md:pb-14">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
            <!-- Logo -->
            <div class="flex items-center justify-center w-full">
                <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-24 md:h-24 rounded-lg flex items-center justify-center">
                    <img src="assets/images/NIP WHITE LOGO PNG.png" alt="NIP Logo" class="w-full h-full object-contain">
                </div>
            </div>


            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 mb-8 sm:mb-12 mt-5 sm:mt-8">
                <!-- Company Info -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <p class="mb-4 sm:mb-6 leading-relaxed text-sm sm:text-base">
                        NIP is a premier brokerage firm committed to delivering exceptional property experiences with
                        global discretion and vision.
                    </p>
                    <div class="space-y-2 sm:space-y-3">
                        <div class="flex items-start text-white">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">Business Bay, Dubai, United Arab Emirates</span>
                        </div>
                        <div class="flex items-center text-white">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-xs sm:text-sm">+971 50 123 4567</span>
                        </div>
                        <div class="flex items-center text-white">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs sm:text-sm">contact@nipproperties.com</span>
                        </div>
                    </div>
                </div>

                <!-- Categories -->
                <div>
                    <h3 class="text-base sm:text-lg font-semibold mb-4 sm:mb-6 text-white">Categories</h3>
                    <ul class="space-y-2 sm:space-y-3">
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Browse
                                Properties</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Our
                                Services</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">About
                                NIP</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Contact
                                Advisors</a></li>
                    </ul>
                </div>

                <!-- Our Company -->
                <div>
                    <h3 class="text-base sm:text-lg font-semibold mb-4 sm:mb-6 text-white">Our Company</h3>
                    <ul class="space-y-2 sm:space-y-3">
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">For
                                Sale</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">For
                                Rent</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Privacy &
                                Compliance</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Meet
                                Our Team</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <h3 class="text-base sm:text-lg font-semibold mb-4 sm:mb-6 text-white">Newsletter</h3>
                    <p class="text-white mb-4 sm:mb-6 text-xs sm:text-sm leading-relaxed">
                        Receive market insights, curated listings, and NIP updates—direct to your inbox.
                    </p>
                    <div class="flex">
                        <input type="email" placeholder="Enter Your Email"
                            class="flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg sm:rounded-l-lg sm:rounded-r-none border border-gray-600 bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-xs sm:text-sm mb-2 sm:mb-0">
                        <button
                            class="bg-primary hover:bg-blue-800 text-white px-4 py-2 sm:py-3 rounded-lg sm:rounded-l-none sm:rounded-r-lg transition-colors">
                            <svg class="w-4 h-4 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </button>
                    </div>

                    <!-- Social Media -->
                    <div class="flex flex-col sm:flex-row items-center w-full mt-5">
                        <span class="text-gray-400 text-sm sm:text-base me-2 whitespace-nowrap">Follow Us: </span>
                        <div class="flex items-center space-x-3">
                            <!-- Twitter -->
                            <a href="#"
                                class="w-8 h-8 sm:w-9 sm:h-9 bg-gray-800 rounded flex items-center justify-center hover:bg-gray-700 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a href="#"
                                class="w-8 h-8 sm:w-9 sm:h-9 bg-gray-800 rounded flex items-center justify-center hover:bg-gray-700 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8v-6.91h-2.4V12h2.4V9.84c0-2.36 1.4-3.66 3.55-3.66 1.03 0 2.1.18 2.1.18v2.3h-1.18c-1.16 0-1.52.72-1.52 1.45V12h2.6l-.42 2.89h-2.18v6.91c4.56-.93 8-4.96 8-9.8z" />
                                </svg>
                            </a>
                            <!-- Reddit -->
                            <a href="#"
                                class="w-8 h-8 sm:w-9 sm:h-9 bg-gray-800 rounded flex items-center justify-center hover:bg-gray-700 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12c0 5.65 3.937 10.353 9.092 11.646-.126-.954-.24-2.419.05-3.462.262-.935 1.687-5.956 1.687-5.956s-.43-.863-.43-2.14c0-2.003 1.162-3.497 2.607-3.497 1.23 0 1.823.924 1.823 2.031 0 1.238-.79 3.09-1.198 4.805-.341 1.433.723 2.602 2.143 2.602 2.571 0 4.544-2.712 4.544-6.627 0-3.455-2.48-5.879-6.027-5.879-4.104 0-6.506 3.078-6.506 6.259 0 1.238.476 2.569 1.071 3.288.12.144.137.27.1.414-.107.455-.354 1.438-.4 1.637-.06.255-.198.31-.459.187-1.713-.8-2.79-3.308-2.79-5.329 0-4.339 3.153-8.318 9.095-8.318 4.777 0 8.482 3.408 8.482 7.97 0 4.744-2.992 8.56-7.144 8.56-1.395 0-2.705-.724-3.148-1.57l-.858 3.274c-.311 1.19-1.15 2.68-1.712 3.59C8.607 23.8 10.264 24 12 24c6.627 0 12-5.373 12-12z" />
                                </svg>
                            </a>
                            <!-- LinkedIn -->
                            <a href="#"
                                class="w-8 h-8 sm:w-9 sm:h-9 bg-gray-800 rounded flex items-center justify-center hover:bg-gray-700 transition-colors">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zM6.782 20.452H3.893V9h2.889v11.452z" />
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>

            </div>

            <!-- Footer Bottom -->
            <div
                class="border-t border-gray-700 pt-6 sm:pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0">
                <p class="text-white text-xs sm:text-sm text-center sm:text-left">© 2025 NIP – Novel Insight Property.
                    All rights reserved.</p>
                <div class="flex flex-wrap justify-center sm:justify-end space-x-4 sm:space-x-6">
                    <a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Terms Of
                        Service</a>
                    <a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Privacy
                        Policy</a>
                    <a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Cookie
                        Policy</a>
                </div>
            </div>
        </div>
    </footer>


    <style>
        @keyframes scroll-x {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // NIP Approach dropdown toggle for mobile
        const mobileNipButton = document.getElementById('mobile-nip-approach');
        const mobileNipDropdown = document.getElementById('mobile-nip-dropdown');
        const mobileNipArrow = document.getElementById('mobile-nip-arrow');

        mobileNipButton.addEventListener('click', () => {
            mobileNipDropdown.classList.toggle('hidden');
            mobileNipArrow.classList.toggle('rotate-180');
        });

        // Nested dropdown toggles for mobile
        document.querySelectorAll('#mobile-nip-dropdown button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const ul = button.parentElement.querySelector('ul');
                const svg = button.querySelector('svg');

                if (ul && svg) {
                    ul.classList.toggle('hidden');
                    svg.classList.toggle('rotate-180');
                }
            });
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
    <script src="script.js"></script>
</body>

</html>