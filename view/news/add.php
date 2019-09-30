<?php
    if (!isset($_SESSION['login'])){
        header("Location: search.php?c=user&a=login");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD NEWS</title>
</head>
<body>
<form action="index.php?c=news&a=add" method="post">
    <hr>
    <input type="text" name="frm[title]" placeholder="News title" required><br><br>
    <textarea name="frm[body]" placeholder="News body" required></textarea><br><br>
    <input type="submit" name="btn" value="Share it !">
    <hr>
</form>
</body>
</html>