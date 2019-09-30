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
    <title>EDIT NEWS <?php echo $news->title; ?></title>
</head>
<body>
<form action="index.php?c=news&a=edit&id=<?php echo $news->id; ?>" method="post">
    <hr>
    <input type="text" value="<?php echo $news->title; ?>" name="frm[title]" placeholder="<?php echo $news->title; ?>" required><br><br>
    <textarea name="frm[body]" placeholder="" required><?php echo $news->body; ?></textarea><br><br>
    <input type="submit" name="btn" value="Update it !">
    <hr>
</form>
</body>
</html>