<!-- foter-->
<div class="menufoter">
    <div class="sreenmenufoter"  style="width:960px; margin:0px auto; color:#0c7102; height:33px; ">
        <div class="home1" style="color:#0c7102;">
            <a href="<?=$base_url?>" title="Mua bán Nhà đất">
                <p style=" margin-left:12px; margin-top:9px;">Trang chủ</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>gioi-thieu.html" title="Giới thiệu">
                <p style=" margin-top:9px;">Giới thiệu</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>quy-dinh-su-dung.html" title="Quy định sử dụng">
                <p style="margin-top:9px;">Quy định sử dụng</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>quy-che-hoat-dong.html" title="Quy chế hoạt động">
                <p style="margin-top:9px;">Quy chế hoạt động</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>huong-dan-dang-tin.html" title="Hướng dẫn đăng tin">
                <p style="margin-top:9px;">Hướng dẫn đăng tin</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>bang-gia-quang-cao-tin-vip.html" title="Bảng giá quảng cáo - Tin Vip">
                <p style="margin-top:9px;">Bảng giá dịch vụ</p>
            </a>
        </div>
        <div class="gt">
            <a href="<?=$base_url?>site-map.html">
                <p style="margin-top:9px;">Sitemap</p>
            </a>
        </div>
        <div class="gt gt-end">
            <a href="<?=$base_url?>lien-he.html" title="Liên hệ - Góp ý">
                <p style="margin-top:9px;">Liên hệ - Góp ý</p>
            </a>
        </div>
    </div>
</div>
<!-- link foter-->
<div class="sreenlink" style="width:980px; background-color:#fefdfd; float:left; padding-bottom: 15px;">
    <div class="sreenbox1" style="float:left; width:160px; margin-top:15px; margin-left: 15px;">
        <div class="box1">
            <?php
            $landcategories = new Landcategory(1);
            $lands = new Land();
            $lands->where('landcategory_id', $landcategories->id);
            $lands->order_by('position','asc');
            $lands->get(9);
            ?>
            <p align="left" style="color:#0c7102; font-size:15px; margin-bottom: 1px; font-weight:bold;">
                <a style="color:#0c7102;" href="<?php echo $landcategories->link; ?>"><?=$landcategories->name;?></a>
            </p>
            <?php foreach($lands as $row): ?>
                <div class="ndlink">
                    <a style="height: auto; line-height: 18px; padding: 1px 0px;" href="<?=$row->link;?>">
                        <p><?=$row->name;?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="sreenbox1" style="float:left; width:180px; margin-top:15px; margin-left: 35px;">
        <div class="box1" style="width: 180px;">
            <?php
                $landcategories = new Landcategory(2);
                $lands = new Land();
                $lands->where('landcategory_id', $landcategories->id);
                $lands->order_by('position','asc');
                $lands->get(9);
            ?>
            <p align="left" style="color:#0c7102; font-size:15px; margin-bottom: 1px; font-weight:bold;">
                <a style="color:#0c7102;" href="<?php echo $landcategories->link; ?>"><?=$landcategories->name;?></a>
            </p>
            <?php foreach($lands as $row): ?>
            <div class="ndlink">
                <a style="height: auto; line-height: 18px; padding: 1px 0px;" href="<?=$row->link;?>">
                    <p><?=$row->name;?></p>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="sreenbox3and4" style="float:left; margin-top:15px; margin-left: 40px; width:160px;">
        <div class="box3">
            <?php
            $landcategories = new Landcategory(3);
            $lands = new Land();
            $lands->where('landcategory_id', $landcategories->id);
            $lands->order_by('position','asc');
            $lands->get(5);
            ?>
            <p align="left" style="color:#0c7102; font-size:15px; margin-bottom: 1px; font-weight:bold;">
                <a style="color:#0c7102;" href="<?php echo $landcategories->link; ?>"><?=$landcategories->name;?></a>
            </p>
            <?php foreach($lands as $row): ?>
                <div class="ndlink">
                    <a style="height: auto; line-height: 18px; padding: 1px 0px;" href="<?=$row->link;?>">
                        <p><?=$row->name;?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="sreenbox3and4" style="float:left; width:160px; margin-top:15px; margin-left: 40px;">
        <div class="box3">
            <?php
            $landcategories = new Landcategory(5);
            $lands = new Land();
            $lands->where('landcategory_id', $landcategories->id);
            $lands->order_by('position','asc');
            $lands->get(5);
            ?>
            <p align="left" style="color:#0c7102; font-size:15px; margin-bottom: 1px; font-weight:bold;">
                <a style="color:#0c7102;" href="<?php echo $landcategories->link; ?>"><?=$landcategories->name;?></a>
            </p>
            <?php foreach($lands as $row): ?>
                <div class="ndlink">
                    <a style="height: auto;line-height: 18px; padding: 1px 0px;" href="<?=$row->link;?>">
                        <p><?=$row->name;?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="sreenbox3and4" style="float:left; width:160px; margin-top:15px; margin-left:30px;">
        <div class="box3">
            <?php
            $landcategories = new Landcategory(4);
            $lands = new Land();
            $lands->where('landcategory_id', $landcategories->id);
            $lands->order_by('position','asc');
            $lands->get(5);
            ?>
            <p align="left" style="color:#0c7102; font-size:15px; margin-bottom: 1px; font-weight:bold;">
                <a style="color:#0c7102;" href="<?php echo $landcategories->link; ?>"><?=$landcategories->name;?></a>
            </p>
            <?php foreach($lands as $row): ?>
                <div class="ndlink">
                    <a style="height: auto;line-height: 18px; padding: 1px 0px;" href="<?=$row->link;?>">
                        <p><?=$row->name;?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="line9"></div>
<!-- link foter-->
<div class="sreenadd" style="width:980px; background-color:#d0d0d0; float:left;">
    <div style="float:left; font-size: 13px; width: 780px; margin: 5px 0px 5px 8px; text-align: left; line-height: 22px;">
        <?=getconfigkey('addressCompany')?>
    </div>
    <div class="footer-logo" style="float: right; width: 190px;">
        <a href="<?=$base_url;?>"><img style="width: 95%; margin-top: 10px; float: right; margin-right: 8px;" src="<?=$base_url;?>images/logo_tet.png" alt="nhà đất, bất động sản"/></a>
    </div>
</div>