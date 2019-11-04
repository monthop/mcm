<html>
<head>
<title>Create Database</title>
</head>
<body>
</body>

<?php
include("connectArduinoMc.php");

echo "1. create database ","</br>";

// Create database
$sql = "CREATE DATABASE mcmonitoring";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully","</br>";
} else {
    echo "Error creating database: " . $conn->error;
	echo "</br>";
}


echo "2. create table planData ","</br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE  plandata (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
timestamp TIMESTAMP,
McNo VARCHAR(15) NOT NULL,
LotNo VARCHAR(15) NOT NULL,
ItemNo VARCHAR(30) NOT NULL,
PlannedQty FLOAT(8,2) NOT NULL,
Status TINYINT NOT NULL,
Sequence INT(6) NOT NULL,
StartDateTime DATETIME,
RunDateTime DATETIME,
BreakdownDateTime DATETIME,
StopDateTime DATETIME,
ProducedQty DOUBLE(8,2),
AQty FLOAT(8,2) NOT NULL,
AvTime FLOAT (6,2),
CycleTime FLOAT (6,2),
TotalDefect FLOAT(8,2) NOT NULL
);";

if (mysqli_query($conn, $sql)) {
    echo "Table planData created successfully","</br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
	echo "</br>";
}

echo "2.1. insert mcno 1 ","</br>";
$sql = "INSERT INTO `mcmonitoring`.`plandata` (
`ID`, `McNo`) VALUES (
NULL, 'MC-001');";
if (mysqli_query($conn, $sql)) {
    echo "insert McNo 1","</br>";
} else {
    echo "Error creating user: " . mysqli_error($conn);
	echo "</br>";
}

$sql = "INSERT INTO `mcmonitoring`.`plandata` (
`ID`, `McNo`) VALUES (
NULL, 'MC-002');";
if (mysqli_query($conn, $sql)) {
    echo "insert McNo 2","</br>";
} else {
    echo "Error creating user: " . mysqli_error($conn);
	echo "</br>";
}

$sql = "INSERT INTO `mcmonitoring`.`plandata` (
`ID`, `McNo`) VALUES (
NULL, 'MC-003');";
if (mysqli_query($conn, $sql)) {
    echo "insert McNo 3","</br>";
} else {
    echo "Error creating user: " . mysqli_error($conn);
	echo "</br>";
}

echo "3. create table Production Data ","</br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE  productiondata (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
timestamp TIMESTAMP,
LotNo VARCHAR(15) NOT NULL,
ItemNo VARCHAR(15) NOT NULL,
McNo VARCHAR(15) NOT NULL,
StartTime TINYINT  NOT NULL,
RunTime TINYINT  NOT NULL,
BreakTime TINYINT  NOT NULL,
StopTime TINYINT  NOT NULL,
TotalQty FLOAT(8,2)  NOT NULL,
TotalDefect FLOAT(8,2)  NOT NULL,
Qty FLOAT(8,2) NOT NULL
);";

if (mysqli_query($conn, $sql)) {
    echo "Table productiondata created successfully","</br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
	echo "</br>";
}

echo "4. create table update Data ","</br>";
// sql to create table
$sql = "CREATE TABLE  updatedata (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
timestamp TIMESTAMP,
LotNo VARCHAR(15) NOT NULL,
ItemNo VARCHAR(15) NOT NULL,
McNo VARCHAR(15) NOT NULL,
StartTime TINYINT  NOT NULL,
RunTime TINYINT  NOT NULL,
BreakTime TINYINT  NOT NULL,
StopTime TINYINT  NOT NULL,
TotalQty FLOAT(8,2)  NOT NULL,
TotalDefect FLOAT(8,2)  NOT NULL,
Qty FLOAT(8,2) NOT NULL
);";

if (mysqli_query($conn, $sql)) {
    echo "Table updatedata created successfully","</br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
	echo "</br>";
}

echo "4.1. insert mcno 1 ","</br>";
$sql = "INSERT INTO `mcmonitoring`.`updatedata` (
`ID`, `McNo`) VALUES (
NULL, 'MC-001');";
if (mysqli_query($conn, $sql)) {
    echo "insert McNo 1","</br>";
} else {
    echo "Error creating user: " . mysqli_error($conn);
	echo "</br>";
}

echo "5. create table members ","</br>";
// sql to create table
$sql = "CREATE TABLE  members (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Username VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL,
Name VARCHAR(50) NOT NULL,
Status VARCHAR(10) NOT NULL
);";

if (mysqli_query($conn, $sql)) {
    echo "Table Members created successfully","</br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
	echo "</br>";
}

echo "5. insert member admin ","</br>";
$sql = "INSERT INTO `mcmonitoring`.`members` (
`ID`, `Username`, `email`,`Password`, `Name`, `Status`) VALUES (
NULL, 'admin', 'admin@gmail.com', 'admin', 'admin','admin');";
if (mysqli_query($conn, $sql)) {
    echo "create user admin","</br>";
} else {
    echo "Error creating user: " . mysqli_error($conn);
	echo "</br>";
}

$conn->close();
?>

</html>
