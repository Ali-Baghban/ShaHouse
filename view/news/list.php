<?php
foreach ($newslist as $item):?>

    <?php echo "<li> $item->title <a href='search.php?c=news&a=edit&id=$item->id'>edit</a>
    <a href='search.php?c=news&a=delete&id=$item->id'>delete</a></li>"; ?>
<?php endforeach; ?>