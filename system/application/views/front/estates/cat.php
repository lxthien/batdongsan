<link rel="stylesheet" href="<?php echo $base_url.'images/css/style-new-282015.css'; ?>"/>

<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url;?>">Trang chủ</a></div>
    <div class="linkdautrang"><a href="<?=$base_url.$estatesCategoryUrl?>" title="<?=$estatesCategoryName;?>"><?=$estatesCategoryName;?></a></div>
    <div class="linkdautrang"><span class="linkdautrang-active"><?=$type->name;?></span></div>
</div>
<div class="cl"></div>
<!--main-->
<div class="main">
    <!--left-->
    <div class="left estates">
        <div class="hotnew">
			<div class="titlenew-add">
				<h1><?php echo $type->name.' '.$atAddress; ?></h1>
			</div>
            <div class="boxnew">
                <?php foreach($estates as $row):
                    ?>
                    <div class="sreentindb <?php if($row->isVip == 1): ?>vip<?php endif; ?>">
                        <?php if($row->isVip == 1): ?><img class="icon-vip" src="<?=$base_url?>images/icon-vip.png" alt="Tin Vip"/><?php endif; ?>
                        <div class="sreenboxnew">
                            <?php if($row->photo != null): ?>
                                <div class="boxhinh">
                                    <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?=$row->title;?>">
                                        <img alt="<?php echo $row->title; ?>" src="<?php echo image($row->photo, 'estate_200_145') ?>" />
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="boxhinh">
                                    <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?=$row->title;?>">
                                        <img alt="<?php echo $row->title; ?>" src="<?=$base_url?>images/no-image.png" />
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="noidung">
                                <div class="tieude">
                                    <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?=$row->title;?>">
                                        <?php echo $row->title; ?>
                                    </a>
                                </div>
                                <p class="row">
                                    <span class="first">Giá</span>
                                    <span class="last">:
                                        <?php if($row->isPrice == 0): ?>
                                            <?=$row->price_text.' '.getpricetype($row->price_type);?>
                                        <?php else: ?>
                                            <?='Thương lượng'?>
                                        <?php endif; ?>
                                    </span>
                                </p>
                                <p class="row">
                                    <span class="first">Diện tích</span>
                                    <span class="last">:
                                        <?php if($row->isArea == 0): ?>
                                            <?=$row->area_text;?> m2
                                        <?php else: ?>
                                            <?='KXĐ'?>
                                        <?php endif; ?>
                                    </span>
                                </p>
                                <p class="row">
                                    <span class="first">Hướng</span>
                                    <span class="last">:
                                        <?=$row->Estatedirection->name;?>
                                    </span>
                                </p>
                                <p class="row">
                                    <span class="first">Vị trí</span>
                                    <span class="last">:
                                        <?=$row->Estatecity->name;?> - <?=$row->Estatedistrict->name;?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="line <?php if($row->isVip == 1): ?>line-vip<?php endif; ?>"></div>
                <?php endforeach; unset($row); ?>
                
                <?php if($this->pagination->total_rows >= $this->pagination->per_page): ?>
                <div class="phantrang">
                    <div class="back">
                        <?=$this->pagination->create_links();?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!--end hotnew-->
    </div>
    <!--end left-->
    <?=$this->load->view('front/estates/col-right-2', $dis);?>
</div>
<!--end main-->