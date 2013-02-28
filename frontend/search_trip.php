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
  <title>.:: Carpool IUC Sofia - Search Trip ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Search Trip</h1>

<?php include 'navigation.php'; ?>

  <p/>

  <form action="list_all_trips.php" method="post">
	  <table border="0">
		 <tr>
		   <td align="right">From Location:</td>
		   <td><input type="text" name="from" id="from"/></td>
		 </tr>
		 <tr>
		   <td align="right">To Location:</td>
		   <td><input type="text" name="to" id="to"/></td>
		 </tr>
		 <tr>
		   <td align="right">Departure Date:</td>
			<!-- TODO Replace with calendar control! --->
		   <td><input type="text" name="date" id="date"/></td>
		 </tr>
		 <tr>
		   <td align="right">Trip Type:</td>
		   <td>
                   &nbsp;&nbsp;
                   Free <input type="checkbox" checked="true" value="yes" name="free" id="free"/>
                   &nbsp;&nbsp;
                   Paid <input type="checkbox" checked="true" value="yes" name="paid" id="paid"/>
                   </td>
		 </tr>
	  </table>
     <input type="submit" value="Search" name="search" id="search"/>
  </form>
</body>
</html>

