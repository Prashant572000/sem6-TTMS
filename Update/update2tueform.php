<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
   else {
	   header('location: login.php');
   }
?>

<?php
include '../dbcon.php';
    $id = $_GET['id'];
    $sql="SELECT * FROM `tuett` WHERE id='$id'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);
?>

<html>
<body  bgcolor="Lightskyblue">
<form method="post" action ="update2tuedata.php?sid=<?php echo $data['id'] ?>">  
<table align="center" border=1>  

<tr>
<td><label> Enter Class & Semester : </label></td>         
<td><input type="text" name="class" id="class" size="30" value='<?php echo $data['Period']; ?>' required></td> 
</tr>

<tr>
<td><label> Enter Subject Information 1:  </label></td>         
<td><input type="text" name="sub1" id="sub1" size="30" value='<?php echo $data['1']; ?>' ></td> 
</tr>

<tr>
<td><label> Enter Subject Information 2:  </label></td>         
<td><input type="text" name="sub2" id="sub2" size="30" value='<?php echo $data['2']; ?>' ></td>

</tr>

<tr>
<td><label> Enter Subject Information 3:  </label></td>         
<td><input type="text" name="sub3" id="sub3" size="30" value='<?php echo $data['3']; ?>' ></td>
</tr>

<tr>
<td><label> Enter Subject Information 4:  </label></td>         
<td><input type="text" name="sub4" id="sub4" size="30" value='<?php echo $data['4']; ?>' ></td>
</tr>

<tr>
<td><label> Enter Subject Information 5:  </label></td>         
<td><input type="text" name="sub5" id="sub5" size="30" value='<?php echo $data['5']; ?>' ></td>
</tr>

<tr>
<td><label> Enter Subject Information 6:  </label></td>         
<td><input type="text" name="sub6" id="sub6" size="30" value='<?php echo $data['6']; ?>' ></td>
</tr>


<tr>
<td><label> Enter Subject Information 7:  </label></td>         
<td><input type="text" name="sub7" id="sub7" size="30"  value='<?php echo $data['7']; ?>' ></td>
</tr>


<tr>
<td><label> Enter Subject Information 8:  </label></td>         
<td><input type="text" name="sub8" id="sub8" size="30" value='<?php echo $data['8']; ?>' ></td>
</tr>

<tr>
<td><label> Enter Subject Information 9:  </label></td>         
<td><input type="text" name="sub9" id="sub9" size="30" value='<?php echo $data['9']; ?>' ></td>
</tr>


<tr>
<td><label> Enter Subject Information 10:  </label></td>         
<td><input type="text" name="sub10" id="sub10" size="30" value='<?php echo $data['10']; ?>' ></td>
</tr>

<tr>
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<td colspan=2 align="center"><input type="submit" name = "submit" value="Update"> </td> 
</tr>
</table>
</form>
</body>
</html>