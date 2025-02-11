<?php include '../common/header.php'; ?>  

<?php
// Retrieve the data
$name = isset($_GET['name']) ? $_GET['name'] : "Moco";
$image = isset($_GET['image']) ? $_GET['image'] : "../../assets/images/moco.png";
$rname = isset($_GET['rname']) ? $_GET['rname'] : "Rank 1";
$rimage = isset($_GET['rimage']) ? $_GET['rimage'] : "../../assets/images/r1.webp";
$age = isset($_GET['Age']) ? $_GET['Age'] : "Age 12 - 18";
?>

  <!-- Let's Start -->
  <section>
    <div class="wrapper py-5 md:py-20 grid gap-10">
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
      <div class="">
        <!-- <a href=""> -->
          <div
            class="bg-purple-900 hover:bg-purple-950 text-center items-center py-5 md:py-10 grid gap-4 rounded-2xl shadow1">
            <h4><?php echo $age ?></h4>
          </div>
        <!-- </a> -->
      </div>
    </div>
  </section>

  <!-- Here is some information about the app: -->
  <section>
    <div class="wrapper1 py-5 md:py-20">
      <div class="grid gap-8 md:gap-12 text-center">
        <img class="mx-auto" src="../../assets/images/calcu.webp" alt="img" />
        <label for="">Player Id</label>
        <input type="tel" class="w-full h-full input" id="phone" name="phone" placeholder="Enter Your Player ID" />
        <span>
          <a href="done.php" class="btn">Submit</a>
        </span>
      </div>
    </div>
  </section>

  <?php include '../common/footer.php'; ?>  