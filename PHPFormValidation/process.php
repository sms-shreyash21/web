<!DOCTYPE html>
<html>
<head>
  <title>My Form Results</title>
</head>
<body>
  <?php
    $name = $email = $password = "";
    $nameErr = $emailErr = $passwordErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $password = test_input($_POST["password"]);
      
      // Validate name
      if (empty($name)) {
        $nameErr = "Name is required";
      } else {
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
      
      // Validate email
      if (empty($email)) {
        $emailErr = "Email is required";
      } else {
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
      
      // Validate password
      if (empty($password)) {
        $passwordErr = "Password is required";
      } else {
        // Check if password meets requirements
        if (strlen($password) < 8) {
          $passwordErr = "Password must be at least 8 characters long";
        }
      }
      
      // Display form data and errors
      if ($nameErr == "" && $emailErr == "" && $passwordErr == "") {
        echo "<h2>Form Results</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
      } else {
        echo "<h2>Form Errors</h2>";
        echo "<ul>";
        echo "<li>$nameErr</li>";
        echo "<li>$emailErr</li>";
        echo "<li>$passwordErr</li>";
        echo "</ul>";
      }
    }
    
    // Function to sanitize user input
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
</body>
</html>
