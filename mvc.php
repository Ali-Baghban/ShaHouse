<?php

if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    if (!file_exists("controller/$data[c].php") && !file_exists("model/$data[m].php")
        && !file_exists("view/$data[v]/$data[v].php")) {
        $file = fopen("controller/c$data[c].php", 'w');
        $code = <<<EOF
<?php
include_once "model/m$data[m].php";
//php code

//
include_once "view/$data[v]/$data[v].php";
?>
EOF;
        fwrite($file, $code);
        fclose($file);
        $file = fopen("model/m$data[m].php", 'w');
        $code = <<<EOF
<?php
class $data[m] {

}
?>
EOF;
        fwrite($file, $code);
        fclose($file);
        mkdir("view/$data[v]");
        $file = fopen("view/$data[v]/$action.php", 'w');
        $code = <<<EOF
$data[v] cat
EOF;
        fwrite($file, $code);
        fclose($file);
        fopen("view/$data[v]/search.php", 'w');
echo "Successfully done !";

    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><- MVC Panel -></title>
</head>
<body>
<form action="" method="post">
    <hr>
    <input type="text" name="frm[c]" placeholder="Controller Name" required><br><br>
    <input type="text" name="frm[m]" placeholder="Model Name" required><br><br>
    <input type="text" name="frm[v]" placeholder="view Name" required><br><br>
    <input type="submit" name="btn" value="Make it !">
    <hr>
</form>
</body>
</html>
