$(document).ready(() => {
  var navButton = $("#navButton");

  console.log();

  navButton.click(() => {
    if ($(".navbar-toggler").attr("aria-expanded") === "true") {
      navButton.attr("src", "../assets/shared/mobile/close.svg");
    } else {
      navButton.attr("src", "../assets/shared/mobile/menu.svg");
    }
  });
});
