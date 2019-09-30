<?php

?>
<!-- start: Content -->



    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">داشبورد</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#"> مخاطبین </a></li>
    </ul>


            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>نام خانوادگی</th>
                        <th>وضعیت نمایش</th>
                        <th>شماره تماس</th>
                        <th>تصویر مخاطب</th>
                        <th>بیشتر</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $obj = new contact();
                    if ($result = $obj->getList(['chid',$_SESSION['chid']])) {
                        //var_dump($_SESSION['chid']);
                        foreach ($result as $val) {
                            if (1 == 1) {
                                $status = "<span class='label label-success'>فعال</span>";
                            } else {
                                $status = "<span class='label'>غیر فعال</span>";
                            }
                            $html = <<<EOF
                        <tr>
                        <td>$val->surname</td>
                        <td class="center">
                            $status
                        </td>
                        <td class="center">$val->phone</td>
                        <td class="center">
                             <img src="$val->image" class="img-circle" style="width: 50px; text-align: center"> 
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="dashboard.php?m=contact-profile&id=$val->id">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-success" href="tel: $val->phone">
                                <i class="halflings-icon white phone"></i>
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


<!-- end: Content -->
