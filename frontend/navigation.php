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
