<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
   else {
	   header('location: ../login.php');
   }
?>
<html>
<body bgcolor="yellow">
   <div class="admintitle"  align="center">
    
   <h4><a href="login.php" style="float:right;margin-right:30px;font-size:20px;color:#fff;">Logout</a></h4>
   <h1 alin="center">Welcome To Admin Dashboard</h1>
</div> 

         <div class="dashboard">
		 <table style="width:50%;">
<tr>
	 <td style="font-size:30;">1.</td><td><p style="font-size:25px;">Insert Student Time Table :</p></td> 
	 <td><a href="Insert\in1mon.php" style=font-size:20;">Mon</td>
	 <td><a href="Insert\in2tue.php" style=font-size:20;">Tue</td>
	 <td><a href="Insert\in3wed.php" style=font-size:20;">Wed</td>
	 <td><a href="Insert\in4thu.php" style=font-size:20;">Thu</td>
	 <td><a href="Insert\in5fri.php" style=font-size:20;">Fri</td>
	 <td><a href="Insert\in6sat.php" style=font-size:20;">Sat</td>
</tr>

<tr>
	 <td style="font-size:30;">2.</td><td><p style="font-size:25px;">Update Student Time Table : </p></td>
	 <td><a href="Update\up1mon.php" style=font-size:20;">Mon</td>
	 <td><a href="Update\up2tue.php" style=font-size:20;">Tue</td>
	 <td><a href="Update\up3wed.php" style=font-size:20;">Wed</td>
	 <td><a href="Update\up4thu.php" style=font-size:20;">Thu</td>
	 <td><a href="Update\up5fri.php" style=font-size:20;">Fri</td>
	 <td><a href="Update\up6sat.php" style=font-size:20;">Sat</td>
</tr>

<tr>
	 <td style="font-size:30;">3.</td><td><p style="font-size:25px;">Delete Student Time Table : </p></td>
	 <td><a href="Delete\del1mon.php" style=font-size:20;">Mon</td>
	 <td><a href="Delete\del2tue.php" style=font-size:20;">Tue</td>
	 <td><a href="Delete\del3wed.php" style=font-size:20;">Wed</td>
	 <td><a href="Delete\del4thu.php" style=font-size:20;">Thu</td>
	 <td><a href="Delete\del5fri.php" style=font-size:20;">Fri</td>
	 <td><a href="Delete\del6sat.php" style=font-size:20;">Sat</td>
</tr>
		 </table>
		 </div>
<style>
.admintitle {
	background:#530602;
	color:#fff;
	margin-left:50px;
	margin-right:50px;
	height:140px;
	line-height:140px;
}

.dashboard
{
    background:#1DEFEF;
	color:#000;
    margin-left:50px;
	margin-right:50px;
	height:140px;
    font-size:25px;	
}
</style>
</body>
</html>