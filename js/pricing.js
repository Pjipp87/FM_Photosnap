$(document).ready(() => {
  var state = 0;
  var priceBasicArr = ["$19.00", "$190.00"];
  var priceProArr = ["$39.00", "$390.00"];
  var priceBusinessArr = ["$99.00", "$990.00"];
  var timeArr = ["per month", "per year"];

  $("#priceBasic").text(priceBasicArr[state]);
  $("#pricePro").text(priceProArr[state]);
  $("#priceBusiness").text(priceBusinessArr[state]);
  $(".time").text(timeArr[state]);

  $("#flexSwitchCheckDefault").change(() => {
    if ($("#flexSwitchCheckDefault").is(":checked")) {
      state++;
    } else {
      state--;
    }
    $("#monthly").toggleClass(" active");
    $("#yearly").toggleClass(" active");
    $("#priceBasic").text(priceBasicArr[state]);
    $("#pricePro").text(priceProArr[state]);
    $("#priceBusiness").text(priceBusinessArr[state]);
    $(".time").text(timeArr[state]);
  });
});
