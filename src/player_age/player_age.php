<?php include '../common/header.php'; ?>

<?php
// Retrieve the data
$name = isset($_GET['name']) ? $_GET['name'] : "Moco";
$image = isset($_GET['image']) ? $_GET['image'] : "../../assets/images/moco.png";
$rname = isset($_GET['rname']) ? $_GET['rname'] : "Rank 1";
$rimage = isset($_GET['rimage']) ? $_GET['rimage'] : "../../assets/images/r1.webp";
?>

<!-- Let's Start -->
<section>
  <div class="wrapper py-5 md:py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">
      <div
        class="gradient1 items-center py-10 md:py-0 px-5 md:px-20 grid grid-cols-1 md:grid-cols-2 rounded-2xl shadow1">
        <span class="text-center grid gap-5">
          <h6><?php echo $name ?></h6>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </span>
        <img class="m-auto w-44 md:w-72" src=<?php echo $image ?> alt="img" />
      </div>
      <div
        class="gradient1 items-center py-10 md:py-0 px-5 md:px-20 grid grid-cols-1 md:grid-cols-2 rounded-2xl shadow1">
        <span class="text-center grid gap-5">
          <h6><?php echo $rname ?></h6>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </span>
        <img class="m-auto w-44 md:w-72" src=<?php echo $rimage ?> alt="img" />
      </div>
    </div>
  </div>
</section>

<!-- Let's Start -->
<section>
  <div class="wrapper py-5 md:py-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
      <a href="../player_id/player_id.php?Age=Age%2012%20-%2018&<?php echo 'name=' . urlencode($name) . '&image=' . urlencode($image) . '&rname=' . urlencode($rname) . '&rimage=' . urlencode($rimage);?>">
        <div
          class="bg-purple-900 hover:bg-purple-950 text-center items-center py-10 md:py-10 grid gap-4 rounded-2xl shadow1">
          <img class="m-auto w-40" src="../../assets/images/alok.png" alt="img" />
          <h4>Age 0 - 12</h4>
        </div>
      </a>
      <a href="../player_id/player_id.php?Age=Age%2019%20-%2025&<?php echo 'name=' . urlencode($name) . '&image=' . urlencode($image). '&rname=' . urlencode($rname) . '&rimage=' . urlencode($rimage);?>">
        <div
          class="bg-purple-900 hover:bg-purple-950 text-center items-center py-10 md:py-10 grid gap-4 rounded-2xl shadow1">
          <img class="m-auto w-40" src="../../assets/images/andrew.png" alt="img" />
          <h4>Age 15 - 20</h4>
        </div>
      </a>
      <a href="../player_id/player_id.php?Age=Age%2026%20-%2035&<?php echo 'name=' . urlencode($name) . '&image=' . urlencode($image). '&rname=' . urlencode($rname) . '&rimage=' . urlencode($rimage);?>">
        <div
          class="bg-purple-900 hover:bg-purple-950 text-center items-center py-10 md:py-10 grid gap-4 rounded-2xl shadow1">
          <img class="m-auto w-40" src="../../assets/images/apatroa.png" alt="img" />
          <h4>Age 21 - 24</h4>
        </div>
      </a>
      <a href="../player_id/player_id.php?Age=Age%2036%20-%2050&<?php echo 'name=' . urlencode($name) . '&image=' . urlencode($image). '&rname=' . urlencode($rname) . '&rimage=' . urlencode($rimage);?>">
        <div
          class="bg-purple-900 hover:bg-purple-950 text-center items-center py-10 md:py-10 grid gap-4 rounded-2xl shadow1">
          <img class="m-auto w-40" src="../../assets/images/caroline.png" alt="img" />
          <h4>Age 28 - 32</h4>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include '../common/footer.php'; ?>