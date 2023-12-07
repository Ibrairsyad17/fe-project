<?php 
  $conn = mysqli_connect("localhost","root","","fe");
  if (mysqli_connect_errno()) {
    printf("Connenctio info: ", mysqli_connect_error());
  } 
?>