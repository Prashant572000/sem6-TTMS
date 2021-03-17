<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
   else {
	   header('location: ../index.html');
   }
?>
<Html>  
<body bgcolor="Lightskyblue">  
<marquee><h1 align="center" style="font-size:40;">Insert Thursday Classes Time Table</h1></marquee>
<h4><a href="../admindash.php" style="float:left;margin-left:30px;margin-top:30px;font-size:30px;color:black;"><-Back</a></h4>
<br>  
<br>  
<br>  
<br>
<form  method="post" action ="in4thu.php" >  
<table align="center" border=1>  
<tr>
<td><label> Enter Class & Semester : </label></td>         
<td><input type="text" name="class" id="class" size="30" required></td> 
</tr>

<tr>
<td><label> Enter Subject Information 1:  </label></td>         
<td><input type="text" name="sub1" id="sub1" size="30" ></td> 
</tr>

<tr>
<td><label> Enter Subject Information 2:  </label></td>         
<td><input type="text" name="sub2" id="sub2" size="30" ></td>
</tr>

<tr>
<td><label> Enter Subject Information 3:  </label></td>         
<td><input type="text" name="sub3" id="sub3" size="30" ></td>
</tr>

<tr>
<td><label> Enter Subject Information 4:  </label></td>         
<td><input type="text" name="sub4" id="sub4" size="30" ></td>
</tr>

<tr>
<td><label> Enter Subject Information 5:  </label></td>         
<td><input type="text" name="sub5" id="sub5" size="30" ></td>
</tr>

<tr>
<td><label> Enter Subject Information 6:  </label></td>         
<td><input type="text" name="sub6" id="sub6" size="30" ></td>
</tr>


<tr>
<td><label> Enter Subject Information 7:  </label></td>         
<td><input type="text" name="sub7" id="sub7" size="30" ></td>
</tr>


<tr>
<td><label> Enter Subject Information 8:  </label></td>         
<td><input type="text" name="sub8" id="sub8" size="30" ></td>
</tr>

<tr>
<td><label> Enter Subject Information 9:  </label></td>         
<td><input type="text" name="sub9" id="sub9" size="30" ></td>
</tr>


<tr>
<td><label> Enter Subject Information 10:  </label></td>         
<td><input type="text" name="sub10" id="sub10" size="30" ></td>
</tr>

<tr>
<td colspan=2 align="center"><input type="submit" name = "submit" value="Submit"> </td> 
</tr>
</table>
</form>  
</body>  
</html>  


<?php
  if(isset($_POST['submit'])) {
	  include ('../dbcon.php');
	  $clas=$_POST['class'];
	  $subject1=$_POST['sub1'];
	  $subject2=$_POST['sub2'];
	  $subject3=$_POST['sub3'];
	  $subject4=$_POST['sub4'];
	  $subject5=$_POST['sub5'];
	  $subject6=$_POST['sub6'];
	  $subject7=$_POST['sub7'];
	  $subject8=$_POST['sub8'];
	  $subject9=$_POST['sub9'];
	  $subject10=$_POST['sub10'];
	 
	  $qry="INSERT INTO `thutt`(`Period`, `1`, `2`, `3`, `4`, `5`,`6`,`7`,`8`,`9`,`10`) 
	         VALUES ('$clas', '$subject1','$subject2','$subject3','$subject4','$subject5',
			'$subject6','$subject7' , '$subject8', '$subject9' , '$subject10')";
	  $run=mysqli_query($conn,$qry);
	  if($run==true) {
		  ?>
		  <script>
		  alert('Data Inserted Successfully');
		  if (window.history.replaceState) {
			  window.history.replaceState(null , null , window.location.href);
		  }
		  </script>
          <?php 
  }
  }
  ?>