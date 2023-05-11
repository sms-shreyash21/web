$(document).ready(function() {
  // Handle click event on button
  $("#my-button").on("click", function() {
    // Animate a div
    $("#my-div").animate({
      opacity: 0.25,
      left: "+=50",
      height: "toggle"
    }, 1000);
  });
});
