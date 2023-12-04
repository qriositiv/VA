<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    require_once '../config/connect.php';

    if (!$connect) {
        throw new Exception('Connection error: ' . mysqli_connect_error());
    }

    $start_time = date('Y-m-d H:i:s', strtotime('+2 hours'));

    $query = "INSERT INTO visit (visit_time) VALUES (?)";
    $stmt = mysqli_prepare($connect, $query);

    mysqli_stmt_bind_param($stmt, 's', $start_time);

    echo "Query: $query\n";
    echo "Parameter 1 (visit_time): $start_time\n";

    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        throw new Exception('Error inserting data into the database: ' . mysqli_error($connect));
    } else {
        echo 'Data inserted successfully!';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connect);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

header('Location: redirect.php');

?>
