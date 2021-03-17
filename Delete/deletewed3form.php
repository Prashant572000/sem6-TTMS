<?php
  include ('../dbcon.php');
	 $id=$_REQUEST['sid'];
	 $qry="Delete FROM `wedtt`  WHERE `id`='$id';";
	  $run=mysqli_query($conn,$qry);
	  if($run==true) {
		  ?>
		  <script>
		  alert('Data Deleted Successfully');
		  window.open('del3wed.php','_self');
		  </script>
          <?php 
  }
  ?>