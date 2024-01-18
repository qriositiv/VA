<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon.png" type="../images/icon.png">
    <title>VA Love Page</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

    <div id="container">
        <img id="logo" src="../images/mail.png" alt="Logo"> 
        <div id="textAbove">
            <h2>Почта 🥰</h2>

            <?php
            require_once('../config/connect.php');

            $sql = "SELECT * FROM feedback";
            $result = $connect->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "[<b>" . $row["feedback_id"] . "</b>] ";
                    echo "<b>Дата: </b>" . $row["feedback_date"] . "<br>";
                    echo "<b>Сообщение: </b>" . $row["feedback_message"] . "<br>";
                    echo "<b>Ответ: </b>" . $row["feedback_answer"] . "<br>";
                    echo "<hr>";
                }
            } else {
                echo "0 results";
            }

            $connect->close();
            ?>
            
            <form id="callForm" action="../index.html" method="post">
                <button id="button" class="button" type="submit">Вернуться на главную</button>
            </form>

        </div>
    </div>

</body>

</html>
