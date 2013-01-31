<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Search Trip ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Search Trip</h1>

<?php include 'navigation.php'; ?>

  </p>

  <form action="" method="post">
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

