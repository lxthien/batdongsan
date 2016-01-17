<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url?>">Trang chủ</a></div>
    <div class="linkdautrang"><a class="linkdautrang-active" href="<?=$base_url?>site-map.html">Sitemap</a></div>
</div>
<!--main-->
<div class="main">
    <!--left-->
    <div class="left left-top-3">
        <div class="sreennoidungchitiet">
            <div class="sreentieudethitruong">
                <h1>Sitemap</h1>
            </div>
        </div>
        <!--gioi thieu-->
        <div class="hotnew sitemap-main">
            <div class="noidunggioithieu">
                <div class="linksite2"><p><a href="<?=$base_url?>">Trang chủ</a></p> </div>
            </div>
            <div class="noidunggioithieu">
                <div class="linksite2">
                    <p><a href="<?=$base_url?>nha-dat-ban">Nhà đất bán</a></p>
                </div>
                <?php $i=0; foreach($this->typeHouseSale as $row): $i++; ?>
                    <div class="linksite">
                        <p><a href="<?=$base_url?>nha-dat-ban/<?=$row->name_none;?>"><?=$row->name;?></a></p>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
            <div class="noidunggioithieu">
                <div class="linksite2">
                    <p><a href="<?=$base_url?>nha-dat-cho-thue">Nhà đất cho thuê</a></p>
                </div>
                <?php $i=0; foreach($this->typeHouseLease as $row): $i++; ?>
                    <div class="linksite">
                        <p> <a href="<?=$base_url?>nha-dat-cho-thue/<?=$row->name_none;?>"><?=$row->name;?></a></p>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
            <div class="noidunggioithieu">
                <div class="linksite2">
                    <p><a href="<?=$base_url?>tin-tuc">Tin tức</a></p>
                </div>
                <?php $i=0; foreach($this->newsCate as $row): $i++; ?>
                    <div class="linksite">
                        <p>
                            <a href="<?=$base_url?>tin-tuc/<?=$row->name_none;?>"><?=$row->name_vietnamese;?></a>
                        </p>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
            <div class="noidunggioithieu">
                <div class="linksite2">
                    <p><a href="<?=$base_url?>du-an">Dự án</a></p>
                </div>
                <?php $i=0; foreach($this->projectsCate as $row): $i++; ?>
                    <div  class="linksite">
                        <p>
                            <a href="<?=$base_url?>du-an/<?=$row->name_none;?>"><?=$row->name_vietnamese;?></a>
                        </p>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
            <div class="noidunggioithieu">
                <div class="linksite2">
                    <p><a href="<?=$base_url?>cam-nang">Cẩm nang</a></p>
                </div>
                <?php $i=0; foreach($this->guideCate as $row): $i++; ?>
                    <div class="linksite">
                        <p>
                            <a href="<?=$base_url?>cam-nang/<?=$row->name_none;?>"><?=$row->name_vietnamese;?></a>
                        </p>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
            <div class="noidunggioithieu">
                <div class="linksite2">
                    <p><a href="<?=$base_url?>gioi-thieu.html">Giới thiệu</a></p>
                </div>
                <div class="linksite2">
                    <p><a href="<?=$base_url?>site-map.html">Sơ đồ Website</a></p>
                </div>
                <div class="linksite2">
                    <p><a href="<?=$base_url?>lien-he.html">Liên hệ - Góp ý</a></p>
                </div>
            </div>
        </div>
        <!--end gioi thieu-->
    </div>
    <!--end left-->
    <?=$this->load->view('front/project/col-right')?>
</div>
<!--end main-->