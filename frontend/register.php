<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
