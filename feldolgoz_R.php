<?php
$conn = new mysqli('localhost', 'root', '', 'usermanagementdb');

if ($conn->connect_error){
    die("Hiba" . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nev = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO felhasznalok (felhasznalonev, email, jelszo) VALUES ('" . $nev . "' , '" . $email . "', '" . $password . "')";
}

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();




?>