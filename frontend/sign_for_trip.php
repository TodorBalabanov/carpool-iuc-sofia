<?php session_start();?>
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
  <title>.:: Carpool IUC Sofia - Sign for Trip ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Sign for Trip</h1>

<?php include 'navigation.php'; ?>

  <p/	>

<?php
  if( isset($_SESSION['person_id']) && isset($_SESSION['passenger_id']) ) {
    include( "db.php" );
    $result = pg_exec($link, 'select sign_for_trip('.$_SESSION['person_id'].', '.intval($_POST['trip_id']).');');

    if(pg_numrows($result) > 0) {
      $row = pg_fetch_array($result, 0);
      echo($row[0]=='t'?'Added to the trip!':'Not signed!');
    }

    pg_close($link);
  }
?>

  <form action="trip_details.php?id=<?php echo(intval($_POST['trip_id']));?>" method="post">
    <input type="submit" value="Go Back">
  </form>

</body>
</html>

