<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
      <a href="index.php">Home</a>
      <a class="active" href="feedback.php">Send Feedback</a>
      <a href="time.php">View current time</a>
    </div>
    <h2>Submit Feedback</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <textarea name="message" rows="4" cols="50" placeholder="Enter your feedback here..." required></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="index.php">Back to home</a>
</body>
</html>
