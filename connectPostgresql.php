<?php
$host = "localhost";
$port = "5432";
$dbname = "mrmsystem";
$user = "postgres";
$password = "root";

$koneksi = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection_status</title>
</head>
<body>
    <h1> Connest PostgreSQL</h1>
    <hr>
<?php

if ($koneksi){
    echo "<h3> Terhubung</h3>";
}else{
    echo "<h3> tidak Terhubung</h3>";
}
?>

</body>
</html>