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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/css/intlTelInput.css">
       <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<?php
include "./admin/auth/connection.php";
$developers = [];
$developersQuery = "SELECT * FROM developers";
$result = mysqli_query($conn, $developersQuery);
while ($row = mysqli_fetch_assoc($result)) {
    $developers[] = $row;
}

?>
<?php include './admin/components/sweet-alert.php'; ?>
<body class="bg-white font-body">
    <!-- Hero Wrapper with Background Image -->
    <div class="bg-cover bg-center min-h-[80%] md:min-h-screen relative"
        style="background-image: url('assets/images/hero-slider-img.jpg');">

        <!-- Black Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-70 z-0"></div>

        <!-- Navbar -->
        <?php include "./components/navbar.php"; ?>

        <!-- Hero Section Content -->
        <section class="relative min-h-[80vh] md:min-h-screen flex items-center justify-center pt-20 sm:pt-24 md:pt-32 lg:pt-40 px-4 sm:px-6 lg:px-8 z-10">
            <div class="text-center text-white max-w-7xl mx-auto w-full relative z-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 sm:mb-6 leading-tight font-heading">
                    Where Vision Meets Ownership
                </h1>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 sm:mb-8 text-gray-200 max-w-4xl mx-auto px-2 font-subheading">
                    NIP transforms aspirations into legacy. We don't just help you find property — we help you secure
                    your place in the world's finest investments.
                </p>
                <form action="properties.php" method="GET" class="bg-white p-4 sm:p-6 rounded-lg shadow-lg max-w-4xl mx-auto" style="margin-bottom: 30px !important;">
                    <!-- Mobile -->
                    <div class="block lg:hidden space-y-4">
                        <input type="text" name="keyword" placeholder="Search by keyword or location"
                            class="w-full h-12 px-4 border border-secondary rounded-lg focus:outline-none focus:ring-1 focus:ring-secondary text-gray-700" />
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <select name="type" class="w-full h-12 border border-secondary rounded-lg text-secondary bg-white overflow-hidden">
                                <option value="">Property Type</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Villa">Villa</option>
                                <option value="Townhouse">Townhouse</option>
                                <option value="Penthouse">Penthouse</option>
                                <option value="Studio">Studio</option>
                                <option value="Office">Office</option>
                                <option value="Retail">Retail</option>
                                <option value="Warehouse">Warehouse</option>
                            </select>
                            <select name="price_range" class="w-full h-12 px-4 border border-secondary text-secondary rounded-lg bg-white">
                                <option value="">All Prices</option>
                                <option value="AED 100k - 500k">AED 100k - 500k</option>
                                <option value="AED 500k - 1M">AED 500k - 1M</option>
                                <option value="AED 1M+">AED 1M+</option>
                            </select>
                        </div>
                        <button type="submit" class="h-12 w-full bg-secondary text-white font-medium px-6 rounded-lg hover:bg-dark transition-colors">
                            Search
                        </button>
                    </div>

                    <!-- Desktop -->
                    <div class="hidden lg:grid lg:grid-cols-5 gap-4 items-center">
                        <input type="text" name="keyword" placeholder="Search by keyword"
                            class="col-span-2 h-12 px-4 border border-gray-200 rounded-lg focus:ring-primary text-gray-700" />
                        <select name="type" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                            <option value="">Property type</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Villa">Villa</option>
                            <option value="Townhouse">Townhouse</option>
                            <option value="Penthouse">Penthouse</option>
                            <option value="Studio">Studio</option>
                            <option value="Office">Office</option>
                            <option value="Retail">Retail</option>
                            <option value="Warehouse">Warehouse</option>
                        </select>
                        <select name="price_range" class="h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                            <option value="">All Prices</option>
                            <option value="AED 100k - 500k">AED 100k - 500k</option>
                            <option value="AED 500k - 1M">AED 500k - 1M</option>
                            <option value="AED 1M+">AED 1M+</option>
                        </select>
                        <button type="submit" class="h-12 bg-secondary text-white font-medium px-6 rounded-lg hover:bg-dark transition-colors">
                            Search
                        </button>
                    </div>

                    <!-- Advanced Filters Section -->
                    <div id="advanced-filters" class="hidden pt-6 border-gray-200">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                            <input type="text" name="location" placeholder="Location"
                                class="w-full h-12 px-4 pl-10 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary text-gray-700 bg-white">
                            <!-- <select name="type" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                                <option value="">Select property type</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Villa">Villa</option>
                                <option value="Townhouse">Townhouse</option>
                                <option value="Penthouse">Penthouse</option>
                                <option value="Studio">Studio</option>
                                <option value="Office">Office</option>
                                <option value="Retail">Retail</option>
                                <option value="Warehouse">Warehouse</option>
                            </select> -->
                            <select name="community" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                                <option value="">Communities</option>
                                <option value="Downtown Dubai">Downtown Dubai</option>
                                <option value="Dubai Marina">Dubai Marina</option>
                                <option value="Jumeirah Beach Residence">Jumeirah Beach Residence</option>
                                <option value="Business Bay">Business Bay</option>
                                <option value="Dubai Hills Estate">Dubai Hills Estate</option>
                                <option value="Arabian Ranches">Arabian Ranches</option>
                                <option value="The Springs">The Springs</option>
                                <option value="Emirates Hills">Emirates Hills</option>
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
                                <option value="0">Studio</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6+</option>
                            </select>
                            <select name="bathrooms" class="w-full h-12 px-4 border border-gray-200 rounded-lg text-gray-700 bg-white">
                                <option value="">Bathroom</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6+</option>
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
    <?php
    $areas = [];
    $areasQuery = "SELECT * FROM areas limit 6";
    $result = mysqli_query($conn, $areasQuery);
    while ($row = mysqli_fetch_assoc($result)) {
        $areas[] = $row;
    }
    ?>

    <!-- Featured Neighbourhood Section -->
    <section class="py-8 sm:py-12 md:py-10 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary font-heading">FEATURED NEIGHBOURHOOD</h2>
            </div>

            <!-- Mobile Gallery (Stacked Cards) -->
            <div class="block sm:hidden space-y-4">
                <?php foreach ($areas as $index => $area): ?>
                    <?php if ($index < 3): ?>
                        <a href="properties.php?area=<?= urlencode($area['id']) ?>">
                            <div class="relative rounded-lg overflow-hidden group cursor-pointer h-48">
                                <img src="./admin/assets/images/<?= $area['image'] ?>" alt="<?= htmlspecialchars($area['name']) ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4">
                                    <h3 class="text-white text-lg font-semibold mb-2 uppercase"><?= strtoupper($area['name']) ?></h3>
                                    <div class="absolute bottom-3 right-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>

                <div class="grid grid-cols-2 gap-3">
                    <?php foreach ($areas as $index => $area): ?>
                        <?php if ($index >= 3 && $index < 5): ?>
                            <a href="properties.php?area=<?= urlencode($area['id']) ?>">
                                <div class="relative rounded-lg overflow-hidden group cursor-pointer h-32">
                                    <img src="./admin/assets/images/<?= $area['image'] ?>" alt="<?= htmlspecialchars($area['name']) ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-3">
                                        <h3 class="text-white text-sm font-semibold uppercase"><?= strtoupper($area['name']) ?></h3>
                                        <div class="absolute bottom-2 right-2">
                                            <div class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <?php if (isset($areas[5])): ?>
                    <a href="properties.php?area=<?= urlencode($areas[5]['id']) ?>">
                        <div class="relative rounded-lg overflow-hidden group cursor-pointer h-40">
                            <img src="./admin/assets/images/<?= $areas[5]['image'] ?>" alt="<?= htmlspecialchars($areas[5]['name']) ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold uppercase"><?= strtoupper($areas[5]['name']) ?></h3>
                                <div class="absolute bottom-3 right-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Tablet & Desktop Layout -->
            <div class="hidden sm:block">
                <div class="grid md:hidden grid-cols-2 gap-4 h-[500px]">
                    <?php foreach ($areas as $index => $area): ?>
                        <a href="properties.php?area=<?= urlencode($area['id']) ?>" class="<?= $index === 0 ? 'row-span-2' : ($index === 4 ? 'col-span-2' : '') ?>">
                            <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                                <img src="./admin/assets/images/<?= $area['image'] ?>" alt="<?= htmlspecialchars($area['name']) ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4">
                                    <h3 class="text-white text-lg font-semibold uppercase"><?= strtoupper($area['name']) ?></h3>
                                    <div class="absolute bottom-3 right-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Desktop Gallery -->
                <div class="hidden md:grid grid-cols-3 grid-rows-3 gap-4 h-[600px]">
                    <?php foreach ($areas as $index => $area): ?>
                        <?php
                        $classes = '';
                        if ($index === 0) $classes = 'row-span-2';
                        elseif ($index === 1) $classes = 'col-start-1 row-start-3';
                        elseif ($index === 2) $classes = 'col-start-2 row-start-1';
                        elseif ($index === 3) $classes = 'row-span-2 col-start-2 row-start-2';
                        elseif ($index === 4) $classes = 'row-span-2 col-start-3 row-start-1';
                        elseif ($index === 5) $classes = 'col-start-3 row-start-3';
                        else $classes = ''; // fallback
                        ?>
                        <a href="properties.php?area=<?= urlencode($area['id']) ?>" class="<?= $classes ?>">
                            <div class="relative rounded-lg overflow-hidden group cursor-pointer h-full">
                                <img src="./admin/assets/images/<?= $area['image'] ?>" alt="<?= htmlspecialchars($area['name']) ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4">
                                    <h3 class="text-white text-lg font-semibold uppercase"><?= strtoupper($area['name']) ?></h3>
                                    <div class="absolute bottom-3 right-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
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
            <?php
            $sql = "SELECT * FROM properties 
        ORDER BY created_at DESC 
        LIMIT 4";

            $result = mysqli_query($conn, $sql);
            ?>
            <div class="w-[85%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <a href="single-page.php?id=<?php echo $row['id'] ?>" class="bg-white rounded-xl sm:rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="flex flex-col sm:flex-row min-h-full">
                            <!-- Image Section -->
                            <div class="relative w-full sm:w-2/5 min-h-full">
                                <img src="./admin/assets/images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>"
                                    class="w-full h-full object-cover">
                                <?php if ($row['featured']) { ?>
                                    <div class="absolute top-3 left-3 sm:top-4 sm:left-4">
                                        <span class="bg-primary text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">Featured</span>
                                    </div>
                                <?php } ?>
                            </div>

                            <!-- Content Section -->
                            <div class="flex-1 p-4 sm:p-6 flex flex-col justify-between">
                                <div>
                                    <!-- Tags -->
                                    <div class="flex flex-wrap gap-2 mb-3">
                                        <span class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">
                                            <?php echo htmlspecialchars($row['type']); ?>
                                        </span>
                                        <span class="bg-dark text-white px-2 sm:px-3 py-1 rounded-full text-xs font-medium">
                                            <?php echo htmlspecialchars($row['purpose']); ?>
                                        </span>
                                    </div>

                                    <!-- Title -->
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 flex-1 pr-2">
                                            <?php echo htmlspecialchars($row['title']); ?>
                                        </h3>
                                    </div>

                                    <p class="text-secondary text-sm mb-3 sm:mb-4">
                                        <?php echo htmlspecialchars($row['location']); ?>
                                    </p>

                                    <!-- Property Details -->
                                    <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4 flex-wrap">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                                <!-- Bedroom Icon -->
                                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M21 10h-1V7a2 2 0 00-2-2H6a2 2 0 00-2 2v3H3a1 1 0 000 2h1v6h2v-2h12v2h2v-6h1a1 1 0 000-2zM6 7h12v3H6V7z" />
                                                </svg>
                                            </div>
                                            <span class="text-xs sm:text-sm text-dark font-medium"><?php echo $row['bedrooms']; ?></span>
                                        </div>

                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                                <!-- Bathroom Icon -->
                                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M7 4a1 1 0 011-1h8a1 1 0 011 1v9H7V4zm12 9a1 1 0 100 2H5a1 1 0 100-2h14z" />
                                                </svg>
                                            </div>
                                            <span class="text-xs sm:text-sm text-dark font-medium"><?php echo $row['bathrooms']; ?></span>
                                        </div>

                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <div class="bg-secondary p-1.5 sm:p-2 rounded-full">
                                                <!-- Area Icon -->
                                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M4 6H2v14a2 2 0 002 2h14v-2H4V6zm16-4H8a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2z" />
                                                </svg>
                                            </div>
                                            <span class="text-xs sm:text-sm text-dark font-medium"><?php echo $row['area_sqft']; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price -->
                                <div class="flex items-center pt-2 sm:pt-0">
                                    <div class="text-lg sm:text-2xl font-bold text-primary w-full text-right">
                                        AED <?php echo number_format($row['price']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>


    <!--Developers Brand Logos Section -->
    <section class="py-12 bg-light overflow-hidden">
        <div class="w-max flex gap-6 animate-[scroll-x_20s_linear_infinite]">
            <div class="flex gap-6">
                <?php foreach ($developers as $developer) { ?>
                    <a href="properties.php?developer=<?php echo $developer['id'] ?>" class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                        <img src="./admin/assets/images/<?php echo $developer['logo'] ?>" alt="developer logo" class="h-20 object-contain">
                    </a>
                <?php } ?>

            </div>
            <!-- Duplicate for seamless loop -->
            <div class="flex gap-6">
                <?php foreach ($developers as $developer) { ?>
                    <a href="properties.php?developer=<?php echo $developer['id'] ?>" class="bg-white rounded-lg shadow-md p-4 w-40 h-32 flex items-center justify-center">
                        <img src="./admin/assets/images/<?php echo $developer['logo'] ?>" alt="developer logo" class="h-20 object-contain">
                    </a>
                <?php } ?>
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
                    <form action="contact-process.php" method="POST" class="space-y-3 sm:space-y-4">
                        <!-- Name Field -->
                        <div>
                            <input type="text" placeholder="Full Name"
                                class="w-full px-3 sm:px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 text-sm sm:text-base" name="name" required>
                        </div>

                        <!-- Email Field -->
                        <div>
                            <input type="email" placeholder="Email Address"
                                class="w-full px-3 sm:px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 text-sm sm:text-base" name="email" required>
                        </div>

                        <!-- Language Dropdown -->
                        <div class="relative">
                            <select
                                class="w-full px-3 sm:px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 appearance-none bg-white text-sm sm:text-base" name="lang" required>
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
                        <div class="w-full text-primary">
                            <input id="phone" type="tel"
                                class="block w-full px-4 py-3 sm:py-4 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900"
                                placeholder="Phone Number" required>
                            <!-- Hidden input to store full phone number -->
                            <input type="hidden" name="full_phone" id="full_phone" required>
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
                        <button id="submitbtn" type="submit"
                            class="w-full bg-primary hover:bg-secondary text-white font-semibold py-3 sm:py-4 px-4 sm:px-6 rounded-lg transition-colors duration-200 text-sm sm:text-lg">
                            Submit Inquiry
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <?php include './components/footer.php'  ?>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js"></script>

    <style>
        @keyframes scroll-x {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Custom styles for the country list */
        .iti__country-list {
            width: 300px !important;
            left: 0 !important;
            transform: translateX(0%) !important;
            scrollbar-width: none;
        }

        /* Make the container full width */
        .iti {
            width: 100% !important;
        }
    </style>

    <script>
        // Advanced Filters Toggle
        document.getElementById('advanced-toggle').addEventListener('click', function() {
            const filters = document.getElementById('advanced-filters');
            filters.classList.toggle('hidden');

            const buttonText = filters.classList.contains('hidden') ? 'Advanced Filters' : 'Hide Filters';
            this.innerHTML = this.innerHTML.replace(/Advanced Filters|Hide Filters/, buttonText);
        });

        // Counter animation
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");
            const activeAnimations = new Map();

            const startCounting = (counter) => {
                const target = +counter.getAttribute("data-target");
                let count = 0;
                const speed = 30;

                if (activeAnimations.has(counter)) {
                    clearTimeout(activeAnimations.get(counter));
                }

                const updateCount = () => {
                    const increment = Math.ceil(target / speed);
                    if (count < target) {
                        count += increment;
                        counter.innerText = count > target ? target : count;
                        const timeoutId = setTimeout(updateCount, 30);
                        activeAnimations.set(counter, timeoutId);
                    } else {
                        counter.innerText = target.toLocaleString();
                        activeAnimations.delete(counter);
                    }
                };
                updateCount();
            };

            const resetCounter = (counter) => {
                if (activeAnimations.has(counter)) {
                    clearTimeout(activeAnimations.get(counter));
                    activeAnimations.delete(counter);
                }
                counter.innerText = "0";
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    const counter = entry.target;
                    if (entry.isIntersecting) {
                        startCounting(counter);
                    } else {
                        resetCounter(counter);
                    }
                });
            }, {
                threshold: 0.5,
                rootMargin: '0px 0px -10% 0px'
            });

            counters.forEach(counter => {
                observer.observe(counter);
                counter.innerText = "0";
            });
        });
    </script>

    <script>
        // <!-- testimonial-content -->

        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('input[name="testimonial-slide"]');
            const nextBtn = document.querySelector('label[for="next-testimonials"]');
            const prevBtn = document.querySelector('label[for="prev-testimonials"]');
            let currentSlide = 0;
            const totalSlides = slides.length;

            nextBtn.addEventListener('click', function() {
                currentSlide = (currentSlide + 1) % totalSlides;
                slides[currentSlide].checked = true;
            });

            prevBtn.addEventListener('click', function() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                slides[currentSlide].checked = true;
            });
        });
    </script>
    <!-- checkbox in contact form  -->
    <script>
        const privacyCheckbox = document.getElementById('privacy');
        const submitBtn = document.getElementById('submitbtn');
        if (privacyCheckbox) {
            privacyCheckbox.addEventListener('change', function() {
                submitBtn.disabled = !this.checked;
                submitBtn.classList.toggle('opacity-50', !this.checked);
            });
            // Initialize the button state
            submitBtn.disabled = !privacyCheckbox.checked;
            submitBtn.classList.toggle('opacity-50', !privacyCheckbox.checked);
        }

        const input = document.querySelector("#phone");
        const fullPhoneInput = document.querySelector("#full_phone");

        const iti = window.intlTelInput(input, {
            initialCountry: "ae", // UAE default
            nationalMode: false, // Show full international number
            separateDialCode: true, // Show code and flag
            preferredCountries: ["ae", "us", "gb", "in"],
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js"
        });

        //  Set hidden field value
        input.addEventListener("input", function() {
            document.getElementById("full_phone").value = iti.getNumber();
        });

        // Force wrapper (iti) to be full width
        input.parentNode.querySelector(".iti").style.width = "100%";

        // On form submit, set the full number
        // const form = document.querySelector("form");
        // form.addEventListener("submit", function() {
        //     if (iti.isValidNumber()) {
        //         fullPhoneInput.value = iti.getNumber(); // E.g. +971501234567
        //     } else {
        //         alert("Please enter a valid phone number.");
        //         event.preventDefault();
        //     }
        // });
    </script>

  <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>