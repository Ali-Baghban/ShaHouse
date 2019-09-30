<?php
if (isset($_POST['reply'])) {
    $data = $_POST['frm'];
    if (!empty($data['to']) && !empty($data['reply'])) {
        // var_dump($data);
        send_reply($data);

    }
}
$id = null;
$disable = "disabled";
if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $disable = null;
    }
}
if ($msg = get_message($id)) ;
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="dashboard.php">خانه</a>
        <i class="icon-angle-left"></i>
    </li>
    <li><a href="#">پیام ها</a></li>
</ul>

<div class="row-fluid">

    <div class="span7">
        <h1>صندوق ورودی</h1>

        <ul class="messagesList">
            <?php
            if ($msg_list = get_message_list()) {

                foreach ($msg_list as $value):
                    //var_dump($msg_list);
                    ?>
                    <li>
                        <a href="dashboard.php?m=message&id=<?php echo $value['id']; ?>"><span
                                    class="from"> <?php echo $value['sender']; ?> </span></span><span
                                    class="title"> | <?php echo $value['title']; ?> |</span><span
                                    class="date">Today, <b>3:47 PM</b></span></a>
                    </li>
                <?php endforeach;
            } ?>
        </ul>

    </div>
    <div class="span5 noMarginLeft">

        <div class="message dark">

            <div class="header">
                <h1><?php echo $msg['title']; ?></h1>
                <div class="from"><i class="halflings-icon user"></i>
                    <b><?php echo $msg['sender']; ?></b> <?php echo $msg['email'] . " | " . $msg['phone']; ?></div>
                <div class="date"><i class="halflings-icon time"></i> Today, <b>3:47 PM</b></div>

                <div class="menu"></div>

            </div>
            <div class="content">
                <p>
                    <?php
                    echo $msg['message'];
                    ?>
                </p>
            </div>
            <div class="attachments" style="text-align: center">
                        <a class="btn btn-danger" href="modules/message-delete.php?id=<?php echo $msg['id']; ?>"  <?php echo $disable; ?>>
                            <i class="halflings-icon white trash"></i>
                        </a>
            </div>
            <form class="replyForm" method="post" action="">
                <input type="hidden" name="frm[to]" value="<?php echo $msg['email']; ?>">
                <fieldset>
                                    <textarea tabindex="3" class="input-xlarge span12" id="message" name="frm[reply]"
                                              rows="8"
                                              placeholder="برای پاسخ به پیام کلیک کنید ..."></textarea>

                    <div class="actions">

                        <button tabindex="3" type="submit" class="btn btn-success"
                                name="reply" <?php echo $disable; ?> >ارسال جواب
                        </button>

                    </div>

                </fieldset>

            </form>

        </div>

    </div>

</div>


</div><!--/.fluid-container-->