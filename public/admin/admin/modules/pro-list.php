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
        <li><a href="#">لیست محصولات</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>لیست محصولات</h2>
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
                        <th>وضعیت نمایش</th>
                        <th>سرلیست</th>
                        <th>تنظیمات</th>
                        <th>تصویر</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($productlist = get_pro_list_admin()) {
                        //var_dump($productlist);
                        foreach ($productlist as $val) {
                            if ($val['status'] == 1) {
                                $status = "<span class='label label-success'>فعال</span>";
                            } else {
                                $status = "<span class='label'>غیر فعال</span>";
                            }
                            $html = <<<EOF
                        <tr>
                        <td>$val[title]</td>
                        <td class="center">
                            $status
                        </td>
                        <td class="center">$val[parent]</td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="pro-edit&id=$val[id]">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="modules/pro-delete.php?id=$val[id]">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                        <td class="center">
                             <img src="$val[img]" class="img-circle" style="width: 50px; text-align: center"> 
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
