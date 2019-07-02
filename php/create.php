<?php
include "connect.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$skill = $_POST['skill'];

if ($fname == "" || $lname == "" || $skill == ""){
    echo 0;
    exit;
}

$insert = $pdo -> prepare("INSERT INTO user_info (fname, lname, skill)
                         VALUES ('$fname', '$lname', '$skill')");
$exe = $insert -> execute();

echo $exe;

?>