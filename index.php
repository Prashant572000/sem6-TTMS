<html>
<head>
<title>Admin Login</title>
</head>
<body bgcolor="blue">
<h1 align="center" style="background:yellow;color:black;line-height:140px;">Student Login (Pubic)</h1>
<form action="index.php" method="post">
<table align="center">
              <tr>
          <td>Username</td><td> <input type="text" name="uname" required></td>
            </tr>
			<tr>
	      <td>Password</td><td> <input type="password" name="pass" required></td>
            </tr>
			<tr>
			<td colspan="2" align="center"><input type="Submit" name="login" value="Login"></td>
			</tr>
</table>
</form>
</body>
</html>
<?php

include 'dbcon.php';
if(isset($_POST['login'])) {
	$username= $_POST['uname'];
	$password= $_POST['pass'];
    $qry="SELECT * FROM `stulogin` WHERE username='$username' AND password='$password'";
    $run=mysqli_query($conn,$qry);	
    $row=mysqli_num_rows($run);
if($row < 1) {
      ?>
	  <script>
	  alert('Username or Password not match ! !');
         window.open('index.php','_self');
      </script>	  
		 <?php
}
else {
$data = mysqli_fetch_assoc($run);
$id=$data['id'];
session_start();
$_SESSION['uid']=$id;
header("Location:ShowTT\show1mon.php");
}	
}

?> 