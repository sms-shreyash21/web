<!DOCTYPE html>
<html>
<head>
  <title>Secured Page</title>
</head>
<body>
  <h2>Welcome to the Secured Page</h2>
  <?php
  // Start the session
  session_start();

  // Check if the user is logged in
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<p>You are logged in as $username</p>";
    echo '<a href="logout_process.php">Logout</a>';
  } else {
    // Redirect to login.php if the user is not logged in
    header('Location: login.php');
    exit();
  }
  ?>
</body>
</html>
