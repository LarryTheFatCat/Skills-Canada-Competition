<?php 
$connection = mysqli_connect("localhost","root","");

if (!$connection){
    die("Could Not Connect". mysqli_error($connection));
} else{
    echo "Connection OK. <br>";
}

mysqli_select_db($connection, "emailsubscription");

// table name == email_info
// column name == email_contents

// table name variable
$EMAIL = mysqli_real_escape_string($connection, $_POST['email']);
$insertion = "INSERT INTO email_info(email_contents) VALUES ('$EMAIL')";

if(!mysqli_query($connection, $insertion)) {
    die("could not send data". mysqli_error($connection));
} else {
    echo "Successfully subscribed :)";
}
header("Location: index.html", true, 301);
?>
