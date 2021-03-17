<?php
$conn=new mysqli('localhost:3307','root','','sttms');

function showdata() {
	global $conn;

	$query = "SELECT * FROM sattt";
	$run = mysqli_query($conn , $query);
	
	if($run == true) {       ?>
		<table align="center" border=3 , width="100%">
<tr align="center">
		<td>Period</td>
		<td>1</td><td>2</td><td>3</td>
		<td>4</td><td>5</td><td>6</td>
		<td>7</td><td>8</td><td>9</td>
		<td>10</td>
</tr>
		<?php
		  while($data= mysqli_fetch_assoc($run)) {
   ?>
		<tr align="center">
	  <td><?php echo $data['Period']; ?>    </td>
	  <td><?php echo $data['1']; ?> </td>
	  <td><?php echo $data['2']; ?> </td>
	  <td><?php echo $data['3']; ?> </td>
	  <td><?php echo $data['4']; ?> </td>
	  <td><?php echo $data['5']; ?> </td>
	  <td><?php echo $data['6']; ?> </td>
	  <td><?php echo $data['7']; ?> </td>
	  <td><?php echo $data['8']; ?> </td>
	  <td><?php echo $data['9']; ?> </td>
	  <td><?php echo $data['10'];?> </td>
	  </tr>

<?php
		  }
		  ?>
</table>               	
		<?php
		}
		else {
			echo "Error";
		}
}
?>

<html>
<body>
<head><link rel="stylesheet" href="st.css"></head>
<h1 align="center""><marquee>DEI Faculty Of Science Student Time Table </marquee></h1>
<h2 align = "center"> Saturday Classes Schedule</h2>
<input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Only For Admin</header>
	  
	  <a href="../login.php" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Admin Login</span>
      </a>
	  
	  <a href="#">
	  <i class="far fa-envelope"></i>
	  <span>Login</span>		</a>

	  <a href="#">
		<i class="far fa-envelope"></i>
		<span>Sign Up</span>	</a>
	  
		<a href="show6saT.php">
        <i class="far fa-envelope"></i>
        <span>Exit</span> 	</a>
    </div>
	<br><br><br><br>
<?php showdata();   ?>

	<br><br><br><br>
    <div class="pagination_section" align= "center" style="font-size: 22px; margin-bottom:60px;"> 
	<a href="show6sat.php"><< Previous &nbsp;&nbsp;&nbsp;&nbsp;</a> 
        <a href="show1mon.php">1</a> 
        <a href="show2tue.php">2</a> 
        <a href="show3wed.php">3</a> 
        <a href="show4thu.php">4</a> 
        <a href="show5fri.php">5</a> 
        <a href="show6sat.php">6</a> 
        <a href="show1mon.php">Next >></a>  
    </div>
</body>
</html>