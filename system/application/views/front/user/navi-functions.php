<div class="nav-member <?php if($customer->isLock == 1) {echo 'lock-user';} ?>">
    <?php if($customer->isLock == 0): ?>
    <div class="nav-member-col <?php echo $this->router->fetch_method() == 'post' ? 'active' : ''; ?>">
        <p class="textthanhvien2"><a href="<?=$base_url?>dang-tin">Đăng tin bán/Cho thuê</a></p>
    </div>
    <?php endif; ?>
    <div class="nav-member-col <?php echo $this->router->fetch_method() == 'listPostByUser' ? 'active' : ''; ?> <?php echo $this->router->fetch_method() == 'editPost' ? 'active' : ''; ?>">
        <p class="textthanhvien2"><a href="<?=$base_url?>chinh-sua-tin-da-dang">Sửa/Xóa tin đã đăng</a></p>
    </div>
    <div class="nav-member-col <?php echo $this->router->fetch_method() == 'contact' ? 'active' : ''; ?>">
        <p class="textthanhvien2"><a href="<?=$base_url?>dang-tin-vip.html">Liên hệ tin đăng tin VIP</a></p>
    </div>
    <div class="nav-member-col <?php echo $this->router->fetch_method() == 'changeAccount' ? 'active' : ''; ?>">
        <p class="textthanhvien2"><a href="<?=$base_url?>thay-doi-thong-tin">Thay đổi thông tin</a></p>
    </div>
    <div class="nav-member-col <?php echo $this->router->fetch_method() == 'changePassword' ? 'active' : ''; ?>">
        <p class="textthanhvien2"><a href="<?=$base_url?>doi-mat-khau">Thay đổi mật khẩu</a></p>
    </div>
    <div class="nav-member-col last" style="width:105px;">
        <p class="textthanhvien2"><a href="<?=$base_url?>dang-xuat">Thoát</a></p>
    </div>
</div>