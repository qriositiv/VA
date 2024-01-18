<?php
require_once '../config/connect.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    date_default_timezone_set('Europe/Vilnius');

    $currentDate = date('Y-m-d H:i:s');

    $sql = "INSERT INTO feedback (feedback_date, feedback_message, feedback_answer) VALUES (?, ?, '')";
    $stmt = $connect->prepare($sql);

    $stmt->bind_param('ss', $currentDate, $message);

    if ($stmt->execute()) {
        header('Location: ../happy.html');
    } else {
        header('Location: ../notFound.html');
    }

    $stmt->close();
    $connect->close();
} else {
    header('Location: ../notFound.html');
}
?>
