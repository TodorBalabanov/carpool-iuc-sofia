<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Store Trip ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Store Trip</h1>

<?php include 'navigation.php'; ?>

  <p/>

<?php
  include( "db.php" );
  $result = pg_exec($link, "select add_trip('".$_POST["from"]."', '".$_POST["to"]."', '".$_POST["car"]."', '".$_POST["time"]."', '".intval($_POST["seats"])."', '".(isset($_POST["free"])?"true":"false")."', '".(isset($_POST["paid"])?"true":"false")."', '".$_POST["notes"]."');");

  if(pg_numrows($result) > 0) {
    $row = pg_fetch_array($result, 0);
    echo($row[0]=='t'?'Trip added!':'Not not added!');
  }

  pg_close($link);
?>

</body>
</html>

