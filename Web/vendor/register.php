<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    require_once '../config/connect.php';

    if (!$connect) {
        header('Location: ../service.html');
        exit();
    }

    date_default_timezone_set('Europe/Vilnius');
    
    $start_time = date('Y-m-d H:i:s');

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

    header('Location: tiktok.php');

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
