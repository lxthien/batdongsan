<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url?>">Trang chủ</a></div>
    <div class="linkdautrang"><span class="linkdautrang-active"><?=$news->title_vietnamese?></span></div>
</div>

<!--main-->
<div class="main">
    <!--left-->
    <div class="left left-top-3">
        <!--gioi thieu-->
        <div class="sreennoidungchitiet">
            <div class="sreentieudethitruong">
                <h1><?=$news->title_vietnamese;?></h1>
            </div>
        </div>
        <div class="noidunggioithieu">
            <div align="justify" id="divContents">
                <?=$news->full_vietnamese?>
            </div>
        </div>
        <!--end gioi thieu-->
    </div>
    <!--end left-->
    <!-- right-->
    <div class="right">
        <?php echo $this->load->view('front/widget/search-estates'); ?>
        <!-- qc-->
        <?php echo $this->load->view('front/includes/adv_right'); ?>
        <!-- end qc-->
    </div>
    <!--end right-->
</div>
<!--end main-->