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
?>

  <table border="0" class="navigation">
    <tr>
      <td><a href="index.php">Home</a></td>
      <td><a href="search_trip.php">Search Trip</a></td>
<?php
  if( isset($_SESSION['driver_id']) ){
?>
      <td><a href="post_trip.php">Post Trip</a></td>
<?php
  } else {
?>
      <td>Post Trip</td>
<?php
  }
?>
<?php
  if( isset($_SESSION['driver_id']) ){
?>
      <td><a href="add_car.php">Add Car</a></td>
<?php
  } else {
?>
      <td>Add Car</td>
<?php
  }
?>
      <td><a href="about.php">About</a></td>
      <td><a href="contacts.php">Contacts</a></td>
<?php
  if( isset($_SESSION['person_id']) ){
?>
      <td>Register</td>
<?php
  } else {
?>
      <td><a href="register.php">Register</a></td>
<?php
  }
?>
<?php
  if( isset($_SESSION['person_id']) ){
?>
      <td><a href="logout.php">Logout <?php echo($_SESSION['person_name']);?></a></td>
<?php
  } else {
?>
      <td><a href="login.php">Login</a></td>
<?php
  }
?>
    </tr>
  </table>
