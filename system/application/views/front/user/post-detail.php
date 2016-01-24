<script src="<?php echo $base_url; ?>images/js/sliderengine/amazingslider.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>images/css/sliderengine/amazingslider-1.css">
<script src="<?php echo $base_url; ?>images/js/sliderengine/initslider-1.js"></script>

<link type="text/css" href="<?=$base_url?>images/js/pikachu/bottom.css" rel="stylesheet" />
<script type="text/javascript" src="<?=$base_url?>images/js/pikachu/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?=$base_url?>images/js/pikachu/jquery.pikachoose.min.js"></script>
<script language="javascript">
    $(document).ready(
        function (){
            $("#pikame").PikaChoose({carousel:true});
            $('.pika-stage a[href*="img"]').fancybox();
        });
</script>

<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url;?>">Trang chủ</a></div>
    <div class="linkdautrang"><a href="<?=$base_url.$cate->name_none?>" title="<?=$cate->name;?>"><?=$cate->name;?></a></div>
    <div class="linkdautrang"><a class="linkdautrang-active" href="<?=$base_url.$cate->name_none.'/'.$o->estatetype->name_none;?>" title="<?=$o->estatetype->name?>"><?=$o->estatetype->name?></a></div>
</div>

<div class="main">
<div class="left left-top-3">
    <h1 style="font-size:25px; color: #bb7700; padding: 5px 0;"><?=ucfirst($o->title);?></h1>
    <div class="location-estate" style="padding: 3px 0; float: left; width: 100%; margin-bottom: 10px;">
        <div style="margin-right: 30px; float: left;">
            <p class="fl">
                <span class="bold fl" style="color: #a50000;">Quận/Huyện: </span>
                <a class="fl" style="color: #051c94;" href="<?php echo $base_url.$o->estatetype->name_none.'/'.$o->estatedistrict->name_none.'/'.$o->estatecity->name_none; ?>"><?=$o->estatedistrict->name;?></a>
            </p>
        </div>
        <div style="margin-left: 15px; float: left;">
            <p class="fl">
                <span class="bold fl" style="color: #a50000;">Tỉnh/TP: </span>
                <a class="fl" style="color: #051c94;" href="<?php echo $base_url.$o->estatecatalogue->name_none.'-'.$o->estatecity->name_none; ?>"><?=$o->estatecity->name;?></a>
            </p>
        </div>
    </div>

    <div class="hotnew">
        <div class="sreennoidungchitiet">
            <div class="developper-detail">
                <?=$o->description;?>
            </div>
            <?php if($o->photo != null): ?>
            <div class="slide-nha-dat">
                <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:640px;margin:0px auto 86px;">
                    <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                        <ul class="amazingslider-slides" style="display:none;">
                            <li><a href="javascript:void(0)"><img src="<?php echo image($o->photo, 'slide_640_450') ?>" /></a></li>
                            <?php if($photo->result_count() > 0): ?>
                                <?php foreach($photo as $row): ?>
                                    <li><a href="javascript:void(0)"><img src="<?php echo image($row->name, 'slide_640_450') ?>"/></a></li>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </ul>
                        <ul class="amazingslider-thumbnails" style="display:none;">
                            <li><a href="javascript:void(0)"><img alt="<?php echo $o->title; ?>" src="<?php echo image($o->photo, 'slide_65_45') ?>" /></a></li>
                            <?php if($photo->result_count() > 0): ?>
                                <?php foreach($photo as $row): ?>
                                    <li><a href="javascript:void(0)"><img alt="<?php echo $o->title; ?>" src="<?php echo image($row->name, 'slide_65_45') ?>"/></a></li>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End of body section HTML codes -->
            <?php endif; ?>
            <?php if( $o->tag != '' ): ?>
            <div class="sreentag" >
                <div class="tag"></div>
                <p style="float:left; width:490px; margin-left:5px; color:#333333; font-weight:bold;">
                    <?php $i=0; foreach($tag as $tagSub): $i++; ?>
                        <a href="<?=$base_url.'tags-dang-tin/'.remove_vn($tagSub)?>.html"><?=$tagSub;?></a> <?php echo $i<count($tag) ? ',':''; ?>
                    <?php endforeach ?>
                </p>
            </div>
            <?php endif; ?>
        </div>
        <div class="sreennoidungchitiet" style="width:723px; float:left; margin-bottom:7px;">
            <h3 class="info-basic">Thông tin cơ bản</h3>
            <div class="line21"></div>
            <div class="sreenttin add-left-right">
                <div class="add-left">
                    <div class="social-detail">
                        <span><a href="javascript:void(0)"><img src="<?php echo $base_url.'images/icon-save.png' ?>" alt="save icon"/> &nbsp;Lưu tin</a></span>
                        <span><a href="javascript:window.print()"><img src="<?php echo $base_url.'images/icon-print.png' ?>" alt="print icon"/> &nbsp;In tin</a></span>
                        <span><a href="javascript:void(0)"><img src="<?php echo $base_url.'images/icon-share.png' ?>" alt="share icon"/> &nbsp;Chia sẻ tin</a>
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$base_url.$cate->name_none.'/'.$o->estatecity->name_none.'/'.$o->title_none?>.html" target="_blank">Chia sẻ qua Facebook</a></li>
                                <li><a href="https://plus.google.com/share?url=<?=$base_url.$cate->name_none.'/'.$o->estatecity->name_none.'/'.$o->title_none?>.html" target="_blank">Chia sẻ qua Google +</a></li>
                            </ul>
                        </span>
                    </div>
                    <div class="tinh add-left-item">
                        <p>
                            <span style="width: 100px; display: inline-block;">Loại nhà đất: </span>
                            <span class="style4"><?=$o->estatetype->name?></span>
                        </p>
                    </div>
                    <div class="ms add-left-item">
                        <p>
                            <span style="width: 100px; display: inline-block;">Mã số tin: </span>
                            <span class="style4" style="color: #ee0e0e; font-weight: 600;"><?=$o->code;?></span>
                        </p>
                    </div>
                    <?php if($o->estatearea_id !=0): ?>
                        <div class="ms add-left-item">
                            <p>
                                <span style="width: 100px; display: inline-block;">Diện tích: </span>
                                <?php if($o->area_text != 0):?>
                                    <span style="line-height: 10px;" class="style4"><?=$o->area_text;?> m<sup>2</sup></span>
                                <?php else: ?>
                                    <?='Ko XD'?>
                                <?php endif; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    <div class="ms add-left-item">
                        <p>
                            <span style="width: 100px; display: inline-block;">Giá: </span>
                            <?php if($o->price_text != 0):?>
                                <span class="style4"><?=$o->price_text.' '.getpricetype($o->price_type);?></span>
                            <?php else: ?>
                                <?='Thương lượng'?>
                            <?php endif; ?>
                        </p>
                    </div>
                    <?php if($o->estatedirection_id != 0): ?>
                        <div class="tinh add-left-item">
                            <?php if($o->estatedirection_id != 0): ?>
                            <p>
                                <span style="width: 100px; display: inline-block;">Hướng: </span>
                                <span class="style4"><?=$o->estatedirection->name;?></span>
                            </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($o->article_id !=0):
                        $project = new Article($o->article_id);
                        ?>
                        <div class="ms add-left-item">
                            <p>
                                <span style="width: 100px; display: inline-block;">Thuộc dự án: </span>
                                <span class="style4">
                                    <a target="_blank" class="of-project" href="<?=base_url().'du-an/'.$project->newscatalogue->name_none.'/'.$o->article->title_none;?>.html" title="<?=$o->article->title_vietnamese;?>">
                                        <?=$o->article->title_vietnamese;?>
                                    </a>
                                </span>
                            </p>
                        </div>
                    <?php endif; ?>
                    <?php if($o->legally != ''): ?>
                        <div class="tinh add-left-item">
                            <?php if($o->legally != ''): ?>
                                <p>
                                    <span style="width: 100px; display: inline-block;">Pháp lý: </span>
                                    <span class="style4"><?=$o->legally;?></span>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($o->address != ''): ?>
                        <div class="tinh add-left-item">
                            <p>
                                <span style="width: 100px; display: inline-block;">Địa chỉ: </span>
                                <span class="style4"><?=$o->address;?></span>
                            </p>
                        </div>
                    <?php endif; ?>
                    <div class="ms add-left-item">
                        <p>
                            <span style="width: 100px; display: inline-block;">Ngày đăng tin: </span>
                            <?=date('d-m-Y', strtotime($o->created));?>
                        </p>
                    </div>
                    <?php if($o->isReals == 1): ?>
                        <img style="margin-left: -6px;" src="<?php echo $base_url.'images/chinh-chu.png' ?>" alt=""/>
                    <?php endif; ?>
                </div>
                <div class="add-right">
                    <h3>Thông tin liên hệ</h3>
                    <div class="right-contact-customer">
                        <?php if($o->isFree == 0): ?>
                            <div class="ttinleft" style="float:left;">
                                <p style="text-align:justify;margin-bottom:8px;color:#292929;float:left;font-size:16px;width: 100%;"><span class="style1 bold"><?php echo ucfirst($o->estateuser->name);?></span></p>
                                <?php if($o->estateuser->mobilePhone !=''): ?>
                                <?php endif; ?>
                                <?php if($o->estateuser->mobile !=''): ?>
                                    <p style="text-align:justify;color:#292929;margin-bottom:7px;float:left;font-size:15px;width: 100%;">
                                        <span class="style5 bold"><img src="<?php echo $base_url . 'images/icon-telephone.png' ?>"/></span> <span class="style1"><?=$o->estateuser->mobile;?></span>
                                    </p>
                                <?php endif; ?>
                                <p style="text-align:justify;margin-bottom:7px;color:#292929;float:left;font-size:15px;width: 100%;">
                                    <span class="style5 bold"><img src="<?php echo $base_url.'images/icon-email.png' ?>"/> </span> <span class="style1"><?=$o->estateuser->email;?></span>
                                </p>
                            </div>
                        <?php else: ?>
                            <div class="ttinleft">
                                <?php if($o->name_contact !=''): ?><p style="text-align:justify;margin-bottom:7px; width:260px; color:#292929;float:left;font-size:16px;"><span class="style1 bold"><?=$o->name_contact;?></span></p><?php endif; ?>
                                <?php if($o->address_contact !=''): ?><p style="margin-bottom:7px; width:260px; color:#292929;float:left;"><span class="style5" style="margin-right: 3px;"><img src="<?php echo $base_url . 'images/icon-address.png' ?>"/></span><?=$o->address_contact;?></p><?php endif; ?>
                                <?php if($o->phone_contact !=''): ?><p style="text-align:justify;margin-bottom:7px; width:260px; color:#292929;float:left;"><span class="style5 bold"><img src="<?php echo $base_url . 'images/icon-telephone.png' ?>"/></span> <span class="style1"><?=$o->phone_contact;?></span></p><?php endif; ?>
                                <?php if($o->mobile_contact !=''): ?><p style="text-align:justify;margin-bottom:7px; width:260px; color:#292929;float:left;"><span class="style5 bold"><img src="<?php echo $base_url . 'images/icon-telephone.png' ?>"/></span> <span class="style1"><?=$o->mobile_contact;?></span></p><?php endif; ?>
                                <?php if($o->email_contact !=''): ?><p style="text-align:justify;margin-bottom:7px; width:260px; color:#292929;float:left;"><span class="style5 bold"><img src="<?php echo $base_url.'images/icon-email.png' ?>"/></span> <span class="style1"><?=$o->email_contact;?></span></p><?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cl"></div>
        <!-- ---------------------------------------------------------------------------------------------------------------- -->
        <div class="news-related">
            <h3>Các tin cùng khu vực và mức giá:</h3>
        </div>
        <div class="cl"></div>
        <?php foreach($estates_vip as $row):
            if($row->updated != '') $date = $row->updated;
            else $date = $row->created;
            ?>
            <div class="sreentindb vip">
                <?php if($row->isVip == 1): ?><img class="icon-vip" src="<?=$base_url?>images/icon-vip.png" alt="Tin Vip"/><?php endif; ?>
                <div class="sreenboxnew">
                    <?php if($row->photo != null): ?>
                        <div class="boxhinh">
                            <img alt="<?php echo $row->title; ?>" src="<?php echo image($row->photo, 'estate_120_95') ?>" />
                        </div>
                    <?php else: ?>
                        <div class="boxhinh">
                            <img alt="<?php echo $row->title; ?>" src="<?=$base_url?>img/project/no-image.jpg" />
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

        <?php foreach($estates_related_type_city_area as $row):
            if($row->updated != '') $date = $row->updated;
            else $date = $row->created;
            ?>
        <div class="sreentindb">
            <?php if($row->isVip == 1): ?><img class="icon-vip" src="<?=$base_url?>images/icon-vip.png" alt="Tin Vip"/><?php endif; ?>
            <div class="sreenboxnew">
                <?php if($row->photo != null): ?>
                    <div class="boxhinh">
                        <img alt="<?php echo $row->title; ?>" src="<?php echo image($row->photo, 'estate_120_95') ?>" />
                    </div>
                <?php else: ?>
                    <div class="boxhinh">
                        <img alt="<?php echo $row->title; ?>" src="<?=$base_url?>img/project/no-image.jpg" />
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
        <div class="line"></div>
        <?php endforeach; unset($row); ?>

        <?php foreach($estates_related_area_price as $row):
            if($row->updated != '') $date = $row->updated;
            else $date = $row->created;
            ?>
        <div class="sreentindb">
            <?php if($row->isVip == 1): ?><img class="icon-vip" src="<?=$base_url?>images/icon-vip.png" alt="Tin Vip"/><?php endif; ?>
            <div class="sreentindb" style="width:610px; height:15px; ">
                <div class="sreentieude" style=" height:15px; float:left; margin-right:3px; margin-left:20px; ">
                    <div class="tieude">
                        <h4><a style="<?php if($row->isVip == 1) echo 'color: #109502; text-transform: uppercase;'; ?>" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?=$row->title?>">
                                <?=strlen($row->title) < 150 ? $row->title : cut_string($row->title, 150).'...';?>
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="sreen1" style="width:17px; height:15px; float:left;">
                    <div class="icon">
                        <?php if($row->photo != null): ?>
                            <a style="background: none;" href=""><img src="<?=$base_url?>images/iconcamera.png" alt="camera icon"/></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="sreenboxnew">
                <?php if($row->photo != null): ?>
                    <div class="boxhinh">
                        <img alt="<?php echo $row->title; ?>" src="<?php echo image($row->photo, 'estate_120_95') ?>" />
                    </div>
                <?php else: ?>
                    <div class="boxhinh">
                        <img alt="<?php echo $row->title; ?>" src="<?=$base_url?>img/project/no-image.jpg" />
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
        <div class="line"></div>
        <?php endforeach; unset($row); ?>
    </div>
