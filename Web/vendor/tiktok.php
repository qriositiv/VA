<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon.png" type="../images/icon.png">
    <title>VA Love Page</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        form {
            margin-top: 0px;
        }

        #message {
            width: 100%;
            margin-top: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 12px;
            box-sizing: border-box;
            outline: none;
            font-size: 16px;
            transition: border-color 0.3s;
            font-family: 'Comic Sans MS', cursive;
        }

        #message:focus {
            border-color: #ff4d4d;
        }

        .button-container {
            margin-top: 0px;
        }
    </style>
</head>

<body>

    <div id="container">
        <div id="videoContainer">
            <?php
            try {
                require_once '../config/connect.php';

                if (!$connect) {
                    header('Location: ../notFound.html');
                    exit();
                }

                date_default_timezone_set('Europe/Vilnius');

                $currentDateTime = new DateTime('now', new DateTimeZone('Europe/Vilnius'));

                $currentDateTime->setTime(6, 0, 0);

                $currentDate = $currentDateTime->format('Y-m-d');

                $query = "SELECT link_embed, link_description FROM link WHERE link_date = ?";
                $stmt = mysqli_prepare($connect, $query);

                if (!$stmt) {
                    header('Location: ../notFound.html');
                    exit();
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

            <hr>
        </div>

        <form action="processForm.php" method="post">
            <label for="message">Написать сообщение парню:</label>
            <input type="text" id="message" name="message" required autocomplete="off">

            <div class="button-container">
                <button type="submit" class="button" id="button">Отправить</button>
            </div>
        </form>

        <p><i>2024 💫 VA-love page </i></p>
    </div>

</body>

</html>
