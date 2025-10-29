<?php
include 'connect.php';
echo $db_name;
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);
if (!$link) {
        die("Connection failed: " . mysqli_connect_error())."\n";
}
else{
        echo "Connected successfully\n";
        $sql = "select * from UE where 1";
        $reqult = mysqli_query($link,$sql);
        echo mysqli_num_rows($reqult)."\n";
}
?>