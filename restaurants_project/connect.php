<?php

$host = "localhost";
$port = "5432";
$dbname = "restaurants_db";
$user = "user_name";
$password = "password";

// PostgreSQL connection
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}

$name   = $_POST['n'];
$age    = $_POST['a'];
$dob    = $_POST['d'];
$email  = $_POST['e'];
$pass   = $_POST['p'];
$gender = $_POST['g'];
$menu   = $_POST['m'];

$sql = "INSERT INTO food (n, a, d, e, p, g, m)
        VALUES ($1, $2, $3, $4, $5, $6, $7)";

$result = pg_query_params($conn, $sql, array(
    $name,
    $age,
    $dob,
    $email,
    $pass,
    $gender,
    $menu
));

if ($result) {
    echo "Registration Successful!";
} else {
    echo "Error: " . pg_last_error($conn);
}

pg_close($conn);

?>
