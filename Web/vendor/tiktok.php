<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VA Love Page</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

    <div id="container">

<?php

try {
    require_once '../config/connect.php';

    if (!$connect) {
        throw new Exception('Connection error: ' . mysqli_connect_error());
    }

    $currentDate = date('Y-m-d');

    $query = "SELECT link FROM link WHERE link_date = ?";





    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $link_embed = $row['link_embed'];
        $link_description = $row['link_description'];

        echo $link_embed;
        echo "<p>$link_description</p>";
    } else {
        header('Location: ../notFound.html');
        exit();
    }

        mysqli_close($connect);

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>

    </div>

</body>

</html>
