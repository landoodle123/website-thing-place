<html>
<head>
  <title>Current time</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topnav">
  <a href="index.php">Home</a>
  <a href="feedback.php">Send Feedback</a>
  <a class="active" href="time.php">View current time</a>
  </div>
  <h1>View current time</h1>
  <?PHP
  date_default_timezone_set("America/New_York");
  echo "The current time is " . date("h:i:s a");
  ?>
</body>
</html>
