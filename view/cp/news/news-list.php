<?php

?>
<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">داشبورد</a>
            <i class="icon-angle-left"></i>
        </li>
        <li><a href="#">لیست منوها</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>لیست منوها</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>متن</th>
                        <th>اهمیت</th>
                        <th>ترتیب</th>
                        <th>تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($newslist) {
                        foreach ($newslist as $val) {
                            if ($val->importance == 1) {
                                $importance = "<span class='label label-success'>مهم</span>";
                            } else {
                                $importance = "<span class='label'>غیرمهم</span>";
                            }
                            $html = <<<EOF
                        <tr>
                        <td>$val->title</td>
                        <td>$val->body</td>
                        <td class="center">
                            $importance
                        </td>
                        <td class="center">$val->sort</td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="index.php?c=cp&a=news-edit&id=$val->id">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="index.php?c=cp&a=news-delete&id=$val->id">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>

EOF;
                            echo $html;
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

</div><!--/.fluid-container-->

<!-- end: Content -->
