<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:proeycto2020.database.windows.net,1433; Database = autoscun", "cpaez", "Christian2020*");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "cpaez", "pwd" => "Cristian2020*", "Database" => "autoscun", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:proeycto2020.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
