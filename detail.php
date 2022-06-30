
<?php  require "config.php"; ?>
<?php 
     $stud_id = $_POST['stud_id'];
     $query = "SELECT * FROM main WHERE username='$stud_id' ";
     $query_run = mysqli_query($con, $query);

     if(mysqli_num_rows($query_run) > 0)
    {
     foreach($query_run as $row)
        {
?>
<?php
  }
}else{echo "No Record Found";}     
                          
?>
<?php echo $row['username']; ?><br>
<?php echo $row['name']; ?><br>
<?php echo $row['balance']; ?><br>
<?php echo $row['pin']; ?>