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
  <title>.:: Carpool IUC Sofia - Register ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Register</h1>

<?php include 'navigation.php'; ?>

  <p/>

  <form action="" method="post">
	  <table border="0">
		 <tr>
		   <td align="right">First Name:</td>
		   <td><input type="text" size="40" name="first" id="first"/></td>
		 </tr>
		 <tr>
		   <td align="right">Last Name:</td>
		   <td><input type="text" size="40" name="last" id="last"/></td>
		 </tr>
		 <tr>
		   <td align="right">Email:</td>
		   <td><input type="text" size="40" name="email" id="email"/></td>
		 </tr>
		 <tr>
		   <td align="right">Password:</td>
		   <td><input type="password" size="40" name="password" id="password"/></td>
		 </tr>
		 <tr>
		   <td align="right">Phone:</td>
		   <td><input type="text" size="40" name="phone" id="phone"/></td>
		 </tr>
		 <tr>
		   <td align="right">Passport ID:</td>
		   <td><input type="text" size="40" name="passport" id="passport"/></td>
		 </tr>
		 <tr>
		   <td align="right">Driving License ID:</td>
		   <td><input type="text" size="40" name="license" id="license"/></td>
		 </tr>
		 <tr>
		   <td align="right">Registration Type:</td>
		   <td>
                   &nbsp;&nbsp;
                   Driver <input type="checkbox" value="yes" name="driver" id="driver"/>
                   &nbsp;&nbsp;
                   Passenger <input type="checkbox" value="yes" name="driver" id="driver"/>
                   &nbsp;&nbsp;
	           Smoking <input type="checkbox" value="yes" name="smoking" id="smoking"/>
                   </td>
		 </tr>
		 <tr>
		   <td align="right">Notes:</td>
		   <td><textarea cols="30" rows="5" name="notes" id="notes"></textarea></td>
		 </tr>
	  </table>
     <input type="submit" value="Register" name="register" id="register"/>
</body>
</html>
