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

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
    echo $row['name'] . "," . $row['email']."<br>";
}


?>