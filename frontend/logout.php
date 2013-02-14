<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Logout ::.</title>
  <meta http-equiv="refresh" content="1;login.php">
<?php
  unset($_SESSION['person_id']);
  unset($_SESSION['person_name']);
  //unset($_SESSION['driver_id']);
  //unset($_SESSION['passenger_id']);
?>
</head>

<body>
  <h1>Carpool IUC Sofia - Logout</h1>

<?php include 'navigation.php'; ?>

  <p/>
</body>
</html>

