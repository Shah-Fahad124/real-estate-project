<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers - NIP Real Estate</title>
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
<?php
include "./admin/auth/connection.php";
$developers = [];
$developersQuery = "SELECT * FROM developers";
$result = mysqli_query($conn, $developersQuery);

while ($row = mysqli_fetch_assoc($result)) {
    // Get the number of projects linked to this developer via property_developers
    $dev_id = $row['id'];
    $projectCountQuery = "SELECT COUNT(*) as total FROM property_developers WHERE developer_id = $dev_id";
    $projectResult = mysqli_query($conn, $projectCountQuery);
    $projectCount = mysqli_fetch_assoc($projectResult)['total'] ?? 0;

    $row['project_count'] = $projectCount;
    $developers[] = $row;
}


?>

<body class="font-body">
    <!-- Header -->
    <?php include './components/navbar.php' ?>

    <!-- Hero Section -->
    <section class="h-[30vh] md:h-[40vh] lg:h-[60vh] flex items-center relative"
        style="background:url('assets/images/about-us-hero-bg-img.jpg'); background-repeat: no-repeat;background-size: cover;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10">
            <h1 class="text-3xl md:text-4xl lg:text-6xl font-semibold mb-4 font-heading">Developers</h1>
            <p>Leading Property Development Brands</p>
        </div>
        <div class="bg-black bg-opacity-70 absolute inset-0 w-full h-full z-2"></div>
    </section>


    <!-- first main card content  -->
    <div
        class="w-[80vw] border border-gray-200 rounded-lg mx-auto px-4 py-10 flex flex-col gap-5 max-w-6xl mt-5 shadow-lg">
        <h1 class="font-heading text-4xl">Top Real Estate Developers in Dubai</h1>
        <div class="font-subheading">
            <p>At Novel Insight Property (NIP), we collaborate with visionary developers to seamlessly weave
                sophisticated security solutions into Dubai's most prestigious residential and commercial projects from
                conception to completion. Our expert consultants work hand-in-hand with architects, urban planners, and
                project managers to design bespoke security infrastructure that not only protects valuable assets but
                significantly enhances property desirability and market value. From exclusive waterfront residences to
                iconic commercial towers, we provide comprehensive security system design, elite staffing strategies,
                and ongoing operational support that evolves with your development's unique requirements. By integrating
                our security expertise during the early planning phases, we help developers create distinguished
                communities where residents, tenants, and investors experience unparalleled safety, luxury,
                and peace of mind.</p>
        </div>

    </div>

    <!-- Developer Section -->
    <div class="py-6">
        <div class="w-[80vw] mx-auto shadow-2xl p-10 rounded-lg bg-white">
            <!-- Grid Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($developers as $developer) { ?>

                    <!--card 1 for each developer -->
                    <a href="properties.php?developer=<?php echo $developer['id'] ?>"
                        class="rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-secondary flex flex-col h-full">
                        <!-- Image Section -->
                        <div class="bg-white h-[25vh] flex items-center justify-center p-3 border-b border-light">
                            <img src="assets/images/<?php echo $developer['logo'] ?>" alt="Developer Logo"
                                class="h-full w-full object-fill">
                        </div>
                        <!-- Content Section -->
                        <div class="flex flex-col justify-between p-3 pb-5 flex-grow">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1"><?php echo $developer['name'] ?></h3>
                                <p class="text-gray-600 line-clamp-4 mb-4">
                                    <?php echo $developer['description'] ?>
                                </p>
                            </div>
                            <button class="bg-primary text-white py-2 px-4 rounded-full hover:bg-secondary transition w-full">
                                <?php echo $developer['project_count']; ?> projects
                            </button>

                        </div>
                    </a>
                <?php } ?>
                <!-- card 2 -->
                <!-- <div
                    class="rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-secondary flex flex-col h-full">
                    <div class="bg-white h-[25vh] flex items-center justify-center p-3 border-b border-light">
                        <img src="assets/images/slider-logo2.jpg" alt="Developer Logo"
                            class="h-full w-full object-fill">
                    </div>
                    <div class="flex flex-col justify-between p-3 pb-5 flex-grow">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">NAKHEEL</h3>
                            <p class="text-gray-600 line-clamp-4 mb-4">
                                Creator of iconic landmarks like Palm Jumeirah, shaping Dubai's coastline with
                                innovative projects and future-focused design principles.
                            </p>
                        </div>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-full hover:bg-secondary transition w-full">
                            423 projects
                        </button>
                    </div>
                </div> -->
                <!-- card 3 -->
                <!-- <div
                    class="rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-secondary flex flex-col h-full">
                    <div class="bg-white h-[25vh] flex items-center justify-center p-3 border-b border-light">
                        <img src="assets/images/slider-logo3.jpg" alt="Developer Logo"
                            class="h-full w-full object-fill">
                    </div>
                    <div class="flex flex-col justify-between p-3 pb-5 flex-grow">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">NAKHEEL</h3>
                            <p class="text-gray-600 line-clamp-4 mb-4">
                                Creator of iconic landmarks like Palm Jumeirah, shaping Dubai's coastline with
                                innovative projects and future-focused design principles.
                            </p>
                        </div>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-full hover:bg-secondary transition w-full">
                            112 projects
                        </button>
                    </div>
                </div> -->
                <!-- card 4 -->
                <!-- <div
                    class="rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-secondary flex flex-col h-full">
                    <div class="bg-white h-[25vh] flex items-center justify-center p-3 border-b border-light">
                        <img src="assets/images/slider-logo4.jpg" alt="Developer Logo"
                            class="h-full w-full object-fill">
                    </div>
                    <div class="flex flex-col justify-between p-3 pb-5 flex-grow">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">NAKHEEL</h3>
                            <p class="text-gray-600 line-clamp-4 mb-4">
                                Creator of iconic landmarks like Palm Jumeirah, shaping Dubai's coastline with
                                innovative projects and future-focused design principles.
                            </p>
                        </div>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-full hover:bg-secondary transition w-full">
                            343 projects
                        </button>
                    </div>
                </div> -->
                <!-- card 5 -->
                <!-- <div
                    class="rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-secondary flex flex-col h-full">
                    <div class="bg-white h-[25vh] flex items-center justify-center p-3 border-b border-light">
                        <img src="assets/images/slider-logo5.jpg" alt="Developer Logo"
                            class="h-full w-full object-fill">
                    </div>
                    <div class="flex flex-col justify-between p-3 pb-5 flex-grow">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">NAKHEEL</h3>
                            <p class="text-gray-600 line-clamp-4 mb-4">
                                Creator of iconic landmarks like Palm Jumeirah, shaping Dubai's coastline with
                                innovative projects and future-focused design principles.
                            </p>
                        </div>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-full hover:bg-secondary transition w-full">
                            243 projects
                        </button>
                    </div>
                </div> -->
                <!-- card 6 -->
                <!-- <div
                    class="rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-secondary flex flex-col h-full">
                    <div class="bg-white h-[25vh] flex items-center justify-center p-3 border-b border-light">
                        <img src="assets/images/slider-logo6.jpg" alt="Developer Logo"
                            class="h-full w-full object-fill">
                    </div>
                    <div class="flex flex-col justify-between p-3 pb-5 flex-grow">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">NAKHEEL</h3>
                            <p class="text-gray-600 line-clamp-4 mb-4">
                                Creator of iconic landmarks like Palm Jumeirah, shaping Dubai's coastline with
                                innovative projects and future-focused design principles.
                            </p>
                        </div>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-full hover:bg-secondary transition w-full">
                            243 projects
                        </button>
                    </div>
                </div> -->
                <!-- card 7 -->
                <!-- <div
                    class="rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-secondary flex flex-col h-full">
                    <div class="bg-white h-[25vh] flex items-center justify-center p-3 border-b border-light">
                        <img src="assets/images/slider-logo7.jpg" alt="Developer Logo"
                            class="h-full w-full object-fill">
                    </div>
                    <div class="flex flex-col justify-between p-3 pb-5 flex-grow">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">NAKHEEL</h3>
                            <p class="text-gray-600 line-clamp-4 mb-4">
                                Creator of iconic landmarks like Palm Jumeirah, shaping Dubai's coastline with
                                innovative projects and future-focused design principles.
                            </p>
                        </div>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-full hover:bg-secondary transition w-full">
                            342 projects
                        </button>
                    </div>
                </div> -->

            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include './components/footer.php'; ?>

</body>

</html>