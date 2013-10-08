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
  <title>.:: Carpool IUC Sofia ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia</h1>

<?php
  include( "db.php" );

  if(isset($_POST['email']) && isset($_POST['password'])) {
    $result = pg_exec($link, "select login('".$_POST['email']."', '".$_POST['password']."');");
    if(pg_numrows($result) == 1) {
      $row = pg_fetch_array($result, 0);
		$values=explode(',',trim($row[0],'()'));
		$values[3] = trim($values[3],'"');
      $_SESSION['person_id'] = $values[0];
      $_SESSION['person_name'] = $values[3];
      $_SESSION['driver_id'] = $values[1];
      $_SESSION['passenger_id'] = $values[2];
		if($_SESSION['driver_id'] == '') {
      	unset($_SESSION['driver_id']);
		}
		if($_SESSION['passenger_id'] == '') {
      	unset($_SESSION['passenger_id']);
		}
    } else {
      unset($_SESSION['person_id']);
      unset($_SESSION['person_name']);
      unset($_SESSION['driver_id']);
      unset($_SESSION['passenger_id']);
    }
  }

  pg_close($link);
?>

<?php include 'navigation.php'; ?>

  <p/>

Welcome to the Internet Based Carpool System developed at International University College Sofia.

</body>
</html>

