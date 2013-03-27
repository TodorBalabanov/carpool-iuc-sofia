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
  <title>.:: Carpool IUC Sofia - Add Car ::.</title>

  <script language="JavaScript1.2">
    var models;
<?php
  include( "db.php" );
  $result = pg_exec($link, "select brand.name, model.name from model, brand where brand.id=model.brand_id;");

  echo("\r\n");
  for($i=0; $i<pg_numrows($result); $i++) {
    $row = pg_fetch_array($result, $i);
    echo('models['.$i.'][0] = \'' . $row[0] . '\';');
    echo("\t");
    echo('models['.$i.'][1] = \'' . $row[1] . '\';');
    echo("\r\n");
  }
  pg_close($link);
?>

    function reloadModels() {
      var index = document.forms[0].brand.selectedIndex;
      var brand = document.forms[0].brand[ index ].value;

      document.forms[0].registration.value = brand;
    }
  </script>
</head>

<body>
  <h1>Carpool IUC Sofia - Add Car</h1>

<?php include 'navigation.php'; ?>

  <p/>

  <form name="store_car" id="store_car" action="store_car.php" method="post">
	  <table border="0">
		 <tr>
		   <td align="right">Brand:</td>
		   <td><select name="brand" id="brand" onChange="reloadModels();">
           <option value="">-</option>
<?php
  include( "db.php" );
  $result = pg_exec($link, "select name from brand order by name;");

  for($i=0; $i<pg_numrows($result); $i++) {
    $row = pg_fetch_array($result, $i);
    echo('<option value="' . $row[0] . '">' . $row[0] . '</option>');
  }
  pg_close($link);
?>
         </select></td>
		 </tr>
		 <tr>
		   <td align="right">Model:</td>
		   <td><select name="model" id="model">
           <option value="">-</option>
         </select></td>
		 </tr>
		 <tr>
		   <td align="right">Registration:</td>
		   <td><input type="text" size="20" name="registration" id="registration"/></td>
		 </tr>
		 <tr>
		   <td align="right">Color:</td>
         <script type="text/javascript" src="/jscolor/jscolor.js"></script>
		   <td><input class="color" name="color" id="color"></td>
		 </tr>
	  </table>
     <input type="submit" value="Add" name="add" id="add"/>
  </form>
</body>
</html>

