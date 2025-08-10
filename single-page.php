<?php include './admin/auth/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
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

  <!-- Splide -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-yDugyf3bE1aFZ1Q0q1RZVqozw7u7PbbmO7x5Sy+H7nTqvICovJ1vduK4F7G6PRhJfn/kx3mTUMqaaSD1BW30Uw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="font-body text-primary">

  <!-- Navbar -->
  <?php include './components/navbar.php' ?>

  <!-- Hero Section -->
  <section class="h-[30vh] md:h-[40vh] lg:h-[60vh] flex items-center relative"
    style="background:url('assets/images/about-us-img.webp');">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white z-10">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-4 font-heading">Property Details</h1>
    </div>
    <div class="bg-black bg-opacity-70 absolute inset-0 w-full h-full z-2"></div>
  </section>

  <?php
  $property = null;
  $developers = [];

  if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch property data
    $query = "SELECT * FROM properties WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      $property = mysqli_fetch_assoc($result);

      // Fetch developer name
      $devQuery = "SELECT d.name 
                     FROM developers d
                     INNER JOIN property_developers pd ON d.id = pd.developer_id
                     WHERE pd.property_id = $id";
      $devResult = mysqli_query($conn, $devQuery);
      if ($devResult && mysqli_num_rows($devResult) > 0) {
        while ($devRow = mysqli_fetch_assoc($devResult)) {
          $developers[] = $devRow['name'];
        }
      }
    }
  }
  $imagePath = './admin/assets/images/' . $property['image'];

  // Fetch first 3 similar properties
  $semilarProperties = [];
  $semilarPropertiesQuery = "SELECT * FROM properties 
                           WHERE id != '$id' 
                           AND type='" . $property['type'] . "' 
                           LIMIT 3";
  $semilarPropertiesResult = mysqli_query($conn, $semilarPropertiesQuery);
  if ($semilarPropertiesResult) {
    while ($row = mysqli_fetch_assoc($semilarPropertiesResult)) {
      $semilarProperties[] = $row;
    }
  }

  // url for intersted property 
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
    || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

  $host = $_SERVER['HTTP_HOST'];

  $uri = $_SERVER['REQUEST_URI'];
  $currentURL = $protocol . $host . $uri;
  ?>

  <!--  First main section -->
  <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg mt-3">
    <div class="flex flex-col md:flex-row gap-8">
      <!-- left Column - Description -->
      <div class="md:w-2/3">
        <h1 class="text-3xl font-bold text-primary font-heading mb-2">
          <?= htmlspecialchars($property['title']) ?>
        </h1>
        <p class="text-secondary font-subheading mb-4">
          <?= htmlspecialchars($property['location']) ?>
        </p>
        <p class="text-gray-700 mb-4 font-body">
          <?= htmlspecialchars($property['desc']) ?>
        </p>
        <p class="text-gray-700 mb-4">
          Price: <strong>$<?= number_format($property['price']) ?></strong>
        </p>
        <p class="text-gray-700 mb-4">
          Posted on: <?= isset($property['created_at']) ? date('F d, Y', strtotime($property['created_at'])) : '-' ?>
        </p>
        <?php if (!empty($property['featured']) && $property['featured'] == 1): ?>
          <p class="text-yellow-600 font-semibold mb-4">★ Featured Property</p>
        <?php endif; ?>
        <p class="text-gray-700">
          Developers: <span class="font-semibold"><?= implode(', ', $developers) ?></span>
        </p>

      </div>

      <!-- right Column - Title and Location -->
      <div class="md:w-2/3">
        <img src="<?= htmlspecialchars($imagePath) ?>" alt="property image" class="rounded-lg w-full h-[400px] object-cover mb-4">
      </div>
    </div>
  </div>

  <!-- Amenities Section -->
  <section class="w-[80%] mx-auto flex py-10 gap-10">
    <!-- left side  -->
    <div class="w-[70%] flex flex-col">
      <hr class="w-full mb-5">
      <h2 class="text-2xl font-semibold text-primary font-heading mb-6">Amenities and features</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-gray-700">
        <div class="flex items-center space-x-2">
          <i class="fas fa-car text-secondary text-xl"></i>
          <span><?= htmlspecialchars($property['bedrooms'] ?? 'N/A') ?> Bedrooms</span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-bath text-secondary text-xl"></i>
          <span><?= htmlspecialchars($property['bathrooms'] ?? 'N/A') ?> Bathrooms</span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-ruler-combined text-secondary text-xl"></i>
          <span><?= htmlspecialchars($property['area_sqft'] ?? 'N/A') ?> sqft</span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-tag text-secondary text-xl"></i>
          <span><?= htmlspecialchars($property['type'] ?? 'N/A') ?></span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-flag text-secondary text-xl"></i>
          <span><?= htmlspecialchars($property['purpose'] ?? 'N/A') ?></span>
        </div>
        <div class="flex items-center space-x-3">
          <i class="fas fa-calendar-alt text-secondary text-xl"></i>
          <span><?= isset($property['created_at']) ? date('F Y', strtotime($property['created_at'])) : 'N/A' ?></span>
        </div>
      </div>
      <hr class="w-full mt-5">

      <!-- In Details section -->
      <div class="flex">
        <div class="py-10 flex flex-col items-center gap-2 ">
          <h2 class="text-xl font-semibold mb-2">In Details</h2>
          <img src="assets/images/Arabian Ranches.jpg" alt="" class="w-[60px] h-[60px] rounded-full">
          <p>map</p>
        </div>
      </div>
    </div>

    <!-- right section -->
    <div class="w-[30%]">
      <div class="space-y-4 w-full">
        <!-- Contact Agent -->
        <div class="bg-white rounded-lg border border-gray-200 p-4">
          <div class="flex items-center justify-between gap-4 mb-6">
            <div>
              <h4 class="font-semibold text-gray-900">Sarah Wilson</h4>
              <p class="text-gray-600 text-sm">Associate Director</p>
            </div>
            <img src="assets/images/user-logo.png" alt="Agent" class="rounded-full" style="width: 100px !important;height: 100px !important;">
          </div>
          <div class="flex justify-between gap-4 pb-5">
            <button class="btn w-full flex items-center justify-center gap-2 rounded-md py-2 px-4">
              <i class="fa-brands fa-whatsapp"></i>
              Whatsapp
            </button>
            <button class="btn w-full flex items-center justify-center gap-2  rounded-md py-2 px-4">
              <i class="fa-solid fa-phone"></i>
              Call
            </button>
          </div>

          <form action="contact-process.php" method="POST" class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
              <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" name="name" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
              <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" name='email' requried>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
              <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" name='full_phone'>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
              <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="I'm interested in this property..." name='message'></textarea>
            </div>
            <input type="hidden" name="interestedProperty" value="<?php echo $currentURL ?>">
            <button type="submit"
              class="w-full bg-secondary text-white py-3 rounded-md hover:bg-primary transition-colors duration-300 font-semibold">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- location  -->
  <section class="bg-light py-16 px-5">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

      <!-- Left: Map / Image -->
      <div>
        <img src="./assets/images/blog-image3.webp" alt="Map Location" class="rounded-lg shadow-lg w-full h-auto">
      </div>

      <!-- Right: Location Text -->
      <div>
        <h2 class="text-2xl font-heading text-primary mb-4">Location</h2>
        <p class="text-gray-800 font-body leading-relaxed">
          <strong class="text-primary font-semibold">Aurelia Residence</strong>, a cutting-edge and modern housing
          marvel is all set to redefine the bustling and continuously growing skyline of
          <strong class="text-primary">Dubai Sports City</strong>. In the heart of a carefully designed natural setting,
          this property is surrounded with modern housing complexes and many famous attractions, including major sports
          courts of Els Golf Club, Sports Park, International Stadium for events. It offers the lively allure that
          attracts the attention of the modern life.
          <br><br>
          With many schools, mosques, supermarkets, premium dining and cafe options, parks, and many entertainment
          options, it is a prime and suitable hub for families and professionals to thrive, live, and explore the
          abundance of life.
        </p>
      </div>

    </div>
  </section>


  <!-- master plan -->
  <div class="max-w-6xl mx-auto text-center mb-8 pt-12 pb-5">
    <h2 class="text-3xl font-semibold mb-2 font-heading">Master Plan</h2>
    <p class=" mx-auto text-secondary mb-6 leadig-8 font-subheading">
      Object 1 Aurelia Residence is a graciously rising and latest living milestone with a master-planned creative
      approach in the heart of Dubai Sports City. Delve into the realm of comfort and convenience, where splendid detail
      aspects of lavishness and quality finishes reflect the captivating looks. Every home unit composes with ample
      storage, large balconies, wide windows, smart environment that creates the sense of peaceful and upscale living.
    </p>


    <!-- Main Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto items-center">
      <!-- Left Section -->
      <!-- <div class="grid grid-cols-2 h-96 overflow-y-auto border gap-4 rounded-lg p-4  bg-gray-100"> -->
      <!--  Items  -->
      <div class="grid grid-cols-2 gap-y-5 gap-x-3 p-4 py-6 bg-gray-100 rounded-lg">
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 16.5V15a4.5 4.5 0 0 1 4.5-4.5h9A4.5 4.5 0 0 1 21 15v1.5M4.5 19.5h15M9 19.5v-1.5m6 1.5v-1.5" />
          </svg>
          <span>Ample Parking Space</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 3v2m6.364 1.636l-1.414 1.414M21 12h-2m-1.222 6.364l-1.414-1.414M12 21v-2M5.636 18.364l1.414-1.414M3 12h2M5.636 5.636l1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z" />
          </svg>
          <span>BBQ Areas</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>Championship Golf Course</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M10 14h10M10 18h10" />
          </svg>
          <span>Cricket Field</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
          <span>Cycling Trails</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12s3-6 9-6 9 6 9 6-3 6-9 6-9-6-9-6z" />
          </svg>
          <span>Flowers Garden</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
          </svg>
          <span>Hospital</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="3" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v3m0 12v3m9-9h-3M6 12H3" />
          </svg>
          <span>Basketball Court</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12s4-8 9-8 9 8 9 8-4 8-9 8-9-8-9-8z" />
          </svg>
          <span>Beach Access</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 16.5V15a4.5 4.5 0 0 1 4.5-4.5h9A4.5 4.5 0 0 1 21 15v1.5M4.5 19.5h15M9 19.5v-1.5m6 1.5v-1.5" />
          </svg>
          <span>Ample Parking Space</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 3v2m6.364 1.636l-1.414 1.414M21 12h-2m-1.222 6.364l-1.414-1.414M12 21v-2M5.636 18.364l1.414-1.414M3 12h2M5.636 5.636l1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z" />
          </svg>
          <span>BBQ Areas</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>Championship Golf Course</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M10 14h10M10 18h10" />
          </svg>
          <span>Cricket Field</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
          <span>Cycling Trails</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12s3-6 9-6 9 6 9 6-3 6-9 6-9-6-9-6z" />
          </svg>
          <span>Flowers Garden</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
          </svg>
          <span>Hospital</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="3" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v3m0 12v3m9-9h-3M6 12H3" />
          </svg>
          <span>Basketball Court</span>
        </div>
        <div class="flex items-center gap-3 py-3 px-2 rounded-lg shadow-sm bg-white">
          <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12s4-8 9-8 9 8 9 8-4 8-9 8-9-8-9-8z" />
          </svg>
          <span>Beach Access</span>
        </div>
        <!-- </div> -->

      </div>

      <!-- Right Section: Map -->
      <div class="border h-[80%] rounded-lg p-4">
        <img src="./assets/images/blog-image6.webp" alt="Map showing city connectivity"
          class="w-full h-full object-cover rounded" />
      </div>
    </div>
  </div>

