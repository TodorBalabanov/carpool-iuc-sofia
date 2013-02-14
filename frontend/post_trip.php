<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Post Trip ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Post Trip</h1>

<?php include 'navigation.php'; ?>

  <p/>

  <!-- TODO Driver login is needed in order to post a trip! -->
  <form action="store_trip.php" method="post">
	  <table border="0">
		 <tr>
		   <td align="right">From Location:</td>
		   <td><input type="text" size="30" name="from" id="from"/></td>
		 </tr>
		 <tr>
		   <td align="right">To Location:</td>
		   <td><input type="text" size="30" name="to" id="to"/></td>
		 </tr>
		 <tr>
		   <td align="right">Car Registration:</td>
         <!-- TODO Use dropdown list with cars for the logged in driver! --->
		   <td><select name="car" id="car">
<?php
  if( isset($_SESSION['driver_id']) ) {
    include( "db.php" );
    $result = pg_exec($link, "select registration from car where driver_id = ".intval($_SESSION['driver_id']).";");

    for($i=0; $i<pg_numrows($result); $i++) {
      $row = pg_fetch_array($result, $i);
      echo('<option value="'.$row[0].'">'.$row[0].'</option>');
    }

    pg_close($link);
  }
?>
         </select></td>
		 </tr>
		 <tr>
		   <td align="right">Departure Date:</td>
         <!-- TODO Replace with calendar control! --->
		   <td><input type="text" size="30" name="date" id="date"/></td>
		 </tr>
		 <tr>
		   <td align="right">Departure Time:</td>
         <!-- TODO Replace with clock control! --->
<?php
  include( "db.php" );
  $result = pg_exec($link, "select now();");
  $row = pg_fetch_array($result, 0);
?>
		   <td><input type="text" size="30" name="time" id="time" value="<?php echo($row[0]);?>"/></td>
<?php
  pg_close($link);
?>
		 </tr>
		 <tr>
		   <td align="right">Available Seats:</td>
		   <td><input type="text" size="30" name="seats" id="seats" value="0"/></td>
		 </tr>
		 <tr>
		   <td align="right">Trip Type:</td>
		   <td>
         &nbsp;&nbsp;
         Free <input type="checkbox" value="yes" name="free" id="free"/>
         &nbsp;&nbsp;
         Paid <input type="checkbox" value="yes" name="paid" id="paid"/>
         </td>
		 </tr>
		 <tr>
		   <td align="right">Notes:</td>
		   <td><textarea cols="25" rows="5" name="notes" id="notes"></textarea></td>
		 </tr>
	  </table>
     <input type="submit" value="Post Trip" name="post" id="post"/>
  </form>
</body>
</html>

