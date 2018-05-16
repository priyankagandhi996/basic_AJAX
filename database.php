<?php
include 'data.php';
$count=$_POST['c_count'];
$sql="SELECT * FROM comment LIMIT $count";
$value=mysqli_query($conn,$sql);
if(mysqli_num_rows($value) >0){
  while($row=mysqli_fetch_assoc($value)){
    echo '<p>'.$row['author'].'<br><p>'.$row['msg'].'</p>';
  }
}
else{
  echo "no more comments";
}

?>