<!-- GALLERY -->
<section class="bg-white px-4 py-10">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-2xl font-heading text-primary mb-6">Gallery</h2>

    <?php
    // Check counts first
    $interiorImages = mysqli_query($conn, "SELECT image FROM property_images WHERE property_id = {$property['id']} AND type = 'interior'");
    $exteriorImages = mysqli_query($conn, "SELECT image FROM property_images WHERE property_id = {$property['id']} AND type = 'exterior'");

    if (mysqli_num_rows($interiorImages) === 0 && mysqli_num_rows($exteriorImages) === 0) {
      echo '<p class="text-gray-500">No gallery images available</p>';
    } else {
    ?>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <?php
        // INTERIOR SLIDER
        if (mysqli_num_rows($interiorImages) > 0) {
        ?>
          <div class="relative group">
            <span class="absolute top-3 left-3 bg-white text-xs text-primary px-2 py-1 rounded shadow-sm z-20">Interior</span>
            <div id="splide-interior" class="splide h-96 sm:h-[340px] rounded-md overflow-hidden">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php
                  mysqli_data_seek($interiorImages, 0); // reset pointer
                  while ($img = mysqli_fetch_assoc($interiorImages)) {
                    echo '<li class="splide__slide">
                      <img src="./admin/assets/images/' . htmlspecialchars($img['image']) . '" class="w-full h-full object-cover" alt="Interior">
                    </li>';
                  }
                  ?>
                </ul>
              </div>
              <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev !bg-white/80 hover:!bg-white rounded-full shadow p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 19.5L8.25 12l7.5-7.5" />
                  </svg>
                </button>
                <button class="splide__arrow splide__arrow--next !bg-white/80 hover:!bg-white rounded-full shadow p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        <?php
        // EXTERIOR SLIDER
        if (mysqli_num_rows($exteriorImages) > 0) {
        ?>
          <div class="relative group">
            <span class="absolute top-3 left-3 bg-white text-xs text-primary px-2 py-1 rounded shadow-sm z-20">Exterior</span>
            <div id="splide-exterior" class="splide h-96 sm:h-[340px] rounded-md overflow-hidden">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php
                  mysqli_data_seek($exteriorImages, 0); // reset pointer
                  while ($img = mysqli_fetch_assoc($exteriorImages)) {
                    echo '<li class="splide__slide">
                      <img src="./admin/assets/images/' . htmlspecialchars($img['image']) . '" class="w-full h-full object-cover" alt="Exterior">
                    </li>';
                  }
                  ?>
                </ul>
              </div>
              <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev !bg-white/80 hover:!bg-white rounded-full shadow p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                  </svg>
                </button>
                <button class="splide__arrow splide__arrow--next !bg-white/80 hover:!bg-white rounded-full shadow p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

      </div>
    <?php
    }
    ?>
  </div>
</section>



  <!-- ================================ -->
  <!--      SIMILAR PROPERTIES GRID     -->
  <!-- ================================ -->
  <section class="bg-[#F5F5F5] py-12 px-4">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-2xl font-heading text-primary mb-6 text-center md:text-left">Similar properties</h2>

      <div id="similarProperties" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($semilarProperties as $semilarProperty): ?>
          <a href="single-page.php?id=<?php echo $semilarProperty['id'] ?>" class="bg-white rounded shadow-sm overflow-hidden">
            <div class="relative">
              <img src="./admin/assets/images/<?php echo $semilarProperty['image'] ?>" alt=""
                class="w-full h-52 object-cover">
              <span class="absolute top-3 left-3 bg-primary text-white text-xs px-2 py-1 rounded"><?php echo $semilarProperty['type'] ?></span>
            </div>
            <div class="p-4 space-y-2">
              <h3 class="text-md font-medium text-primary"><?php echo $semilarProperty['location'] ?></h3>
              <ul class="flex flex-wrap items-center gap-4 text-sm text-dark">
                <li><?php echo $semilarProperty['bedrooms'] ?> Beds</li>
                <li><?php echo $semilarProperty['bathrooms'] ?> Baths</li>
                <li><?php echo $semilarProperty['area_sqft'] ?> SQ.FT.</li>
              </ul>
              <p class="text-sm text-primary font-semibold">AED <?php echo $semilarProperty['price'] ?></p>
            </div>
          </a>
        <?php endforeach;
        if (empty($semilarProperties)) {
          echo '<h1 class="text-center text-secondary">NO Similar Properties Avaiable.</h1>';
        }
        ?>
      </div>

      <div class="mt-8 text-center">
        <button id="loadMoreBtn" class="bg-primary text-white px-6 py-2 rounded hover:bg-dark transition">
          View more
        </button>
      </div>

    </div>
  </section>



  <!-- Footer -->
  <?php include './components/footer.php'; ?>



  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

  <!-- =======================
      Splide JS Initialization
========================= -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      new Splide('#project-slider', {
        type: 'loop', // Infinite looping
        perPage: 2, // Show 2 slides at a time
        gap: '1rem', // Gap between slides
        autoplay: true, // Auto-play enabled
        breakpoints: {
          768: {
            perPage: 1 // On mobile, show 1 slide
          }
        }
      }).mount(); // Mount Splide
    });
  </script>

  <!-- Splide JS -->
  <script>
    function initSplide(selector, counterSelector) {
      const splide = new Splide(selector, {
        type: 'loop',
        perPage: 1,
        pagination: false,
        arrows: true,
        drag: true,
        speed: 600,
      });

      const counterEl = document.querySelector(counterSelector);

      const updateCounter = (splide) => {
        const current = splide.index + 1;
        const total = splide.length;
        counterEl.textContent = `${current} / ${total}`;
      };

      splide.on('mounted move', () => updateCounter(splide));
      splide.mount();
      return splide;
    }

    document.addEventListener('DOMContentLoaded', () => {
      initSplide('#splide-exterior', '#counter-exterior');
      initSplide('#splide-interior', '#counter-interior');
    });
  </script>
  <!-- load more  -->
  <script>
    let offset = 3; // already loaded 3 initially
    const type = "<?php echo $property['type']; ?>"; // pass property type to match similar ones

    document.getElementById('loadMoreBtn').addEventListener('click', function() {
      fetch(`singlePage-loadMore.php?type=${type}&offset=${offset}`)
        .then(response => response.text())
        .then(data => {
          if (data.trim() !== '') {
            document.getElementById('similarProperties').insertAdjacentHTML('beforeend', data);
            offset += 3;
          } else {
            this.textContent = "No more properties";
            this.disabled = true;
          }
        });
    });
  </script>

</body>

</html>