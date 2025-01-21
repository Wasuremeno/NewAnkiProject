<?php
    include("database.php");
    
    $sql = "SELECT japanese.furigana, japanese.kanji, japanese.memorized, japanese.katakana, japanese.english, japanese.id, japanese_img.img_path FROM japanese INNER JOIN japanese_img ON japanese.id = japanese_img.id WHERE memorized = '1' OR memorized = '0' ORDER BY RAND() LIMIT 1;";
    //inner join
    // SELECT japanese.english, japanese_img.img_path FROM japanese INNER JOIN japanese_img ON japanese.id = japanese_img.id;




    
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        echo "";
    }
    


    function update_word_set(){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if ($row["memorized"] = 1 && isset($_POST['1'])){
                $unknown = mysqli("UPDATE japanese SET memorized = '0' WHERE id = ('$id')");
            }
        }
    }
            
    if(isset($_POST['unknown'])) {
        $stmt = $conn->prepare("UPDATE japanese SET memorized = '0' WHERE id = ?");
        $stmt->bind_param("i", $notid);
        $notid = $row["id"];
        $stmt->execute();
        $stmt->close();
    }
    
    else if(isset($_POST['know'])) {
        $stmt = $conn->prepare("UPDATE japanese SET memorized = '1' WHERE id = ?");
        $stmt->bind_param("i", $notid);
        $notid = $row["img_path"];
        $stmt->execute();
        $stmt->close();
    }

    else{
        echo "<script>";
        echo "console.log('u fucked db');";
        echo "</script>";
    }

    

    
   





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anki-Learning</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
    <nav>
        <div class="arrow-left">
            <a href="index.php">Back</a>
        </div>
        <form action="/AnkiProject/learning.php" class="mode">
            <label for="toggle-switch">
                <input type="radio" id="toggle-switch" style="color: white;" value="learn" name="btn" onclick="switching()" checked>
            <p class="label-text">Learn new words</p>        
            </label>
               
                <div id="animation"></div>
                
          
            
            <div style="position: relative; padding: 20px 40px; display: flex;">
                <span id="dbwordcounter">
                    <?php
                    
                    $result=mysqli_query($conn,"SELECT count(*) AS total FROM japanese WHERE memorized = '0'");
                    $data=mysqli_fetch_assoc($result);
                    echo $data['total'];
                    ?>
                </span>
                <label for="toggle">
                <input type="radio" id="toggle" style="color: white;" value="review" name="btn" onclick="switching()">
                    <p class="label-text" id="review-mode" style="color: white; text-decoration: none;">Review words</p>

                </label>
            </div>
</form>
    </nav>
    <div class="container">
        <div class="flashcard">
            <div class="japanese">
                <img  src="img/<?php echo $row["img_path"];?>.png"  onerror="this.style.display='none'">
                <div id="furigana" class="furigana"><?php  echo $row["furigana"]; ?></div>
                <div id="kanji" class="kanji"><?php  echo $row["kanji"]; ?></div>
                <div id="katakana" class="katakana"><?php  echo $row["katakana"]; ?></div>
                <div id="memorized"><?php echo $data['total']; ?> new words</div>
            </div>
            <div class="english">
                <div id="translation" class="translation"><?php  echo $row["english"]; ?></div>
                <form  method="POST" id="selecting">
                    <div id="choose" class="choose">
                        <div id="green-button">
                            <input id="green" class="click" onclick="familiar()" type="submit" name="know"
                                    class="button" value="I already know &#10; this word" require_once/>
                        </div>
                        <div  id="grey-button">
                            <input id="grey" class="click" onclick="unfamiliar()" type="submit" name="unknown"
                                    class="button" value="Start learning &#10; this word" require_once/>
                        </div>
            </div>
    </form>

            </div> 
        </div>
    </div>
    <script src="app.js"></script>
    <script>
        document.getElementById('toggle').addEventListener('change', function() {
  if (this.checked) {
    window.location.replace("http://127.0.0.1:8080/review.php");
  }
})
    </script>


</body>
</html>