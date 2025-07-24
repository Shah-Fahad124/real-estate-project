<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties - NIP Real Estate</title>
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
                                    <a href="">smart home Personalization</a>
                                </li>

                                <!-- Concierge Relocation Service -->
                                <li class="hover:text-secondary cursor-pointer">
                                    Concierge Relocation Service
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
                                    <a href="vip-services.html#jet&clubmembership">Jet & Yacht Club Membership
                                        Access</a>
                                </li>

                                <!-- Legacy Circle Retreat -->
                                <li class="hover:text-secondary cursor-pointer">
                                    <a href="vip-services.html#legacycircle">Annual Invitation to "Legacy Circle"
                                        Retreat</a>
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

    <!-- hero section with Search Filters -->
    <section class="relative w-full">
        <!-- Hero Section -->
        <section class="h-[50vh] md:h-[60vh] lg:h-[90vh] flex items-center relative"
            style="background:url('assets/images/Jumeirah\ Golf\ Estates.jpg'); background-repeat: no-repeat;background-size: cover;background-position: bottom;">
            <!-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10 mb-10">
                <h1 class="text-[2rem] md:text-[3rem] lg:text-[4rem] font-medium  font-heading">Properties</h1>
            </div> -->
            <div class="bg-black bg-opacity-70 absolute inset-0 w-full h-full z-2"></div>


            <!-- Search Box -->
            <form action="properties.php" method="GET" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-11/12 max-w-6xl bg-white p-6 rounded-xl shadow-xl mt-10">
                <!-- Basic Search -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <!-- Keyword -->
                    <div>
                        <label class="font-semibold font-body text-dark">Keyword</label>
                        <input type="text" name="keyword" placeholder="Search for Keyword"
                            value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>"
                            class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                    </div>

                    <!-- Location -->
                    <div>
                        <label class="font-semibold font-body text-dark">Location</label>
                        <input type="text" name="location" placeholder="Search for Location"
                            value="<?= htmlspecialchars($_GET['location'] ?? '') ?>"
                            class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                    </div>

                    <!-- Type -->
                    <div>
                        <label class="font-semibold font-body text-dark">Type</label>
                        <select name="type"
                            class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                            <option value="">-- Select --</option>
                            <option value="Villa" <?= (($_GET['type'] ?? '') == 'Villa') ? 'selected' : '' ?>>Villa</option>
                            <option value="Apartment" <?= (($_GET['type'] ?? '') == 'Apartment') ? 'selected' : '' ?>>Apartment</option>
                            <option value="Penthouse" <?= (($_GET['type'] ?? '') == 'Penthouse') ? 'selected' : '' ?>>Penthouse</option>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-2 items-center">
                        <button type="button" id="toggle-advanced"
                            class="text-dark font-body flex items-center justify-center gap-2 hover:text-primary px-4 py-1 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            <span>Filters</span>
                        </button>
                        <button type="submit"
                            class="bg-primary hover:bg-dark text-white px-4 py-2 rounded-lg w-full font-body font-medium">
                            Find Properties
                        </button>
                    </div>
                </div>

                <!-- Advanced Options -->
                <div id="advanced-options" class="mt-6 hidden transition-all">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Price Range -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Price Range</label>
                            <select name="price_range" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">All Prices</option>
                                <option value="AED 100k - 500k" <?= (($_GET['price_range'] ?? '') == 'AED 100k - 500k') ? 'selected' : '' ?>>AED 100k - 500k</option>
                                <option value="AED 500k - 1M" <?= (($_GET['price_range'] ?? '') == 'AED 500k - 1M') ? 'selected' : '' ?>>AED 500k - 1M</option>
                                <option value="AED 1M+" <?= (($_GET['price_range'] ?? '') == 'AED 1M+') ? 'selected' : '' ?>>AED 1M+</option>
                            </select>
                        </div>

                        <!-- Community -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Community</label>
                            <select name="community" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">Communities</option>
                                <option value="Downtown Dubai" <?= (($_GET['community'] ?? '') == 'Downtown Dubai') ? 'selected' : '' ?>>Downtown Dubai</option>
                                <option value="Dubai Marina" <?= (($_GET['community'] ?? '') == 'Dubai Marina') ? 'selected' : '' ?>>Dubai Marina</option>
                                <option value="Jumeirah Beach Residence" <?= (($_GET['community'] ?? '') == 'Jumeirah Beach Residence') ? 'selected' : '' ?>>Jumeirah Beach Residence</option>
                                <option value="Business Bay" <?= (($_GET['community'] ?? '') == 'Business Bay') ? 'selected' : '' ?>>Business Bay</option>
                                <option value="Dubai Hills Estate" <?= (($_GET['community'] ?? '') == 'Dubai Hills Estate') ? 'selected' : '' ?>>Dubai Hills Estate</option>
                                <option value="Arabian Ranches" <?= (($_GET['community'] ?? '') == 'Arabian Ranches') ? 'selected' : '' ?>>Arabian Ranches</option>
                                <option value="The Springs" <?= (($_GET['community'] ?? '') == 'The Springs') ? 'selected' : '' ?>>The Springs</option>
                                <option value="Emirates Hills" <?= (($_GET['community'] ?? '') == 'Emirates Hills') ? 'selected' : '' ?>>Emirates Hills</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Status</label>
                            <select name="status" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">All</option>
                                <option value="Ready" <?= (($_GET['status'] ?? '') == 'Ready') ? 'selected' : '' ?>>Ready</option>
                                <option value="Off Plan" <?= (($_GET['status'] ?? '') == 'Off Plan') ? 'selected' : '' ?>>Off Plan</option>
                            </select>
                        </div>

                        <!-- Bedrooms -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Bedrooms</label>
                            <select name="bedrooms" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">Bedroom</option>
                                <option value="Studio" <?= (($_GET['bedrooms'] ?? '') == 'Studio') ? 'selected' : '' ?>>Studio</option>
                                <option value="1" <?= (($_GET['bedrooms'] ?? '') == '1') ? 'selected' : '' ?>>1</option>
                                <option value="2" <?= (($_GET['bedrooms'] ?? '') == '2') ? 'selected' : '' ?>>2</option>
                                <option value="3" <?= (($_GET['bedrooms'] ?? '') == '3') ? 'selected' : '' ?>>3</option>
                                <option value="4" <?= (($_GET['bedrooms'] ?? '') == '4') ? 'selected' : '' ?>>4</option>
                                <option value="5" <?= (($_GET['bedrooms'] ?? '') == '5') ? 'selected' : '' ?>>5</option>
                                <option value="6+" <?= (($_GET['bedrooms'] ?? '') == '6+') ? 'selected' : '' ?>>6+</option>
                            </select>
                        </div>

                        <!-- Bathrooms -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Bathrooms</label>
                            <select name="bathrooms" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">Bathroom</option>
                                <option value="1" <?= (($_GET['bathrooms'] ?? '') == '1') ? 'selected' : '' ?>>1</option>
                                <option value="2" <?= (($_GET['bathrooms'] ?? '') == '2') ? 'selected' : '' ?>>2</option>
                                <option value="3" <?= (($_GET['bathrooms'] ?? '') == '3') ? 'selected' : '' ?>>3</option>
                                <option value="4" <?= (($_GET['bathrooms'] ?? '') == '4') ? 'selected' : '' ?>>4</option>
                                <option value="5" <?= (($_GET['bathrooms'] ?? '') == '5') ? 'selected' : '' ?>>5</option>
                                <option value="6+" <?= (($_GET['bathrooms'] ?? '') == '6+') ? 'selected' : '' ?>>6+</option>
                            </select>
                        </div>

                        <!-- Min/Max Price -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Min. price</label>
                            <input type="text" name="min_price" placeholder="Min. price"
                                value="<?= htmlspecialchars($_GET['min_price'] ?? '') ?>"
                                class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                        </div>
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Max. price</label>
                            <input type="text" name="max_price" placeholder="Max. price"
                                value="<?= htmlspecialchars($_GET['max_price'] ?? '') ?>"
                                class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </section>

    <!-- Property Cards Grid -->
    <section class="container py-10 mx-auto">
        <div class="flex justify-end items-center w-full gap-3 px-4 pb-5">
            <!-- First Dropdown (small) -->
            <select
                class="border border-gray-300 text-sm rounded-lg p-2 w-20 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="48">48</option>
            </select>

            <!-- Second Dropdown (large) -->
            <select
                class="border border-gray-300 text-sm rounded-lg p-2 w-40 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Default</option>
                <option value="latest">Latest</option>
                <option value="latest">Oldest</option>
                <option value="latest">Newest</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="latest">Latest</option>
            </select>
        </div>

