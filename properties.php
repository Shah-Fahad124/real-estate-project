<?php include './admin/auth/connection.php'; ?>

<?php
$keyword       = $_GET['keyword'] ?? '';
$type          = $_GET['type'] ?? '';
$price_range   = $_GET['price_range'] ?? '';
$location      = $_GET['location'] ?? '';
$community     = $_GET['community'] ?? '';
$status        = $_GET['status'] ?? '';
$bedrooms      = $_GET['bedrooms'] ?? '';
$bathrooms     = $_GET['bathrooms'] ?? '';
$min_price     = $_GET['min_price'] ?? '';
$max_price     = $_GET['max_price'] ?? '';
$area_id       = $_GET['area'] ?? '';
$developer_id  = $_GET['developer'] ?? '';
$listing_type  = $_GET['listing_type'] ?? '';
$category      = $_GET['category'] ?? '';

// Start query and condition array
$sql        = "SELECT DISTINCT p.* FROM properties p";
$conditions = [];
$joins      = [];

// Always fetch only published properties
$conditions[] = "p.status = 1";

// Join with property_developers if developer_id filter is applied
if (!empty($developer_id)) {
    $joins[]      = "INNER JOIN property_developers pd ON p.id = pd.property_id";
    $conditions[] = "pd.developer_id = " . (int)$developer_id;
}

// Keyword search
if (!empty($keyword)) {
    $keywordEscaped = mysqli_real_escape_string($conn, $keyword);
    $conditions[]   = "(p.title LIKE '%$keywordEscaped%' OR p.location LIKE '%$keywordEscaped%')";
}

// Only use $type if category is not provided (avoid double filtering)
if (empty($category) && !empty($type)) {
    $conditions[] = "p.type = '" . mysqli_real_escape_string($conn, $type) . "'";
}

// Location filter
if (!empty($location)) {
    $conditions[] = "p.location LIKE '%" . mysqli_real_escape_string($conn, $location) . "%'";
}

// Community filter
if (!empty($community)) {
    $conditions[] = "p.location LIKE '%" . mysqli_real_escape_string($conn, $community) . "%'";
}

// Area filter
if (!empty($area_id)) {
    $conditions[] = "p.area_id = " . (int)$area_id;
}

// Bedrooms filter
if (!empty($bedrooms)) {
    $conditions[] = "p.bedrooms = " . (int)$bedrooms;
}

// Bathrooms filter
if (!empty($bathrooms)) {
    $conditions[] = "p.bathrooms = " . (int)$bathrooms;
}

// Price range filter
if (!empty($price_range)) {
    if ($price_range === 'AED 100k - 500k') {
        $conditions[] = "p.price BETWEEN 100000 AND 500000";
    } elseif ($price_range === 'AED 500k - 1M') {
        $conditions[] = "p.price BETWEEN 500000 AND 1000000";
    } elseif ($price_range === 'AED 1M+') {
        $conditions[] = "p.price > 1000000";
    }
}

// Min price filter
if (!empty($min_price)) {
    $conditions[] = "p.price >= " . (int)$min_price;
}

// Max price filter
if (!empty($max_price)) {
    $conditions[] = "p.price <= " . (int)$max_price;
}

// Match BOTH listing_type and category in the same record
if (!empty($listing_type) && !empty($category)) {
    $conditions[] = "(p.listing_type = '" . mysqli_real_escape_string($conn, $listing_type) . "' 
                      AND p.type = '" . mysqli_real_escape_string($conn, $category) . "')";
}

// Combine joins and conditions
if (!empty($joins)) {
    $sql .= ' ' . implode(' ', $joins);
}
if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

$sql .= " ORDER BY p.created_at DESC LIMIT 12";


