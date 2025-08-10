<?php
include "./admin/auth/connection.php"; // database connection

$type = $_GET['type'] ?? '';
$offset = intval($_GET['offset'] ?? 0);
$limit = 3; // load 3 at a time

$query = "SELECT * FROM properties WHERE type='$type' LIMIT $offset, $limit";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>
<a href="single-page.php?id=<?php echo $row['id'] ?>" class="bg-white rounded shadow-sm overflow-hidden">
  <div class="relative">
    <img src="./admin/assets/images/<?php echo $row['image'] ?>" alt=""
      class="w-full h-52 object-cover">
    <span class="absolute top-3 left-3 bg-primary text-white text-xs px-2 py-1 rounded"><?php echo $row['type'] ?></span>
  </div>
  <div class="p-4 space-y-2">
    <h3 class="text-md font-medium text-primary"><?php echo $row['location'] ?></h3>
    <ul class="flex flex-wrap items-center gap-4 text-sm text-dark">
      <li><?php echo $row['bedrooms'] ?> Beds</li>
      <li><?php echo $row['bathrooms'] ?> Baths</li>
      <li><?php echo $row['area_sqft'] ?> SQ.FT.</li>
    </ul>
    <p class="text-sm text-primary font-semibold">AED <?php echo $row['price'] ?></p>
  </div>
</a>
<?php
}
?>