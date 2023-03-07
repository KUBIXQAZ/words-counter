<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Words Counter</title>
    <link href="styles.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <form method="post">
        <textarea name="text" id="textarea"></textarea>
        <input type="submit" onclick="save()" name="subm" value="check">
    </form>
    <p id="output">
        <?php
        if (isset($_POST['subm'])) {
            $text = $_POST['text'];
            $word_count = str_word_count($text);
            $letters = strlen($text) - substr_count($text, " ");
            echo "There is: " . $word_count . " words and: " . $letters . " letters.";
            echo "<script>load();</script>";
        }
        ?>
    </p>
</body>
</html>