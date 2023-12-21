<?php
session_start();
include("./includes/connect.php")

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale-1.0">
        <title>Добавить новость</title>    
    </head>
    <body>
        <h2>Добавить новость</h2>
        <from action="./functions/process_add_news.php" method="post">
            <label for="title">Заголовок:</label>
            <input type="text" id="title" name="title" required><br>

            <label for="content">Содержание:</label>
            <textarea name="content" id="content" required></textarea><br>

            <input type="submit" value="Добавить новость">
        </from>
    </body>
</html>