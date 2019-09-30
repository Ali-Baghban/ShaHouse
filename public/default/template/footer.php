<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>املاک و مستغلات ثبت شده</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Apartments</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Bungalows</a></li>
                        <li><a href="#">Serviced Residence</a></li>
                        <li><a href="#">Villa</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>لینک های مرتبط</h3>
                    <ul class="list-unstyled">
                        <li><a href="http://shahroodut.ir">Shahroodut</a></li>
                        <li><a href="https://shahroodut.ac.ir">Shahrood University of Technology</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>ویژگی ها</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">How To</a></li>
                        <li><a href="#">Market Trend</a></li>
                        <li><a href="#">Android App</a></li>
                        <li><a href="#">IOS App</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h2>Shahroodut.ir</h2>
                    <address>
                        <strong>موضوع املاک و مستغلات.</strong><br>
                        Ali Baghban <br>
                        <br>
                        Telp. : +98-9335138159<br>
                        Email : Ali.bgn@hotmail.com
                    </address>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- break -->

        <!-- begin:copyleft -->
        <div class="row">
            <div class="col-md-12 copyleft">
                <p>کلیه حقوق مادی و معنوی برای مجموعه Shahroodut محفوظ می باشد . هر گونه کپی برداری از محتوا با ذکر منبع مجاز می باشد.</p>

                <a href="#top" class="btn btn-primary scroltop"><i class="fa fa-angle-up"></i></a>
                <ul class="list-inline social-links">
                    <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icon-gplus" rel="tooltip" title="" data-placement="bottom" data-original-title="Gplus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end:copyleft -->
        <!-- Ali Baghban -->
    </div>
</div>
<!-- end:footer -->

<!-- begin:modal-signin -->
<div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ورود</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="index.php?c=user&a=login">
                    <div class="form-group">
                        <label for="emailAddress">نام کاربری</label>
                        <input type="text" name="frm[username]" class="form-control input-lg" placeholder="نام کاربری">
                    </div>
                    <div class="form-group">
                        <label for="password">کلمه عبور</label>
                        <input type="password" name="frm[password]" class="form-control input-lg" placeholder="کلمه عبور">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="forget"> مرا بخاطر بسپار
                        </label>
                    </div>
                    <div class="modal-footer">
                        <p>آیا ثبت نام نکرده اید ? <a href="#modal-signup"  data-toggle="modal" data-target="#modal-signup">ثبت نام</a></p>
                        <input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="ورود به سایت">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end:modal-signin -->

<!-- begin:modal-signup -->
<div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="modal-signup" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ثبت نام</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="index.php?c=user&a=register" method="post" >
                    <div class="form-group">
                        <input name="frm[email]" type="email" class="form-control input-lg" placeholder="ایمیل" required>
                    </div>
                    <div class="form-group">
                        <input name="frm[password]" type="password" class="form-control input-lg" placeholder="کلمه عبور" required>
                    </div>
                    <div class="form-group">
                        <input name="frm[username]" type="text" class="form-control input-lg" placeholder="نام کاربری" required>
                    </div>
                    <div class="form-group">
                        <input name="frm[phone]" type="text" class="form-control input-lg" placeholder="شماره همراه" required>
                    </div>
                    <div class="form-group">
                        <input name="frm[id_number]" type="text" class="form-control input-lg" placeholder="کد ملی" required>
                    </div>
                    <div class="form-group">
                        <input name="frm[name]" type="text" class="form-control input-lg" placeholder="نام حقیقی" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="frm[type]" value="customer" required> عادی<br>
                            <input type="radio" name="frm[type]" value="householder"> مالک<br>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="frm[agree]" required> آیا با قوانین <a href="#">سایت ما موافق هستید؟</a>
                        </label>
                    </div>
                    <div class="modal-footer">
                        <p>آیا ثبت نام کرده اید؟ <a href="#modal-signin" data-toggle="modal" data-target="#modal-signin">ورود به سایت.</a></p>
                        <input type="submit" name="register" class="btn btn-primary btn-block btn-lg" value="ثبت نام">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end:modal-signup -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="public/default/js/jquery.js"></script>
<script src="public/default/js/bootstrap.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="public/default/js/gmap3.min.js"></script>
<script src="public/default/js/jquery.easing.js"></script>
<script src="public/default/js/jquery.jcarousel.min.js"></script>
<script src="public/default/js/imagesloaded.pkgd.min.js"></script>
<script src="public/default/js/masonry.pkgd.min.js"></script>
<script src="public/default/js/jquery.backstretch.js"></script>
<script src="public/default/js/jquery.nicescroll.min.js"></script>
<script src="public/default/js/script.js"></script>
</body>
</html>