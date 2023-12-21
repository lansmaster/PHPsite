<?php
include("./includes/connect.php");

$title = $_POST['title'];
$context = $_POST['content'];

$sql = "INSERT INTO news (title, content) VALUES ('$title', '$context')";

if($conn->query($sql) === TRUE){
    echo "Новость успешно добавлена";
}else{
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>