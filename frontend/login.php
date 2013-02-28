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
  <title>.:: Carpool IUC Sofia - Login ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Login</h1>

<?php include 'navigation.php'; ?>

  <p/>

  <form action="index.php" method="post">
	  <table border="0">
		 <tr>
		   <td align="right">Email:</td>
		   <td><input type="text" name="email" id="email"/></td>
		 </tr>
		 <tr>
		   <td align="right">Password:</td>
		   <td><input type="password" name="password" id="password"/></td>
		 </tr>
	  </table>
     <input type="submit" value="Login" name="login" id="login"/>
  </form>
</body>
</html>

