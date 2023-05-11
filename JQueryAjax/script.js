$(document).ready(function() {
    // Handle click event on button
    $("#get-longitude").on("click", function() {
      // Get the value of the location input field
      var location = $("#location").val();
  
      // Make AJAX call to OpenWeatherMap API to get location data
      $.ajax({
        url: "https://api.openweathermap.org/data/2.5/weather",
        type: "GET",
        data: {
          q: location,
          appid: "931a796735343ed4908c046b6bcf0efd"
        },
        success: function(data) {
          // Display the longitude of the location on the page
          let latitude = data.coord.lat;
          let longitude = data.coord.lon;
          $("#longitude").text(longitude);
          $("#latitude").text(latitude)
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Handle error if AJAX call fails
          console.log("AJAX error: " + textStatus + ", " + errorThrown);
        }
      });
    });
  });
  