<?php
// properties.php

// Load and decode the properties.json file
$properties = json_decode(file_get_contents('properties.json'), true);

// Function to check if a string contains a keyword (case-insensitive)
function containsKeyword($haystack, $needle) {
    return stripos($haystack, $needle) !== false;
}

// Get filters from GET request
$keyword = $_GET['keyword'] ?? '';
$type = $_GET['type'] ?? '';
$price_range = $_GET['price_range'] ?? '';
$location = $_GET['location'] ?? '';
$community = $_GET['community'] ?? '';
$status = $_GET['status'] ?? '';
$bedrooms = $_GET['bedrooms'] ?? '';
$bathrooms = $_GET['bathrooms'] ?? '';
$min_price = $_GET['min_price'] ?? '';
$max_price = $_GET['max_price'] ?? '';

// Filter properties
$filtered = array_filter($properties, function ($property) use ($keyword, $type, $price_range, $location, $community, $status, $bedrooms, $bathrooms, $min_price, $max_price) {
    // Keyword match
    if ($keyword && !containsKeyword($property['title'], $keyword) && !containsKeyword($property['location'], $keyword)) {
        return false;
    }

    // Type
    if ($type && $property['type'] !== $type) {
        return false;
    }

    // Location
    if ($location && !containsKeyword($property['location'], $location)) {
        return false;
    }

    // Community
    if ($community && $property['community'] !== $community) {
        return false;
    }

    // Status
    if ($status && $property['status'] !== $status) {
        return false;
    }

    // Bedrooms
    if ($bedrooms && $property['bedrooms'] != $bedrooms) {
        return false;
    }

    // Bathrooms
    if ($bathrooms && $property['bathrooms'] != $bathrooms) {
        return false;
    }

    // Price Range (dropdown)
    if ($price_range) {
        if ($price_range === 'AED 100k - 500k' && ($property['price'] < 100000 || $property['price'] > 500000)) return false;
        if ($price_range === 'AED 500k - 1M' && ($property['price'] < 500000 || $property['price'] > 1000000)) return false;
        if ($price_range === 'AED 1M+' && $property['price'] <= 1000000) return false;
    }

    // Min Price
    if ($min_price && $property['price'] < (int)$min_price) {
        return false;
    }

    // Max Price
    if ($max_price && $property['price'] > (int)$max_price) {
        return false;
    }

    return true;
});

