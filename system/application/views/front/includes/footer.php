<!-- foter-->
<div class="menufoter">
    <div class="sreenmenufoter" style="width:1030px; margin:0px auto; height:35px;">
        <div class="gt">
            <a href="<?=$base_url?>" title="Sàn nhà đất">
                <p>Trang chủ</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>gioi-thieu.html" title="Giới thiệu">
                <p>Giới thiệu</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>site-map.html">
                <p>Sơ đồ website</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>lien-he.html" title="Liên hệ - Góp ý">
                <p>Liên hệ - Góp ý</p>
            </a>
        </div>
    </div>
</div>
<div class="footer-items">
    <div class="footer-item address">
        <a href="<?php echo $base_url ?>"><img src="<?php echo $base_url ?>images/assets/logo.jpg"></a>
        <p><b>ĐC</b>: 34/1/4 Hoàng Hoa Thám, P.2 <br> Thành Phố Vũng Tàu, Bà Rịa Vũng Tàu</p>
        <p><b>Email</b>: batdongsanvungtau@gmail.com</p>
        <p><b>Website</b>: http://batdongsanvungtau.com.vn</p>
    </div>
    <div class="footer-item email-signup">
        <h5>Đăng ký nhận tin</h5>
        <p>Đăng ký thư thông báo của chúng tôi để cập nhật thông tin về các dự án của tập đoàn Vingroup</p>
        <form id="email-signup" action="#" method="post">
            <div class="main-form-email-signup">
                <input type="text" name="email" placeholder="Email của bạn"/>
                <input class="submit-email-signup" type="button" value="Đồng ý"/>
                <p class="notice-msg">&nbsp;</p>
            </div>
        </form>
    </div>
    <div class="footer-item social">
        <h5>Liên kết với chúng tôi</h5>
        <div class="social-main">
            <a href=""><img src="<?php echo $base_url ?>images/assets/icon-facebook.png"></a>
            <a href=""><img src="<?php echo $base_url ?>images/assets/icon-googleplus.png"></a>
            <a href=""><img src="<?php echo $base_url ?>images/assets/icon-youtube.png"></a>
            <a href=""><img src="<?php echo $base_url ?>images/assets/icon-twiter.png"></a>
            <a href=""><img src="<?php echo $base_url ?>images/assets/icon-vnexpress.png"></a>
        </div>
    </div>
    <div class="footer-item static">
        <h5>Thống kê truy cập</h5>
        <p>Đang online: <?php echo $this->hit_counter->getUsersOnlineCount();?></p>
        <p>Đã online: <?php echo $this->hit_counter->getTotalVisitCount();?></p>
    </div>
</div>
<!-- link foter-->
<div class="sreenadd">
    <p>Copyright (c) 2015 GiaThinhLand. Ghi rõ nguồn gốc khi phát hành thông tin tại website này</p>
    <a href="javascript:void(0)" class="back-to-top"><img src="<?php echo $base_url ?>images/assets/icon-back-to-top.png"></a>
</div>
<!-- end link foter-->
<!-- foter-->