<?php 

  include("./connect/conn.php");

  function execThis( $query ) {
    global $conn;
    // Exectue Query
    $result = mysqli_query( $conn, $query );
    $rows = [];
    // Fetch Data From Query
    while ( $row = mysqli_fetch_assoc( $result ) ) {
      $rows[] = $row;
    }
    return $rows;

  }

  function reg_user($entry){
    global $conn;

    $email = strtolower(stripslashes($entry["email"]));
    $username = $entry["username"];
    $password = mysqli_real_escape_string($conn, $entry["password"]);
    $confirm = mysqli_real_escape_string($conn, $entry["confirm-password"]);

    if( $password != $confirm) {
      return -4;
    }

    // Encrypt the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Check there is same username or not
    $username_checker = mysqli_query( $conn,"SELECT username FROM user WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($username_checker)) {
      return -3;
    }
    
    // Add user to database
    mysqli_query( $conn,"INSERT INTO user VALUES('', '$email', '$password', '$username') ");

    return mysqli_affected_rows($conn);
  }

?>