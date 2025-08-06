<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NIP Real Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- CSS for country dropdown -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/css/intlTelInput.css" />
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- recaptcha  -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0E1319', // Dark blue
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
<body class="font-body">
    <!-- navbar -->
    <?php include 'components/navbar.php'; ?>
    <?php include './admin/components/sweet-alert.php'; ?>



    <!-- Hero Section -->
    <section class="h-[30vh] md:h-[40vh] lg:h-[60vh] flex items-center relative"
        style="background:url('assets/images/about-us-img.webp');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-4 font-heading">Contact Us</h1>
            <!-- <nav class="flex justify-center space-x-2">
                <a href="index.php" class="hover:text-[#dcdcdc]">Home</a>
                <span>—</span>
                <a href="premium-services.html" class="hover:text-[#dcdcdc]">About Us</a>
                <span>—</span>
                <a href="contact-us.php" class="hover:text-[#dcdcdc]">Contact Us</a>
            </nav> -->
        </div>
        <div class="bg-black bg-opacity-70 absolute inset-0 w-full h-full z-2"></div>
    </section>

    <!-- Main Content -->
    <main class="py-12 md:py-16 lg:py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-12 xl:gap-16 items-center">
                <!-- Left Column - Contact Information -->
                <div class="space-y-6 md:space-y-8">
                    <!-- Location Card -->
                    <div
                        class="bg-[linear-gradient(to_right,#9E9E9E_0%,#12263E_50%,#0E1319_100%)] p-3 rounded-xl md:p-4 text-white h-[28vh] flex items-center">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 bg-primary rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold mb-2 font-heading">Our Location</h3>
                                <p class="text-white leading-relaxed font-subheading">
                                    Office No: 113, Office 3, One Central - Sheikh Zayed Rd - Next to Dubai World Trade
                                    Centre - Dubai
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div
                        class="bg-[linear-gradient(to_right,#9E9E9E_0%,#12263E_50%,#0E1319_100%)]  p-3 rounded-xl md:p-4 text-white h-[28vh] flex items-center">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 bg-primary rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold mb-2 font-heading">Phone Number</h3>
                                <div class="space-y-1 text-white font-subheading">
                                    <p>+971-55 883 7689</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div
                        class="bg-[linear-gradient(to_right,#9E9E9E_0%,#12263E_50%,#0E1319_100%)] p-6 rounded-xl md:p-8 text-white h-[28vh] flex items-center">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-12 h-12 md:w-14 md:h-14 bg-primary rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold mb-2 font-heading">Our Email</h3>
                                <div class="space-y-1 text-white font-subheading">
                                    <p>info@niprealty.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="bg-white rounded-2xl p-6 md:p-8 lg:p-10 shadow-lg col-span-2">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-primary mb-6 font-heading">
                        Get In Touch
                    </h2>

                    <!-- Contact Form -->
                    <form action="contact-process.php" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2">
                                <label for="firstName" class="block text-sm font-medium text-dark mb-2 font-body">
                                    Full Name *
                                </label>
                                <input type="text" id="firstName" name="name" required
                                    class="w-full px-4 py-3 border border-light rounded-lg focus:border-light font-body"
                                    placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="flex-1">
                                <label for="email" class="block text-sm font-medium text-dark mb-2 font-body">
                                    Email Address *
                                </label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-light rounded-lg  transition-all duration-300 font-body"
                                    placeholder="Enter your email address">
                            </div>

                            <div class="flex-1">
                                <label for="phone" class="block text-sm font-medium text-dark mb-2 font-body">
                                    Phone Number *
                                </label>
                                <input id="phone" name="phone_no" type="tel" required
                                    class="w-full px-4 py-3 border border-light rounded-lg  transition-all duration-300 font-body">
                                    <input type="hidden" name="full_phone" id="full_phone">

                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-dark mb-2 font-body">
                                Message
                            </label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 border border-light rounded-lg transition-all duration-300 resize-none font-body"
                                placeholder="Enter your message here..."></textarea>
                        </div>

                        <div class="g-recaptcha mb-4" data-sitekey="6LcORpsrAAAAACoibpl9reRCkhoYkzLY1iTd5krt"></div>

                        <button type="submit"
                            class="w-full bg-primary text-white py-4 px-6 rounded-lg font-semibold hover:bg-secondary font-body">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Map Section -->
    <section class="pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                <div class="h-96 md:h-[500px] lg:h-[600px] relative">
                    <!-- Map Placeholder -->
                    <div
                        class="w-full h-full bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-primary mb-2 font-subheading">Find Us Here</h3>
                            <p class="text-secondary font-body">45/15 New alsala Avenew, Boostan town, Austria</p>
                        </div>
                    </div>

                    <!-- Interactive Map Integration (Google Maps/OpenStreetMap can be added here) -->
                    <iframe
                        src="https://www.openstreetmap.org/export/embed.html?bbox=9.5%2C46.5%2C17.5%2C49.5&layer=mapnik&marker=47.5%2C13.5"
                        class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Location Map"></iframe>
                </div>
            </div>
        </div>
    </section>

    <style>
.iti__country-list {
    width: 300px !important;
    left: 0 !important;     
    transform: translateX(0%) !important;
    scrollbar-width: none;

}
</style>
    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- JS for countories dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js"></script>
<script>
    const phoneInput = document.querySelector("#phone");
    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "ae", // United Arab Emirates
        geoIpLookup: function(callback) {
            fetch('https://ipapi.co/json')
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback('ae'));
        },
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js",
    });

    // Before form submit, set the full international number in hidden input
    const form = document.querySelector("form"); // or your form ID
    form.addEventListener("submit", function () {
        document.querySelector("#full_phone").value = iti.getNumber();
    });
</script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>