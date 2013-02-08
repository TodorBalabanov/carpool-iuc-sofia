<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Trips List ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Trips List</h1>

<?php include 'navigation.php'; ?>

  </p>

<?php
  include( "db.php" );
  $result = pg_exec($link, "select * from trips_view");
?>

<!-- List of trips tables.  -->
  <table border="1" name="trips_list" id="trips_list">
    <tr>
      <th></th>
      <th>Driver Name</th>
      <th>Driver Phone</th>
      <th>From Location</th>
      <th>To Location</th>
      <th>Departure Time</th>
      <th>Available Seats</th>
      <th>Type</th>
    </tr>
<?php
  for($i=0; $i<pg_numrows($result); $i++) {
    $row = pg_fetch_array($result, $i);
?>
    <tr>
      <td><?php echo(($i+1));?></td>
      <td><?php echo($row[1].' '.$row[2]);?></td>
      <td><?php echo($row[3]);?></td>
      <td><?php echo($row[4]);?></td>
      <td><?php echo($row[5]);?></td>
      <td><a href="trip_details.php?id=<?php echo($row[0]);?>"><?php echo($row[6]);?></a></td>
      <td><?php echo($row[7]);?></td>
      <td><?php echo(($row[8]=='t'?'F':'').($row[9]=='t'?'P':''));?></td>
    </tr>
<?php
  }
?>
  </table>
<!-- List of trips tables.  -->

<?php
  pg_close($link);
?>

  <form action="search_trip.php" method="post">
    <input type="submit" value="Go Back">
  </form>

</body>
</html>

