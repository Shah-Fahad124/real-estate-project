<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog page - NIP Real Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0E1319',     // Dark blue
                        secondary: '#9E9E9E',   // Silver/gray
                        dark: '#505050',        // Very dark blue
                        light: '#D3D3D3'        // Light gray/white
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

<body class="font-body">
    <!-- navbar -->
    <?php include './components/navbar.php' ?>
  

    <!-- Hero Section -->
    <section class="h-[30vh] md:h-[40vh] lg:h-[60vh] flex items-center relative"
        style="background:url('assets/images/about-us-img.webp');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-4 font-heading">Blogs</h1>
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

        <div class=" py-12 px-4 md:px-16 ">
            <div
                class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center  rounded-lg shadow-lg overflow-hidden bg-white">

                <!-- Left Content -->
                <div class="flex-1 p-6 px-10 ">
                    <span class="inline-block bg-secondary text-white text-sm font-semibold px-10 py-2 rounded mb-4">
                        FEATURED
                    </span>
                    <p class="text-sm text-gray-500 mb-2">21 JUL 2025</p>
                    <h2 class="text-3xl sm:text-4xl font-subheading font-semibold text-gray-900 mb-10">
                        Designing for Tomorrow: Real Estate Development in a Contemporary Cosm...
                    </h2>
                    <p class="text-gray-700 text-base mb-6">
                        Our world is increasingly becoming a world of contemporary living. Today, more than half of the
                        global population lives in urban areas, a figure projected to...
                    </p>
                    <a href="#"
                        class="inline-block px-6 py-3 border border-black rounded-full text-black text-sm font-medium hover:bg-primary hover:text-white transition">
                        READ MORE
                    </a>
                </div>

                <!-- Right Image -->
                <div class="flex-1">
                    <img src="./assets/images/Listing & Related blog_7.jpg.webp" alt="Dubai Skyline"
                        class="w-full h-full lg:h-[380px] object-cover rounded-lg">
                </div>

            </div>
        </div>


        <!-- blog cards -->
        <section class="bg-white py-12 px-4 md:px-16">
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Blog Card 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                    <img src="./assets/images/blog-image1.webp" alt="Maternity" class="w-full h-56 object-cover">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-sm text-primary mb-2">17 Jul 2025</p>
                        <h3 class="text-xl font-subheading font-medium text-gray-900 leading-snug mb-3">
                            Sobha Realty’s Champions Stronger Maternity Support...
                        </h3>
                        <p class="text-gray-700 text-sm mb-4">
                            Long before the 2020 pandemic made remote work a global necessity, several employees—both
                            men and...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold tracking-wide hover:underline">
                            READ MORE
                        </a>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                    <img src="./assets/images/blog-image2.webp" alt="Capital Gains" class="w-full h-56 object-cover">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-sm text-primary mb-2">04 Jun 2025</p>
                        <h3 class="text-xl font-subheading font-medium text-gray-900 leading-snug mb-3">
                            A Second Home in Dubai: Why Investors Are Turning t...
                        </h3>
                        <p class="text-gray-700 text-sm mb-4">
                            Dubai’s real estate market continues to attract local and international investors from all
                            around...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold tracking-wide hover:underline">
                            READ MORE
                        </a>
                    </div>
                </div>

                <!-- Blog Card 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                    <img src="./assets/images/blog-image3.webp" alt="Dubai Skyline" class="w-full h-56 object-cover">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-sm text-primary mb-2">02 Jun 2025</p>
                        <h3 class="text-xl font-subheading font-medium text-gray-900 leading-snug mb-3">
                            Dubai’s Hidden Gems: Underrated Neighbourhoods with...
                        </h3>
                        <p class="text-gray-700 text-sm mb-4">
                            When it comes to property investment in Dubai, the spotlight often shines on iconic areas
                            like...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold tracking-wide hover:underline">
                            READ MORE
                        </a>
                    </div>
                </div>

                <!-- Blog Card 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                    <img src="./assets/images/blog-image4.webp" alt="Dubai Skyline" class="w-full h-56 object-cover">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-sm text-primary mb-2">02 Jun 2025</p>
                        <h3 class="text-xl font-subheading font-medium text-gray-900 leading-snug mb-3">
                            Dubai’s Hidden Gems: Underrated Neighbourhoods with...
                        </h3>
                        <p class="text-gray-700 text-sm mb-4">
                            When it comes to property investment in Dubai, the spotlight often shines on iconic areas
                            like...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold tracking-wide hover:underline">
                            READ MORE
                        </a>
                    </div>
                </div>

                <!-- Blog Card 5 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                    <img src="./assets/images/blog-image3.webp" alt="Dubai Skyline" class="w-full h-56 object-cover">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-sm text-primary mb-2">02 Jun 2025</p>
                        <h3 class="text-xl font-subheading font-medium text-gray-900 leading-snug mb-3">
                            Dubai’s Hidden Gems: Underrated Neighbourhoods with...
                        </h3>
                        <p class="text-gray-700 text-sm mb-4">
                            When it comes to property investment in Dubai, the spotlight often shines on iconic areas
                            like...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold tracking-wide hover:underline">
                            READ MORE
                        </a>
                    </div>
                </div>

                <!-- Blog Card 6 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                    <img src="./assets/images/blog-image3.webp" alt="Dubai Skyline" class="w-full h-56 object-cover">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-sm text-primary mb-2">02 Jun 2025</p>
                        <h3 class="text-xl font-subheading font-medium text-gray-900 leading-snug mb-3">
                            Dubai’s Hidden Gems: Underrated Neighbourhoods with...
                        </h3>
                        <p class="text-gray-700 text-sm mb-4">
                            When it comes to property investment in Dubai, the spotlight often shines on iconic areas
                            like...
                        </p>
                        <a href="#" class="text-primary text-sm font-semibold tracking-wide hover:underline">
                            READ MORE
                        </a>
                    </div>
                </div>

            </div>
        </section>



        <!-- Footer -->
       <?php include './components/footer.php' ?>

        <script>
            // Form submission handling
            document.querySelector('form').addEventListener('submit', function (e) {
                e.preventDefault();

                // Get form data
                const formData = new FormData(this);
                const data = Object.fromEntries(formData);

                // Simple validation
                if (!data.firstName || !data.lastName || !data.email || !data.subject || !data.message) {
                    alert('Please fill in all required fields.');
                    return;
                }

                // Simulate form submission
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            });

            // Add smooth scrolling for any anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        </script>

    </body>

</html>