<?php include '../common/header.php'; ?>
<?php include 'data/player_rank.php'; ?>

<?php
// Retrieve the data
$name = isset($_GET['name']) ? $_GET['name'] : "Moco";
$image = isset($_GET['image']) ? $_GET['image'] : "../../assets/images/moco.png";
?>
<!-- Let's Start -->
<section>
  <div class="wrapper py-10 md:py-24">
    <div
      class="gradient1 items-center py-10 md:py-0 px-5 md:px-20 grid grid-cols-1 md:grid-cols-2 rounded-2xl shadow1">
      <span class="text-center grid gap-5">
        <h6><?php echo $name?></h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </span>
      <img class="m-auto w-44 md:w-72" src=<?php echo $image ?> alt="img" />
    </div>
  </div>
</section>

<!-- Let's Start -->
<section>
  <div class="wrapper py-5 md:py-24">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
      <?php
      foreach ($rank as $product) {
        echo '
          <a href="../player_age/player_age.php?name=' . $name . '&image=' . $image . '&rname=' . $product["name"] . '&rimage=' . $product["image"] . '">
            <div class="bg-purple-900 hover:bg-purple-950 text-center items-center py-10 md:py-10 grid gap-4 rounded-2xl shadow1">
              <img class="m-auto w-40" src="' . $product["image"] . '" alt="img" />
              <h4>' . $product["name"] . '</h4>
            </div>
          </a>
          ';
      }
      ?>
    </div>
  </div>
</section>

<?php include '../common/footer.php'; ?>