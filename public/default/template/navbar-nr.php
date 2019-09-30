<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span>Sha<strong>H</strong>ouse</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.php">صفحه اصلی</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">بیشتر <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($more_list as  $value): ?>
                            <?php echo "<li><a href='$value->url'>$value->title</a></li>"; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">صفحه <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($page_list as  $value): ?>
                            <?php echo "<li><a href='index.php?c=search&a=search'>جستجو</a></li>"; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php if (!isset($_SESSION['login'])){ ?>
                <li><a href="#modal-signin" class="signin" data-toggle="modal" data-target="#modal-signin">ورود به سایت</a></li>
                <li><a href="#" class="signup" data-toggle="modal" data-target="#modal-signup">ثبت نام</a></li>
                <?php }else{ ?>
                    <li><a href="index.php?c=cp&a=dashboard" class="signup" data-toggle="modal">ناحیه کاربری</a></li>
                <?php } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>