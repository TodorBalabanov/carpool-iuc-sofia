<?php
/*******************************************************************************
 *                                                                             *
 * IUC Carpool is a web based carpool system.                                  *
 * Project development is part of the education program at IUC-Sofia, Bulgaria.*
 *                                                                             *
 * Copyright (C) 2012-2013 by Todor Balabanov  ( tdb@tbsoft.eu )               *
 *                                                                             *
 * This program is free software: you can redistribute it and/or modify        *
 * it under the terms of the GNU General Public License as published by        *
 * the Free Software Foundation, either version 3 of the License, or           *
 * (at your option) any later version.                                         *
 *                                                                             *
 * This program is distributed in the hope that it will be useful,             *
 * but WITHOUT ANY WARRANTY; without even the implied warranty of              *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the               *
 * GNU General Public License for more details.                                *
 *                                                                             *
 * You should have received a copy of the GNU General Public License           *
 * along with this program. If not, see <http://www.gnu.org/licenses/>.        *
 *                                                                             *
 ******************************************************************************/
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Trips List ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Trips List</h1>

<?php include 'navigation.php'; ?>

  <p/>

<?php
  if( !isset($_POST['free']) ) {
    $_POST['free'] = 'FALSE';
  } else {
    $_POST['free'] = 'TRUE';
  }

  if( !isset($_POST['paid']) ) {
    $_POST['paid'] = 'FALSE';
  } else {
    $_POST['paid'] = 'TRUE';
  }

  $options = '';
  if( isset($_POST['from']) && $_POST['from']!='' ) {
    $options .= " start_location = '" . $_POST['from'] . "'";
  }
  if( isset($_POST['to']) && $_POST['to']!='' ) {
    if($options != '') {
      $options .= ' and ';
    }
    $options .= " end_location = '" . $_POST['to'] . "'";
  }

  if($options != '') {
    $options .= ' and ';
  }

  $options .= " (free=" . $_POST['free'] . " or paid=" . $_POST['paid'] . ") ";

  if($options != '') {
    $options = 'where ' . $options;
  }

  include( "db.php" );
  $result = pg_exec($link, "select * from trips_view ".$options);
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
      <th>Select</th>
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
      <td><table><tr><td><form action="sign_for_trip.php" method="post"><input type="hidden" name="trip_id" value="<?php echo($row[0]);?>"><input type="submit" value="Join"></form></td><td><input type="submit" value="Remove"></td></tr></table></td>
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

