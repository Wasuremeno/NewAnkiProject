<?php 
include("database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anki</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
    <nav></nav>
    <div class="container">
    <div class="category-section">
        <div class="option">
            <a href="learnign.php">Learn new words</a>
        </div>
        <div class="option">
            <a href="review.php ">Review words</a>
        </div>
        <div class="option">
            <a href="mixedMod.php">Mixed mod</a>
        </div>
        
    </div>
    </div>
    <div class="container">
    <div class="weekdays">
        <?php $currentDate = date('l'); 
        switch ($currentDate) {
            case "Monday":
                echo "Monday";
                break;
            case "Tuesday":
                echo "Tuesday";
                break;
            case "Wednesday":
                echo "Wednesday";
                break;
            case "Thursday":
                echo "Thursday";
                break;
            case "Friday":
                echo "Friday";
                break;
            case "Saturday":
                echo "Saturday";
                break;
            case "Sunday":
                echo "Sunday";
                break;
        }
        ?>

<div class="Sunday weekday">S</div>
<div class="Monday weekday">M</div>
<div class="Tuesday weekday">T</div>
<div class="Wednesday weekday">W</div>
<div class="Thursday weekday">T</div>
<div class="Friday weekday">F</div>
<div class="Saturday weekday">S</div>
        </div>
     </div>
</body>
</html>
