<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Post Trip ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Post Trip</h1>

<?php include 'navigation.php'; ?>

  <p/>

  <!-- TODO Driver login is needed in order to post a trip! -->
  <form action="" method="post">
	  <table border="0">
		 <tr>
		   <td align="right">From Location:</td>
		   <td><input type="text" size="30" name="from" id="from"/></td>
		 </tr>
		 <tr>
		   <td align="right">To Location:</td>
		   <td><input type="text" size="30" name="to" id="to"/></td>
		 </tr>
		 <tr>
		   <td align="right">Car Registration:</td>
		   <td><input type="text" size="30" name="car" id="car"/></td>
		 </tr>
		 <tr>
		   <td align="right">Departure Date:</td>
                   <!-- TODO Replace with calendar control! --->
		   <td><input type="text" size="30" name="date" id="date"/></td>
		 </tr>
		 <tr>
		   <td align="right">Departure Time:</td>
                   <!-- TODO Replace with clock control! --->
		   <td><input type="text" size="30" name="time" id="time"/></td>
		 </tr>
		 <tr>
		   <td align="right">Available Seats:</td>
		   <td><input type="text" size="30" name="seats" id="seats"/></td>
		 </tr>
		 <tr>
		   <td align="right">Trip Type:</td>
		   <td>
                   &nbsp;&nbsp;
                   Free <input type="checkbox" value="yes" name="free" id="free"/>
                   &nbsp;&nbsp;
                   Paid <input type="checkbox" value="yes" name="paid" id="paid"/>
                   </td>
		 </tr>
		 <tr>
		   <td align="right">Notes:</td>
		   <td><textarea cols="25" rows="5" name="notes" id="notes"></textarea></td>
		 </tr>
	  </table>
     <input type="submit" value="Post" name="post" id="post"/>
  </form>
</body>
</html>
