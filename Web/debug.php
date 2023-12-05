<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VA Love Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div id="container">
        <img id="image" src="images/knife.png" alt="Image"> 
        <div id="textAbove">
            <h2>Зая... Тут закулисье...</h2>
            <p>Тебе точно нужно знать, что здесь происходит?<p>
        </div>

        <div id="textAbove">
            <p>Ладно... здесь храняться важные данные этого проекта...<p>
            <p>Только никому не говори, об этой странице 🙏<p>
        </div>

        <div>
        <?php

        try {
            $targetTime = strtotime(date('Y-m-d') . ' 06:00:00');
            $currentTime = time();

            $timeRemaining = $targetTime - $currentTime;

            $hours = floor($timeRemaining / 3600);
            $minutes = floor(($timeRemaining % 3600) / 60);
            $seconds = $timeRemaining % 60;

            echo "<p>До следующего тиктока осталось: $hours часов, $minutes минут и $seconds секунд</p>";

        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        ?>
        </div>

    </div>

</body>

</html>
