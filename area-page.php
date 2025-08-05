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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/css/splide.min.css">
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
</head>
<?php
include "./admin/auth/connection.php";
$areas = [];
$areasQuery = "SELECT * FROM areas";
$result = mysqli_query($conn, $areasQuery);
while ($row = mysqli_fetch_assoc($result)) {
    $areas[] = $row;
}

?>

<body class="font-body">
    <!-- Header -->
 <?php include './components/navbar.php' ?>

    <!-- Hero Section -->
    <section class="h-[30vh] md:h-[40vh] lg:h-[60vh] flex items-center relative"
        style="background:url('assets/images/about-us-img.webp');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-4 font-heading">Top Areas</h1>
        </div>
        <div class="bg-black bg-opacity-70 absolute inset-0 w-full h-full z-2"></div>
    </section>

    <section class="flex flex-col justify-center item-center pt-8 font-body">
        <div
            class="w-[80vw] border border-gray-200 rounded-lg mx-auto shadow-md px-4 py-5 flex flex-col gap-5 max-w-6xl mt-5">
            <h1 class="font-heading text-xl font-bold px-4">Explore Dubai's Top Areas</h1>
            <div class="font-subheading">
                <p class="px-4">Discover Dubai’s diverse neighborhoods, from family-friendly communities to trendy
                    hotspots, each conveniently spread across the city. This page provides an in-depth look at Dubai's
                    top residential areas today, complete with insights on lifestyle options, amenities, and investment
                    potential for each location. Explore the best places to live and invest in, whether you’re looking
                    for vibrant urban settings, serene suburban areas, or upscale living options. Dive into detailed
                    information on each neighborhood and the various real estate projects available in Dubai.</p>
            </div>

        </div>

  <!-- Cards Grid Section -->
<div id="area-cards" class="cards-container container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-8 pt-12 mx-auto max-w-6xl">
    <!-- Cards will load here -->
</div>

<!-- Load More Button -->
<div class="w-full flex justify-center py-5">
    <button id="loadMoreBtn" class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition">
        Load More
    </button>
</div>

    </section>

    <!-- Footer -->
    <?php include './components/footer.php' ?>


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
    let offset = 0;

    function loadAreas() {
        fetch('load_areas.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'offset=' + offset
        })
        .then(response => response.json())
        .then(data => {
            if (data.length === 0) {
                document.getElementById('loadMoreBtn').style.display = 'none';
                return;
            }

            const container = document.getElementById('area-cards');

            data.forEach(area => {
                const card = `
                    <div class="card relative w-full overflow-hidden rounded-lg shadow-lg h-[450px]">
                        <img class="w-full h-full object-cover" src="./admin/assets/images/${area.image}" alt="${area.name}" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-end text-white pb-10">
                            <h2 class="text-2xl font-semibold mb-3">${area.name}</h2>
                            <a href="properties.php?area=${area.id}" class="border border-white text-white px-5 py-2 rounded-sm text-sm font-medium hover:bg-white hover:text-black transition duration-300">
                                ${area.project_count} Projects
                            </a>
                        </div>
                    </div>`;
                container.insertAdjacentHTML('beforeend', card);
            });

            offset += data.length;
        });
    }

    document.getElementById('loadMoreBtn').addEventListener('click', loadAreas);

    // Initial Load
    loadAreas();
</script>

</body>

</html>