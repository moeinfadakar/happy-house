<?php 

include "database.php";

$esm = $_POST["name"];
$matn = $_POST["text"];

mysqli_query($connection,"INSERT INTO messages(name, text) VALUES( '$esm' , '$matn' )");
echo "ثبت شد داداش ";

header("Location: index.php");

?>