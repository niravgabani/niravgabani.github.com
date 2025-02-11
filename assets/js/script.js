
function addClass(IdBox, ClasBox) {
  var element = document.querySelector(IdBox);
  element.classList.add(ClasBox);
}
function removeClass(IdBox, ClasBox) {
  var element = document.querySelector(IdBox);
  element.classList.remove(ClasBox);
}
// -------------------------------

AOS.init();

// --------------------------------------

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 500) {
    $(".header-start").addClass("active");
  } else {
    $(".header-start").removeClass("active");
  }
});