<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon.png" type="../images/icon.png">
    <title>VA Love Page</title>
    <link rel="stylesheet" type="text/css" href="../style-v1.1.css">
</head>

<body>

    <div id="container">
        <img id="image" src="../images/knife.png" alt="Image">
        <div id="textAbove">
            <h2>Зая... Тут закулисье...</h2>
            <p>Тебе точно нужно знать, что здесь происходит?<p>
        </div>

        <div id="textAbove">
            <p>Ладно... здесь хранятся важные данные этого проекта...<p>
            <p>Только никому не говори об этой странице 🙏<p>
        </div>

        <div id="countdown"></div>

        <?php
        require_once '../config/connect.php';

        function displayVisits() {
            global $connect;

            $query = "SELECT visit_id, visit_time FROM visit ORDER BY visit_time DESC LIMIT 5";
            $result = mysqli_query($connect, $query);

            if ($result) {
                echo "<hr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "{$row['visit_time']}<hr>";
                }

            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }

        displayVisits();
        ?>

        <div id="textAbove">
            <p>И да, я люблю тебя! ❤️<p>
        </div>

    </div>

    <script>
        function updateTimer() {
            var targetTime = new Date();
            targetTime.setHours(6, 0, 0, 0);

            var currentTime = new Date();

            if (currentTime.getHours() >= 6) {
                targetTime.setDate(targetTime.getDate() + 1);
            }

            var timeRemaining = targetTime - currentTime;

            if (timeRemaining <= 0) {
                document.getElementById("countdown").innerHTML = "<p>До следующего тиктока осталось: 0 часов, 0 минут и 0 секунд</p>";
            } else {
                var hours = Math.floor(timeRemaining / (1000 * 60 * 60));
                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML =
                    "<p>До следующего тиктока осталось: " + hours + " часов, " + minutes + " минут и " + seconds + " секунд</p>";
            }
        }

        updateTimer();

        setInterval(updateTimer, 1000);
    </script>

</body>

</html>
