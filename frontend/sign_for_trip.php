<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Sign for Trip ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Sign for Trip</h1>

<?php include 'navigation.php'; ?>

  <p/	>

<?php
  include( "db.php" );
  //TODO Obtain persion id from session variable.
  $result = pg_exec($link, 'select sign_for_trip('.'0'.', '.intval($_POST['trip_id']).');');

  if(pg_numrows($result) > 0) {
    $row = pg_fetch_array($result, 0);
    echo($row[0]=='t'?'Added to the trip!':'Not signed!');
  }

  pg_close($link);
?>

  <form action="trip_details.php?id=<?php echo(intval($_POST['trip_id']));?>" method="post">
    <input type="submit" value="Go Back">
  </form>

</body>
</html>

