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
                        <th>آیدی</th>
                        <th>تاریخ ثبت</th>

                        <th>تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($order) {
                        foreach ($order as $val) {
                            $html = <<<EOF
                        <tr>
                        <td>100-$val->h_id</td>
                        <td>$val->time</td>
                        
                       
                        <td class="center">
                            <a class="btn btn-success" href="index.php?c=cat&a=house&h=$val->h_id">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            
                            <a class="btn btn-danger" href="#">
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
