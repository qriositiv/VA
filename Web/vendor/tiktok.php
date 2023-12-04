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

    $currentDateTime = new DateTime('now', new DateTimeZone('UTC'));
    $currentDateTime->modify('-6 hours');
    $currentDate = $currentDateTime->format('Y-m-d');

    $query = "SELECT link_embed, link_description FROM link WHERE link_date = ?";
    $stmt = mysqli_prepare($connect, $query);

    if (!$stmt) {
        throw new Exception('Error preparing statement: ' . mysqli_error($connect));
    }

    mysqli_stmt_bind_param($stmt, 's', $currentDate);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

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

    mysqli_stmt_close($stmt);
    mysqli_close($connect);

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

    ?>

    </div>

</body>

</html>