// If no filter applied, show all
if (empty($_GET)) {
    $filtered = $properties;
}

?>

<div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
<?php if (empty($filtered)): ?>
    <div class="col-span-full text-center py-16">
        <h2 class="text-3xl font-bold text-gray-800">No Properties Found</h2>
        <p class="mt-2 text-lg text-gray-600">Sorry, we couldn't find any properties matching your search criteria.</p>
    </div>
<?php else: ?>
    <?php foreach ($filtered as $property):
        $image = $property['image'];
        $title = $property['title'];
        $type = $property['type'];
        $location = $property['location'];
        $price = $property['price'];
        $bedrooms = $property['bedrooms'];
        $bathrooms = $property['bathrooms'];
        $sqft = $property['sqft'];
        $tags = $property['tags'];
?>
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="flex flex-col h-full">
            <div class="relative">
                <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($title) ?>" class="w-full h-48 sm:h-56 object-cover">
                <div class="absolute top-3 left-3 flex gap-2">
                    <?php foreach ($tags as $tag): ?>
                        <?php $tagColor = $tag === 'Featured' ? 'bg-primary' : 'bg-secondary'; ?>
                        <span class="<?= $tagColor ?> text-white px-3 py-1 rounded-full text-xs font-medium"><?= htmlspecialchars($tag) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="p-4 sm:p-5 flex flex-col flex-grow">
                <span class="text-sm font-medium text-gray-500 mb-1"><?= htmlspecialchars($type) ?></span>
                <h3 class="text-lg sm:text-xl font-bold text-gray-900"><?= htmlspecialchars($title) ?></h3>
                <p class="text-sm text-gray-600 mb-3"><?= htmlspecialchars($location) ?></p>
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center gap-1">
                        🛏 <span class="text-sm text-gray-700"><?= $bedrooms ?></span>
                    </div>
                    <div class="flex items-center gap-1">
                        🛁 <span class="text-sm text-gray-700"><?= $bathrooms ?></span>
                    </div>
                    <div class="flex items-center gap-1">
                        📏 <span class="text-sm text-gray-700"><?= $sqft ?> sqft</span>
                    </div>
                </div>
                <div class="mt-auto flex justify-between items-center border-t pt-3">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-gray-200 rounded-full">
                        </div>
                        <span class="text-sm text-gray-700">Agent Name</span>
                    </div>
                    <div class="text-lg font-bold text-primary">$<?= number_format($price) ?></div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php endif; ?>
</div>
<div class="w-full text-center mt-8">
  <button class="bg-secondary hover:bg-primary text-white font-semibold py-2 px-6 rounded-full shadow-md transition duration-300">
    Load More
  </button>
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
                            <svg class="w-4 h-4 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">Business Bay, Dubai, United Arab Emirates</span>
                        </div>
                        <div class="flex items-center text-white">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-xs sm:text-sm">+971 50 123 4567</span>
                        </div>
                        <div class="flex items-center text-white">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
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
                        <li><a href="#"
                                class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Browse
                                Properties</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Our
                                Services</a></li>
                        <li><a href="#"
                                class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">About
                                NIP</a></li>
                        <li><a href="#"
                                class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Contact
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
                        <li><a href="#"
                                class="text-white hover:text-gray-300 transition-colors text-xs sm:text-sm">Privacy &
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

    <!-- for mobile nip approach  -->
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

    <!-- for navbar bg color  -->
    <script>
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


        // Toggle advanced filters
        const toggleBtn = document.getElementById('toggle-advanced');
        const advancedOptions = document.getElementById('advanced-options');
        const btnText = toggleBtn.querySelector('span');

        toggleBtn.addEventListener('click', () => {
            advancedOptions.classList.toggle('hidden');
            btnText.textContent = advancedOptions.classList.contains('hidden') ? 'Filters' : 'Hide Filters';
        });
    </script>


</body>

</html>