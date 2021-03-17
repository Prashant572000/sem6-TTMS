<?php
  include ('../dbcon.php');
	 $id=$_REQUEST['sid'];
	 $qry="Delete FROM `thutt`  WHERE `id`='$id';";
	  $run=mysqli_query($conn,$qry);
	  if($run==true) {
		  ?>
		  <script>
		  alert('Data Deleted Successfully');
		  window.open('del4thu.php','_self');
		  </script>
          <?php 
  }
  ?>