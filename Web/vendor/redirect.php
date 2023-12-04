<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    require_once '../config/connect.php';

    if (!$connect) {
        throw new Exception('Connection error: ' . mysqli_connect_error());
    }

    $currentDate = date('Y-m-d');

    $query = "SELECT link FROM link WHERE link_date = ?";
    $stmt = mysqli_prepare($connect, $query);

    mysqli_stmt_bind_param($stmt, 's', $currentDate);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $link);

    mysqli_stmt_fetch($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($connect);

    if ($link) {
        header("Location: $link");
    } else {
        header('Location: ../notFound.html');
    }

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

header('Location: ../service.html');

?>
