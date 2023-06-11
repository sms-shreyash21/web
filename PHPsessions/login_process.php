<?php
session_start();

// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password match (you can replace this with your own logic)
if ($username === 'admin' && $password === 'password') {
  // Username and password match, store the username in the session
  $_SESSION['username'] = $username;
  // Redirect to secured.php
  header('Location: secured.php');
} else {
  // Username and password do not match, redirect back to login.php
  header('Location: login.php');
}
?>
