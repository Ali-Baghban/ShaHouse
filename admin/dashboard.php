<?php
include_once '../app/user.php';
include_once '../app/contact.php';
include_once '../app/secure_note.php';
if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 'ok') {
        $obj = new user();
        $obj->logout();
    }
}
if (!isset($_SESSION['name'])) {
    header("Location: search.php");
}
$txt = <<<ht
<script>alert('Welcome dear {$_SESSION['name']}')</script>
ht;
//echo $txt;

?>

<!doctype html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="description" content="Bootstrap Dena Dashboard">
    <meta name="author" content="Sajad Bz">
    <meta name="keyword"
          content="Dena, Dena UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
          rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The.php5 shim, for IE6-8 support of.php5 elements -->
    <!--[if lt IE 9]>
    <script src="http:/.php5shim.googlecode.com/svn/trunk.php5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->


</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse"
               data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="dashboard.php?m=main"><span>Dena</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-left">

                    <!-- start: Notifications Dropdown -->

                    <!-- end: Notifications Dropdown -->
                    <!-- start: Message Dropdown -->


                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span> حساب کاربری</span>
                            </li>
                            <li><a href="dashboard.php?m=profile"><i class="halflings-icon user"></i> پروفایل </a></li>
                            <li><a href="dashboard.php?logout=ok"><i class="halflings-icon off"></i> خروج </a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-right" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="dashboard.php?m=main"><i class="icon-bar-chart"></i><span class="hidden-tablet"> داشبورد</span></a>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> دفترچه تلفن </span></a>
                        <ul>
                            <li><a class="submenu" href="dashboard.php?m=contact-list"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet"> مخاطبین </span></a></li>
                            <li><a class="submenu" href="dashboard.php?m=contact-add"><i class="icon-file-alt"></i><span
                                            class="hidden-tablet">افزودن مخاطب جدید</span></a></li>
                            <li><a class="submenu" href="dashboard.php?m=contact-import"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">افزودن با فایل Vcard</span></a></li>
                            <li><a class="submenu" href="dashboard.php?m=contact-export"><i
                                            class="icon-file-alt"></i><span
                                            class="hidden-tablet">گرفتن فایل پشتیبان</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-cogs"></i><span class="hidden-tablet"> تنظیمات پیشرفته</span></a>
                        <ul>
                            <li><a class="submenu" href="dashboard.php?m=profile"><i class="icon-wrench"></i><span
                                            class="hidden-tablet"> اطلاعات جامع کاربری</span></a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->

        <!-- start: Content -->
        <div id="content" class="span10">
            <?php
            if (isset($_GET['m'])) {
                if (file_exists("modules/$_GET[m].php")) {
                    include_once "modules/$_GET[m].php";
                } elseif (empty($_GET['m'])) {
                    include_once "modules/main.php";
                } else {
                    include_once "modules/main.php";
                }
            } else {
                include_once "modules/main.php";
            }
            /* @$m = $_GET['m']?$_GET['m']:'main';
             * include_once 'modules/'.$m.'.php'; */
            ?>

        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->


<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:center;float: left"> Dena Dashboard  &copy; 2018
        </span>

    </p>

</footer>
<!-- start: JavaScript-->

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.0.0.min.js"></script>

<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="js/jquery.ui.touch-punch.js"></script>

<script src="js/modernizr.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.cookie.js"></script>

<script src='js/fullcalendar.min.js'></script>

<script src='js/jquery.dataTables.min.js'></script>

<script src="js/excanvas.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>

<script src="js/jquery.chosen.min.js"></script>

<script src="js/jquery.uniform.min.js"></script>

<script src="js/jquery.cleditor.min.js"></script>

<script src="js/jquery.noty.js"></script>

<script src="js/jquery.elfinder.min.js"></script>

<script src="js/jquery.raty.min.js"></script>

<script src="js/jquery.iphone.toggle.js"></script>

<script src="js/jquery.uploadify-3.1.min.js"></script>

<script src="js/jquery.gritter.min.js"></script>

<script src="js/jquery.imagesloaded.js"></script>

<script src="js/jquery.masonry.min.js"></script>

<script src="js/jquery.knob.modified.js"></script>

<script src="js/jquery.sparkline.min.js"></script>

<script src="js/counter.js"></script>

<script src="js/retina.js"></script>

<script src="js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>

