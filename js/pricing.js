$(document).ready(() => {
  $("#flexSwitchCheckDefault").change(() => {
    $("#monthly").toggleClass(" active");
    $("#yearly").toggleClass(" active");
  });
});
