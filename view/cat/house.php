<!-- begin:header -->
<div id="header" class="heading" style="background-image: url(public/default/image/img01.jpg);">
</div>
<!-- end:header -->

<!-- begin:content -->
<div id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-9 col-md-push-3">
                <div class="row">
                    <div class="col-md-12 single-post">
                        <ul id="myTab" class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#detail" data-toggle="tab"><i class="fa fa-university"></i> مشخصات ملک</a></li>
                            <li><a href="#location" data-toggle="tab"><i class="fa fa-paper-plane-o"></i>محل</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="detail">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>زندگی کن ...</h2>
                                        <div id="slider-property" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">

                                                <?php foreach ($gallery as $item): ?>
                                                <li data-target="#slider-property" data-slide-to="0" class="">
                                                    <img src="<?php echo $item->url; ?>" alt="">
                                                </li>
                                                <?php endforeach; ?>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php
                                                $count = 0;
                                                foreach ($gallery as $item):
                                                    if($count == 0){
                                                    ?>
                                                <div class="item active">
                                                    <img src="<?php echo $item->url; ?>" alt="">
                                                </div>
                                                <?php }else{?>
                                                        <div class="item">
                                                            <img src="<?php echo $item->url; ?>" alt="">
                                                        </div>
                                                <?php } $count++; endforeach; ?>
                                            </div>
                                            <a class="left carousel-control" href="#slider-property" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                            <a class="right carousel-control" href="#slider-property" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                        </div>
                                        <h3>بررسی اجمالی ملک</h3>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td width="20%"><strong>ID</strong></td>
                                                <td><?php echo "#".$information->city."-100".$h_id ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>قیمت</strong></td>
                                                <td><?php echo $information->price; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>نوع</strong></td>
                                                <td>اجاره</td>
                                            </tr>
                                            <tr>
                                                <td><strong>نوع</strong></td>
                                                <td>اجاره</td>
                                            </tr>
                                            <tr>
                                                <td><strong>مالک</strong></td>
                                                <td><?php echo $householder_info->name; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>محل</strong></td>
                                                <td><?php echo $information->details; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>حمام و سرویس بهداشتی</strong></td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td><strong>اتاق های خواب</strong></td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td><strong>منطقه</strong></td>
                                                <td>-m<sup>2</sup> </td>
                                            </tr>
                                        </table>
                                                <h3>توضیحات ملک</h3>
                                                <p><?php echo $information->options; ?></p>
                                    </div>
                                </div>


                            </div>
                            <!-- break -->
                            <div class="tab-pane fade" id="location">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="map-property"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>تماس با ما </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="team-container team-dark">
                                            <div class="team-image">
                                                <img src="<?php echo $householder_info->url; ?>" alt="the team - mikha realestate theme">
                                            </div>
                                            <div class="team-description">
                                                <h3><?php echo $householder_info->name; ?></h3>
                                                <p><i class="fa fa-phone"></i> --------------------------<br>
                                                    <i class="fa fa-mobile"></i> ------------------------<br>
                                                    <i class="fa fa-print"></i> ---------------------------</p>
                                                <p>*********************************************************************
                                                *********************************************</p>
                                                <div class="team-social">
                                                    <span><a href="#" title="Twitter" rel="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a></span>
                                                    <span><a href="#" title="Facebook" rel="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a></span>
                                                    <span><a href="#" title="Google Plus" rel="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a></span>
                                                    <span><a href="#" title="Email" rel="tooltip" data-placement="top"><i class="fa fa-envelope"></i></a></span>
                                                    <span><a href="#" title="LinkedIn" rel="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label for="name">نام</label>
                                                <input type="text" name="frm[name]" class="form-control input-lg" placeholder="نام : ">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">ایمیل</label>
                                                <input type="email" name="frm[email] "class="form-control input-lg" placeholder="ایمیل : ">
                                            </div>
                                            <div class="form-group">
                                                <label for="telp">تلفن.</label>
                                                <input type="text" name="frm[phone]" class="form-control input-lg" placeholder="تلفن : ">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">پیام</label>
                                                <textarea class="form-control input-lg" name="frm[message]" rows="7" placeholder="پیام : "></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="ارسال پیام" class="btn btn-primary btn-lg">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:article -->
            <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
            <!-- begin:sidebar -->
            <div class="col-md-3 col-md-pull-9 sidebar">
                <div class="widget-white favorite">
                    <a href="index.php?c=cp&a=order-add&h_id=<?php echo $h_id; ?>"><i class="fa fa-heart"></i> اضافه نمودن به سفارش ها</a>
                </div>
                <!--
                 <div class="widget widget-sidebar widget-white">
                    <div class="widget-header">
                        <h3>آخرین املاک</h3>
                    </div>
                    <ul>
                        <li><a href="#">ویلا های لوکس</a></li>
                        <li><a href="#">زمین در پارک مرکزی</a></li>
                        <li><a href="#">زندگی شهری</a></li>
                        <li><a href="#">دفتر لوکس</a></li>
                        <li><a href="">ویلا های لوکس در رگو پارک</a></li>
                    </ul>
                </div>
                <!-- break -->
                 -->

                <div class="widget widget-sidebar widget-white">
                    <div class="widget-header">
                        <h3>نوع ملک</h3>
                    </div>
                    <ul class="list-check">
                        <li><a href="index.php?c=cat&a=cat&t=office">دفتر</a>&nbsp</li>
                        <li><a href="index.php?c=cat&a=cat&t=store">فروشگاه</a>&nbsp</li>
                        <li><a href="index.php?c=cat&a=cat&t=vila">ویلا</a>&nbsp</li>
                        <li><a href="index.php?c=cat&a=cat">اپارتمان</a>&nbsp</li>
                        <li><a href="index.php?c=cat&a=cat&t=co">خانه های تک خانوار</a>&nbsp</li>
                    </ul>
                </div>
                <!-- break -->

                <!--
                 <div class="widget widget-sidebar widget-white">
                    <div class="widget-header">
                        <h3>عوامل بالا</h3>
                    </div>
                    <ul>
                        <li><a href="#">ایمان مدائنی</a></li>
                        <li><a href="#">سجاد باقرزاده</a></li>
                        <li><a href="#">ایمان مدائنی</a></li>
                        <li><a href="#">سجاد باقرزاده</a></li>
                    </ul>
                </div>
                 -->
            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</div>
<!-- end:content -->
