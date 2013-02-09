<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<?php include 'heading.php'; ?>
  <title>.:: Carpool IUC Sofia - Add Car ::.</title>
</head>

<body>
  <h1>Carpool IUC Sofia - Add Car</h1>

<?php include 'navigation.php'; ?>

  <p/>

  <form action="" method="post">
	  <table border="0">
		 <tr>
		   <td align="right">Brand:</td>
		   <td><input type="text" size="40" name="brand" id="brand"/></td>
		 </tr>
		 <tr>
		   <td align="right">Model:</td>
		   <td><input type="text" size="40" name="model" id="model"/></td>
		 </tr>
		 <tr>
		   <td align="right">Registration:</td>
		   <td><input type="text" size="40" name="registration" id="registration"/></td>
		 </tr>
		 <tr>
		   <td align="right">Color:</td>
		   <td><input type="text" size="40" name="color" id="color"/></td>
		 </tr>
	  </table>
     <input type="submit" value="Add" name="add" id="add"/>
</body>
</html>