$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Title -->
    <title>Properties - NIP Real Estate | Buy, Sell, and Rent Properties</title>

    <!-- Meta Description -->
    <meta name="description" content="Explore properties for sale and rent with NIP Real Estate. Find apartments, villas, and commercial spaces at the best locations with premium facilities.">

    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">



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
    <?php include './components/navbar.php' ?>

    <!-- hero section with Search Filters -->
    <section class="relative w-full">
        <!-- Hero Section -->
        <section class="h-[90vh] md:h-[100vh] lg:h-[90vh] flex items-center relative"
            style="background:url('assets/images/Jumeirah\ Golf\ Estates.jpg'); background-repeat: no-repeat;background-size: cover;background-position: bottom;">
            <div class="bg-black bg-opacity-70 absolute inset-0 w-full h-full z-2"></div>


            <form action="properties.php" method="GET" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-11/12 max-w-6xl bg-white p-6 rounded-xl shadow-xl mt-10">

                <!-- Basic Search -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <div>
                        <label class="font-semibold font-body text-dark">Keyword</label>
                        <input type="text" name="keyword" placeholder="Search for Keyword"
                            value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>"
                            class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                    </div>

                    <div>
                        <label class="font-semibold font-body text-dark">Location</label>
                        <input type="text" name="location" placeholder="Search for Location"
                            value="<?= htmlspecialchars($_GET['location'] ?? '') ?>"
                            class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                    </div>

                    <div>
                        <label class="font-semibold font-body text-dark">Type</label>
                        <select name="type" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                            <option value="">-- Select --</option>
                            <option value="Apartment" <?= (($_GET['type'] ?? '') == 'Apartment') ? 'selected' : '' ?>>Apartment</option>
                            <option value="Villa" <?= (($_GET['type'] ?? '') == 'Villa') ? 'selected' : '' ?>>Villa</option>
                            <option value="Townhouse" <?= (($_GET['type'] ?? '') == 'Townhouse') ? 'selected' : '' ?>>Townhouse</option>
                            <option value="Penthouse" <?= (($_GET['type'] ?? '') == 'Penthouse') ? 'selected' : '' ?>>Penthouse</option>
                            <option value="Studio" <?= (($_GET['type'] ?? '') == 'Studio') ? 'selected' : '' ?>>Studio</option>
                            <option value="Office" <?= (($_GET['type'] ?? '') == 'Office') ? 'selected' : '' ?>>Office</option>
                            <option value="Retail" <?= (($_GET['type'] ?? '') == 'Retail') ? 'selected' : '' ?>>Retail</option>
                            <option value="Warehouse" <?= (($_GET['type'] ?? '') == 'Warehouse') ? 'selected' : '' ?>>Warehouse</option>
                        </select>
                    </div>

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

                <!-- Advanced Filters -->
                <div id="advanced-options" class="mt-6 hidden transition-all">
                    <div class="grid grid-cols-3 gap-6">
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
                                <option value="Downtown Dubai" <?= ($_GET['community'] ?? '') == 'Downtown Dubai' ? 'selected' : '' ?>>Downtown Dubai</option>
                                <option value="Dubai Marina" <?= ($_GET['community'] ?? '') == 'Dubai Marina' ? 'selected' : '' ?>>Dubai Marina</option>
                                <option value="Jumeirah Beach Residence" <?= ($_GET['community'] ?? '') == 'Jumeirah Beach Residence' ? 'selected' : '' ?>>Jumeirah Beach Residence</option>
                                <option value="Business Bay" <?= ($_GET['community'] ?? '') == 'Business Bay' ? 'selected' : '' ?>>Business Bay</option>
                                <option value="Dubai Hills Estate" <?= ($_GET['community'] ?? '') == 'Dubai Hills Estate' ? 'selected' : '' ?>>Dubai Hills Estate</option>
                                <option value="Arabian Ranches" <?= ($_GET['community'] ?? '') == 'Arabian Ranches' ? 'selected' : '' ?>>Arabian Ranches</option>
                                <option value="The Springs" <?= ($_GET['community'] ?? '') == 'The Springs' ? 'selected' : '' ?>>The Springs</option>
                                <option value="Emirates Hills" <?= ($_GET['community'] ?? '') == 'Emirates Hills' ? 'selected' : '' ?>>Emirates Hills</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Status</label>
                            <select name="status" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">All</option>
                                <option value="Ready" <?= ($_GET['status'] ?? '') == 'Ready' ? 'selected' : '' ?>>Ready</option>
                                <option value="Off Plan" <?= ($_GET['status'] ?? '') == 'Off Plan' ? 'selected' : '' ?>>Off Plan</option>
                            </select>
                        </div>

                        <!-- Bedrooms -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Bedrooms</label>
                            <select name="bedrooms" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">Bedroom</option>
                                <option value="0" <?= ($_GET['bedrooms'] ?? '') == '0' ? 'selected' : '' ?>>Studio</option>
                                <option value="1" <?= ($_GET['bedrooms'] ?? '') == '1' ? 'selected' : '' ?>>1</option>
                                <option value="2" <?= ($_GET['bedrooms'] ?? '') == '2' ? 'selected' : '' ?>>2</option>
                                <option value="3" <?= ($_GET['bedrooms'] ?? '') == '3' ? 'selected' : '' ?>>3</option>
                                <option value="4" <?= ($_GET['bedrooms'] ?? '') == '4' ? 'selected' : '' ?>>4</option>
                                <option value="5" <?= ($_GET['bedrooms'] ?? '') == '5' ? 'selected' : '' ?>>5</option>
                                <option value="6" <?= ($_GET['bedrooms'] ?? '') == '6' ? 'selected' : '' ?>>6+</option>
                            </select>
                        </div>

                        <!-- Bathrooms -->
                        <div>
                            <label class="font-semibold font-body text-dark mb-2 block">Bathrooms</label>
                            <select name="bathrooms" class="w-full px-4 py-3 border border-light rounded-lg focus:outline-none focus:ring-2 focus:ring-primary font-body">
                                <option value="">Bathroom</option>
                                <option value="1" <?= ($_GET['bathrooms'] ?? '') == '1' ? 'selected' : '' ?>>1</option>
                                <option value="2" <?= ($_GET['bathrooms'] ?? '') == '2' ? 'selected' : '' ?>>2</option>
                                <option value="3" <?= ($_GET['bathrooms'] ?? '') == '3' ? 'selected' : '' ?>>3</option>
                                <option value="4" <?= ($_GET['bathrooms'] ?? '') == '4' ? 'selected' : '' ?>>4</option>
                                <option value="5" <?= ($_GET['bathrooms'] ?? '') == '5' ? 'selected' : '' ?>>5</option>
                                <option value="6" <?= ($_GET['bathrooms'] ?? '') == '6' ? 'selected' : '' ?>>6+</option>
                            </select>
                        </div>

                        <!-- Price -->
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



    <section class="cards py-10">
        <div class="w-[80%] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
            <?php if (mysqli_num_rows($result) === 0): ?>
                <div class="col-span-full text-center">
                    <h2 class="text-3xl font-bold text-gray-800">No Properties Found</h2>
                    <p class="mt-2 text-lg text-gray-600">Sorry, we couldn't find any properties matching your search criteria.</p>
                </div>
            <?php else: ?>
                <?php while ($property = mysqli_fetch_assoc($result)): ?>
                    <?php
                    $image = $property['image'];
                    $title = $property['title'];
                    $type = $property['type'];
                    $location = $property['location'];
                    $price = $property['price'];
                    $bedrooms = $property['bedrooms'];
                    $bathrooms = $property['bathrooms'];
                    $sqft = $property['area_sqft'];
                    $featured = $property['featured'];
                    $tags = [];

                    if ($featured) {
                        $tags[] = "Featured";
                    }
                    if (!empty($property['purpose'])) {
                        $tags[] = ucfirst($property['purpose']);
                    }
                    ?>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <a href="single-page.php?id=<?php echo $property['id'] ?>" class="flex flex-col h-full">
                            <div class="relative">
                                <img src="./admin/assets/images/<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($title) ?>" class="w-full h-48 sm:h-56 object-cover">
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
                                            <!-- Placeholder for agent image -->
                                        </div>
                                        <span class="text-sm text-gray-700"><?= htmlspecialchars($property['developer_name'] ?? 'Agent Name') ?></span>
                                    </div>
                                    <div class="text-lg font-bold text-primary">AED <?= number_format($price) ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- <div class="w-full text-center mt-8">
            <button class="bg-primary hover:bg-secondary text-white font-semibold py-2 px-6 rounded-full shadow-md transition duration-300">
                Load More
            </button>
        </div> -->
    </section>

    <!-- Footer -->
    <?php include './components/footer.php'; ?>

    <!-- for mobile nip approach  -->
    <script>
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