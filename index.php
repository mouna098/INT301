
<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="12.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p><h2>Welcome</h2> <strong><?php echo $_SESSION['username']; ?></strong></p>
City List :  
<select>  
  <option value="Select">Select</option>}  
  $db = mysqli_connect('localhost', 'feroz', '8531', 'db');
  $db->query("select cities from portal;")) 
</select>
Flat List :  
<select>  
  <option value="Select">Select</option>}  
  $db = mysqli_connect('localhost', 'feroz', '8531', 'db');
  $db->query("select flats from portal;")) 
</select>

<style>
table, th, td {
  border: 1px solid black;
}
</style>


$db = mysqli_connect('localhost', 'feroz', '8531', 'db');
  $db->query("select Owner Name,Appartment Address,Area Name,Rent,Mobile from portal;")) 

<table style="width:100%">
</table>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
