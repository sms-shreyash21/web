$(document).ready(function() {
    // Handle click event on button
    $("#my-button").on("click", function() {
      // Display message
      alert("Button clicked!");
    });
    $("#hide").on("click", function() {
        // Display message
        $("h1").hide();
    });
    $("#show").on("click", function() {
        // Display message
        $("h1").show();
    });

  });
  