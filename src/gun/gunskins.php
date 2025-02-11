<?php include '../common/header.php'; ?>
<?php include 'data/gunskins.php'; ?>

<section>
  <div class="wrapper py-10 md:py-24">
    <div class="grid gap-8 md:gap-12">
      <div class="text-center">
        <h5>Gun Skins</h5>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
        <?php
        foreach ($gun as $product) {
          echo '
          <a href="../player_rank/player_rank.php?name='.$product["name"].'&image='.$product["image"].'">
            <div class="bg-purple-900 hover:bg-purple-950 text-center items-center py-10 md:py-10 grid gap-4 rounded-2xl shadow1">
              <img class="m-auto" src="' . $product["image"] . '" alt="img" />
              <h4>' . $product["name"] . '</h4>
            </div>
          </a>
          ';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php include '../common/footer.php'; ?>