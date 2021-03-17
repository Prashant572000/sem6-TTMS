<?php
  include ('../dbcon.php');
  	$clas  =  $_POST['class'];
  		$sub1=  $_POST['sub1'];
  		$sub2=  $_POST['sub2'];
  		$sub3=  $_POST['sub3'];
  		$sub4=  $_POST['sub4'];
  		$sub5=  $_POST['sub5'];
  		$sub6=  $_POST['sub6'];
  		$sub7=  $_POST['sub7'];
  		$sub8=  $_POST['sub8'];
  		$sub9=  $_POST['sub9'];
  		$sub10= $_POST['sub10'];
  		$id = $_POST['id'];
	  
	  
	  $qry="UPDATE `tuett` SET `Period` = '$clas', `1` = '$sub1', `2` = '$sub2', `3` = '$sub3', `4` = '$sub4', `5` = '$sub5', 
	  `6` = '$sub6', `7` = '$sub7', `8` = '$sub8', `9` = '$sub9', `10` = '$sub10' WHERE `id` = '$id';";
	  $run=mysqli_query($conn,$qry);
	  if($run==true) {
		  ?>
		  <script>
		  alert('Data Updated Successfully');
		  window.open("up2tue.php?id=<?php echo $id; ?>",'_self');
		  </script>
          <?php 
  }
  ?>