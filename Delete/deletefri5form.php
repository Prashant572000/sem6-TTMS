<?php
  include ('../dbcon.php');
	 $id=$_REQUEST['sid'];
	 $qry="Delete FROM `fritt`  WHERE `id`='$id';";
	  $run=mysqli_query($conn,$qry);
	  if($run==true) {
		  ?>
		  <script>
		  alert('Data Deleted Successfully');
		  window.open('del5fri.php','_self');
		  </script>
          <?php 
  }
  ?>