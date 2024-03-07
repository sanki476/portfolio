<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$con = mysqli_connect($server, $username, $password, $dbname);
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

$sql = "INSERT INTO message (Name, Email, Subject, Message, Date) VALUES ( '$Name', '$Email', '$Subject', '$Message',  current_timestamp());";
if ($con->query($sql) == true) {
    echo "Thanks for Contacting Us....!";
} else {
    echo " Error: $sql <br> $con->error";
}
$con->close();
?>