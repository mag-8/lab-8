<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Видалення даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("ShowService.php")    
    ?>

<form action="DeleteFromService.php" method="post">
        <label>ІД рядка, який видаляємо</label><input name="service_id" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>