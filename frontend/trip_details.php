<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Trip Details ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Trip Details</h1>

<?php include 'navigation.php'; ?>

  </p>

<?php
  include( "db.php" );
  $result = pg_exec($link, "select * from trip_details_view where id=" . intval($_GET['id']));
?>

<!-- Trip details tables.  -->
  <table border="1" name="trips_details" id="trips_details">
<?php
  if(pg_numrows($result) > 0) {
    $row = pg_fetch_array($result, 0);
?>
    <tr>
      <td><b>Driver</b></td>
      <td><?php echo($row[1].' '.$row[2]);?></td>
    </tr>
    <tr>
      <td><b>Phone</b></td>
      <td><?php echo($row[3]);?></td>
    </tr>
    <tr>
      <td><b>From</b></td>
      <td><?php echo($row[4]);?></td>
    </tr>
    <tr>
      <td><b>To</b></td>
      <td><?php echo($row[5]);?></td>
    </tr>
    <tr>
      <td><b>Departure</b></td>
      <td><?php echo($row[6]);?></td>
    </tr>
    <tr>
      <td><b>Car</b></td>
      <td><?php echo($row[7].' '.$row[8].' '.$row[10]);?></td>
    </tr>
    <tr>
      <td><b>Seats</b></td>
      <td><?php echo($row[12]);?></td>
    </tr>
    <tr>
      <td><b>Type</b></td>
      <td>
		<?php echo(($row[13]=='t'?'<input type="checkbox" checked="yes">':'<input type="checkbox">').'Free');?>
      &nbsp;&nbsp;&nbsp;
      <?php echo(($row[14]=='t'?'<input type="checkbox" checked="yes">':'<input type="checkbox">').'Paid');?>
      &nbsp;&nbsp;&nbsp;
      <?php echo(($row[15]=='t'?'<input type="checkbox" checked="yes">':'<input type="checkbox">').'Smoking');?>
      </td>
    </tr>
    <tr>
      <td><b>Notes</b></td>
      <td><?php echo($row[16]);?></td>
    </tr>

    <tr>
      <td><b>Travelers</b></td>
      <td>
<?php
  $result = pg_exec($link, "select * from travelers_list_view where id=" . intval($_GET['id']));
  for($i=0; $i<pg_numrows($result); $i++) {
    $row = pg_fetch_array($result, $i);
    echo($row[1].' '.$row[2].' '.$row[3].'<br/>');
  }
?>
    </td>
    </tr>

<?php
  } else {
    echo( 'Trip not found!' );
  }
?>
  </table>
<!-- Trip details tables.  -->

<?php
  pg_close($link);
?>

  <form name="sign_for_trip" id="sign_for_trip" action="sign_for_trip.php" method="post">
    <input type="hidden" name="trip_id" id="trip_id" value="<?php echo(intval($_GET['id']));?>">
    <!-- TODO Add person information according login data. -->
    <input type="hidden" name="person_id" id="person_id" value="">
    <input type="submit" value="Sign For This Trip" name="submit" id="submit">
  </form>

</body>
</html>

