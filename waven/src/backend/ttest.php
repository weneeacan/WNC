<?php

include "config.php";

$request = "";
if(isset($_POST['request'])){
  $request = $_POST['request'];
}

// Fetch all records
if($request == 'fetchall'){

  $query = "SELECT * FROM users";

  $result = pg_query($con, $query);

  $response = array();

  while ($row = pg_fetch_assoc($result) ){

     $id = $row['id'];
     $username = $row['username'];
     $fullname = $row['fullname'];
     $email = $row['email'];

     $response[] = array(
        "id" => $id,
        "username" => $username,
        "fullname" => $fullname,
        "email" => $email,
     );
  }

  echo json_encode($response);
  die;
}

// Fetch record by id
if($request == 'fetchbyid'){

  $userid = 0;
  if(isset($_POST['userid']) && is_numeric($_POST['userid']) ){
    $userid = $_POST['userid'];
  }

  $query = "SELECT * FROM users WHERE id=".$userid;
  $result = pg_query($con, $query);

  $response = array();
  if (pg_numrows($result) > 0) {

    $row = pg_fetch_assoc($result);

    $id = $row['id'];
    $username = $row['username'];
    $fullname = $row['fullname'];
    $email = $row['email'];

    $response[] = array(
      "id" => $id,
      "username" => $username,
      "fullname" => $fullname,
      "email" => $email,
    );
  }

  echo json_encode($response);
  die;
}