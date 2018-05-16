<?php include 'data.php';?>


<!doctype html>
<html>
<head>
<title>ajax load data from database</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
    var count=2;
   $("button").click(function(){
    count+=2;
      $("#comment").load("database.php",{
        c_count:count
      })
   });
});
</script>
</head>
<body>
<div id="comment">
<?php
$sql="SELECT * FROM comment LIMIT 2";
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


</div>
<button>add more comments</button>
</body>
</html>
