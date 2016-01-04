<link rel="stylesheet" href="<?php echo $base_url.'images/css/style-new-282015.css'; ?>"/>

<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url;?>">Trang chủ</a></div>
    <div class="linkdautrang"><a class="linkdautrang-active" href="<?=$base_url.$estatesCategoryUrl?>" title="<?=$estatesCategoryName?>"><?=$estatesCategoryName?></a></div>
</div>
<div class="cl"></div>
<!--main-->
<div class="main">
    <!--left-->
    <div class="left estates">
        <div class="border-left-right-none">
            <div class="top-vip fl">
                <div class="title-top-vip fl">
                    <h1>Tin bán nổi bật</h1>
                </div>
                <div class="list-top-vip fl">
                    <?php foreach ($estatesVip as $row): ?>
                    <div class="top-vip-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html"><img src="<?php echo image($row->photo, 'estate_355_232') ?>"></a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="lists-top-1 fl">
                <div class="lists-top-1-item fl">
                    <?php $i=0; foreach($this->typeHouseSale as $row): $i++; ?>
                    <div class="list-top-1 fl">
                        <div class="title-list-top-1 fl">
                            <h1><?php echo $row->name;?></h1>
                        </div>
                        <div class="list-top-1s fl">
                            <?php foreach ($estatesVip as $row): ?>
                            <div class="top-1-item fl">
                                <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                                    <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                                </a>
                                <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                                    <span><?php echo $row->title; ?></span>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; unset($row); ?>
                </div>
            </div>
        </div>
        <!--end hotnew-->
    </div>
    <!--end left-->
    <?=$this->load->view('front/estates/col-right', $dis);?>
</div>
<!--end main-->
<div class="cl"></div>