</div>
<div class="right">
    <?php echo $this->load->view('front/widget/search-estates'); ?>
    <?php echo $this->load->view('front/includes/adv_right'); ?>

    <?php if( display_static_by_area($this->estateareas, $o) > 0 ): ?>
    <div class="boxnoibat">
        <span class="title-top-box">Thống kê theo diện tích</span>
        <?php foreach($this->estateareas as $row): ?>
            <?php if( count_static_by_area($o->estatetype->name_none, $o->estatedistrict->name_none, $row->url) >= 10 ): ?>
                <div class="sreentinnoibat" style="width:312px; float:left; margin-bottom:3px;">
                    <div class="tinkhacnoibat">
                        <a style="height: auto;" href="<?=$base_url.'thong-ke-theo-dien-tich/'.$o->estatetype->name_none.'/'.$o->estatedistrict->name_none.'/'.$row->url;?>" title="<?=$o->title.' '.$row->label;?>">
                            <p style="margin-left:10px; margin-top:9px; font-weight:normal;">
                                <?=$o->estatetype->name.' '.$o->estatedistrict->name.' '.$row->label;?>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="line3"></div>
            <?php endif; ?>
        <?php endforeach; unset($row); ?>
    </div>
    <?php endif; ?>
    <?php if( display_static_by_price($estatePrices, $o) > 0 ): ?>
    <div class="boxnoibat">
        <span class="title-top-box">Thống kê theo mức giá</span>
        <?php foreach($estatePrices as $row): ?>
            <?php if( count_static_by_price($o->estatetype->name_none, $o->estatedistrict->name_none, $row->url) >= 10 ): ?>
                <div class="sreentinnoibat" style="width:312px; float:left; margin-bottom:3px;">
                    <div class="tinkhacnoibat">
                        <a style="height: auto;" href="<?=$base_url.'thong-ke-theo-muc-gia/'.$o->estatetype->name_none.'/'.$o->estatedistrict->name_none.'/'.$row->url;?>" title="<?=$o->title.' '.$row->label;?>">
                            <p style="margin-left:10px; margin-top:9px; font-weight:normal;"><?=$o->estatetype->name.' '.$o->estatedistrict->name.' '.$row->label;?></p>
                        </a>
                    </div>
                </div>
                <div class="line3"></div>
            <?php endif; ?>
        <?php endforeach; unset($row); ?>
    </div>
    <?php endif; ?>
</div>
</div>