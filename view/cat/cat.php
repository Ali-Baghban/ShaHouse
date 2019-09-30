<!-- begin:header -->
<div id="header" class="heading" style="background-image: url(public/default/image/img01.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="page-title">
                    <h2>طبقه بندی : <span><?php echo $sorted; ?></span></h2>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end:header -->

<!-- begin:content -->
<div id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-9 col-md-push-3">
                <!-- begin:sorting -->
                <div class="row sort">
                    <div class="col-md-4 col-sm-4 col-xs-3">
                        <a href="index.php?c=cat&a=cat" class="btn btn-primary"><i class="fa fa-th"></i></a>
                        <a href="index.php?c=cat&a=cat_list" class="btn btn-default"><i class="fa fa-list"></i></a>
                    </div>

                </div>
                <!-- end:sorting -->

                <!-- begin:product -->
                <div class="row container-realestate">
                    <?php foreach ($category as $item):
                    $image = $obj->get_image($item->id);
                    $address = $obj->get_house_address($item->id);
                    //var_dump($image);
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">

                                <?php //var_dump()?>
                                <img src="<?php echo $image->url; ?>" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4><?php echo $sorted; ?></h4>
                                    <span><?php echo $item->price; ?></span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3>
                                    <a href="<?php echo "index.php?c=cat&a=house&h=$item->id"; ?>"><?php echo $sorted." | ".$address->city; ?></a> <small><?php echo $address->details; ?></small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- break -->

                    <!-- break -->
                </div>
                <!-- end:product -->

                <!-- begin:pagination

                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                -->

                <!-- end:pagination -->
            </div>
            <!-- end:article -->
            <!-- Ali Baghban -->
            <!-- begin:sidebar -->
            <div class="col-md-3 col-md-pull-9 sidebar">

                <!--

                 <div class="widget widget-white">
                    <div class="widget-header">
                        <h3>جستجوی پیشرفته</h3>
                    </div>
                    <form role="form" class="advance-search">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option1"> برای اجاره
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option2"> برای فروش
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select class="form-control">
                                <option>میامی</option>
                                <option>دورال</option>
                                <option>هاوانای کوچک</option>
                                <option>هنگ کنگ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">نوع ملک</label>
                            <select class="form-control">
                                <option>دفتر</option>
                                <option>فروشگاه</option>
                                <option>ویلا</option>
                                <option>اپارتمان</option>
                                <option>خانه های تک خانوار</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="beds">تخت</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="baths">حمام ها</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="min-price">حداقل هزینه </label>
                            <select class="form-control">
                                <option>$1,000</option>
                                <option>$5,000</option>
                                <option>$10,000</option>
                                <option>$20,000</option>
                                <option>$50,000</option>
                                <option>$350,000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="max-price">حداکثر قیمت</label>
                            <select class="form-control">
                                <option>$9,000</option>
                                <option>$19,000</option>
                                <option>$40,000</option>
                                <option>$100,000</option>
                                <option>$800,000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="min-area">حداقل مساحت</label>
                            <input type="text" class="form-control" placeholder="Min Area">
                        </div>
                        <div class="form-group">
                            <label for="max-area">حداکثر مسا حت</label>
                            <input type="text" class="form-control" placeholder="Max Area">
                        </div>
                        <input type="submit" name="submit" value="Search" class="btn btn-primary btn-block">
                    </form>
                </div>
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
            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</div>
<!-- end:content -->