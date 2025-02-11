<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <title>FFF Skin Tool</title>

  <!-- Inter Font -->
  <link rel="icon" href="assets/images/icon.svg" />

  <script src="../../assets/js/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    function addClass(IdBox, ClasBox) {
      var element = document.querySelector(IdBox);
      element.classList.add(ClasBox);
    }
    function removeClass(IdBox, ClasBox) {
      var element = document.querySelector(IdBox);
      element.classList.remove(ClasBox);
    }

    // -------------------------------

    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 500) {
        $(".header-start").addClass("active");
      } else {
        $(".header-start").removeClass("active");
      }
    });
  </script>

  <!-- Inter Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">

  <!-- Style CSS -->
  <link rel="stylesheet" href="../../assets/css/style.css" />
</head>

<body class="gradient">
  <!-- Header -->
  <header class="header-start">
    <div class="wrapper">
      <div class="py-8 grid grid-cols-2 items-center">
        <div>
          <a href="../../index.php">
            <img class="w-48" src="../../assets/images/logo.svg" alt="">
          </a>
        </div>
        <span class="grid justify-end">
          <a href="javascript:history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6 sm:size-8 md:size-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </a>
          </snap>
      </div>
    </div>
  </header>  
