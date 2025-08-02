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

<body class="bg-white font-body">
        <!-- Header -->
 <?php include './components/navbar.php' ;?>

 <!-- FAQ Section -->
    <section class="FAQ-section ">
        <div class="text-white flex flex-col justify-center item-center h-[400px] bg-center bg-no-repeat bg-cover"
        style="background-image: linear-gradient(180deg, rgba(9, 20, 50, 0.6) 0%, #091432 85%), url(./assets/images/faq.jpg);">
            <h2 class="text-6xl mx-auto font-heading">GENERAL FAQS</h2>
        </div>

        <!-- faq-items -->
        <div class="max-w-4xl mx-auto pt-20 font-body">
            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>What type of properties are available on the platform?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Our platform offers a variety of property types including residential, commercial,
                        land, and rental properties.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>Do I need an appointment to visit a property</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Yes, property visits must be scheduled in advance with the listing agent.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>Can I filter listing based on location and price?
                    </span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb] ">
                    <p class="py-5">Absolutely! Use the search filters to narrow down listings by location, price range,
                        and more.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>How can i contact property owner or agent? </span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Each listing includes contact details of the owner or agent at the bottom of the
                        page.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>Is there a way to save favorities properties?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Yes, you can save properties to your favorites list by clicking the heart icon on
                        each listing.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>Are there virtual tour available for some properties?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Many listings offer virtual tours which you can view directly on the property page.
                    </p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>Can I list my own property on the platform</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Yes, simply create an account and use the 'List Property' option to submit your
                        property details.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>Is there a mobile app available?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Yes, our mobile app is available on both iOS and Android for convenient access on
                        the go.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>How often are listing updated?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Listings are updated daily to ensure you have access to the most recent information.
                    </p>
                </div>
            </div>

            <div
                class="faq-item  mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer hover:bg-[#f9fafb]">
                    <span>Are there any fees for using the platform?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Browsing listings is free. However, listing a property or using premium services may
                        incur a fee.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer ">
                    <span>Can I shedule multiple property visit in one day?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Yes, depending on availability, you can coordinate with agents to visit multiple
                        properties in one day.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer ">
                    <span>Do listing include neighbourhood information</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Yes, many listings provide details about the neighborhood, including nearby schools,
                        parks, and public transport.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer ">
                    <span>Can I gt mortgage or financing information on the platform?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer  overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Yes, we provide access to financing tools and partner lenders to help you estimate
                        mortgage options.</p>
                </div>
            </div>

            <div
                class="faq-item mb-5 border border-gray-200 rounded-lg bg-white shadow transition-all duration-300 hover:-translate-y-1 hover:shadow-md ">
                <div
                    class="faq-question font-subheading flex justify-between items-center rounded-t-lg p-5 text-lg font-semibold text-dark cursor-pointer ">
                    <span>How doI report incorrect or outdated property information?</span>
                    <i class="fas fa-chevron-down transition-transform text-dark"></i>
                </div>
                <div
                    class="faq-answer overflow-hidden max-h-0 px-5 text-gray-600 transition-all duration-300 hover:bg-[#f9fafb]">
                    <p class="py-5">Each listing includes a 'Report' button to notify our team of any incorrect or
                        outdated details.</p>
                </div>
            </div>

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
    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const item = question.closest('.faq-item');
            const answer = item.querySelector('.faq-answer');
            const icon = question.querySelector('i');

            // Close all other items
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                const otherAnswer = otherItem.querySelector('.faq-answer');
                const otherIcon = otherItem.querySelector('.faq-question i');
                if (otherItem !== item) {
                    otherAnswer.classList.add('max-h-0');
                    otherAnswer.classList.remove('max-h-[500px]', 'py-5');
                    otherIcon.classList.remove('rotate-180');
                    // otherItem.querySelector('.faq-question').classList.remove('text-white', 'bg-primary');
                }
            });

            // Toggle current item
            const isOpen = answer.classList.contains('max-h-[500px]');
            if (!isOpen) {
                answer.classList.remove('max-h-0');
                answer.classList.add('max-h-[500px]', 'py-5');
                icon.classList.add('rotate-180');
                // question.classList.add('text-white', 'bg-primary');
            } else {
                answer.classList.add('max-h-0');
                answer.classList.remove('max-h-[500px]', 'py-5');
                icon.classList.remove('rotate-180');
                // question.classList.remove('text-white', 'bg-primary');
            }
        });
    });

</script>

</body>

</html>