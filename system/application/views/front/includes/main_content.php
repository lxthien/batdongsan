<style type="text/css">
    .hotnew{
        border-right: 1px solid #CCC;
        border-left: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
    }
	.sreentindb .sreentieude .tieude a {
		width: 605px;
	}
</style>
<?php $this->load->view('front/includes/top-main');?>
<div class="main" style="width:980px; float:left; margin-top: 8px;">
<div class="left home-page">
    <div class="hotnew" style="border: none;">
        <div class="titlenew-add">
            <span>Tin rao nhà đất Vip</span>
        </div>
        <div class="boxnew" style="width:635px; float:left; margin-top:10px;">
            <?php $i=0; foreach($estatesVip as $row): $i++;
            ?>
            <div class="sreentindb <?php if($row->isVip == 1): ?>vip<?php endif; ?>">
                    <?php if($row->isVip == 1): ?><img class="icon-vip" src="<?=$base_url?>images/icon-vip.png" alt="Tin Vip"/><?php endif; ?>
                    <div class="sreentindb">
                        <div class="sreentieude">
                            <div class="tieude">
                                <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?=$row->title;?>">
                                    <?php echo strlen($row->title) < 120 ? $row->title : cut_string($row->title, 120).'...';?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sreenboxnew">
                        <?php if($row->photo != null): ?>
                            <div class="boxhinh">
                                <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?=$row->title;?>">
                                    <img alt="<?php echo $row->title; ?>" src="<?php echo image($row->photo, 'estate_120_95') ?>" />
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
                            <p class="row">
                                <span class="area">
                                    <?php if($row->isArea == 0): ?>
                                        <?=$row->area_text;?> m<sup>2</sup>
                                    <?php else: ?>
                                        <?='KXĐ'?>
                                    <?php endif; ?>
                                </span>
                                <span class="price">
                                    <?php if($row->isPrice == 0): ?>
                                        <?=$row->price_text.' '.getpricetype($row->price_type);?>
                                    <?php else: ?>
                                        <?='Thương lượng'?>
                                    <?php endif; ?>
                                </span>
                                <?php if($row->estateuser->mobile != ''): ?>
                                    <span class="phone">
                                        <img src="<?php echo $base_url.'images/icon-phone.png' ?>" style="height: 15px; vertical-align: middle;"/><?=$row->estateuser->mobile;?>
                                    </span>
                                <?php endif; ?>
                            </p>
                            <p class="row-2"><a href="<?php echo $base_url.$row->estatetype->name_none.'/'.$row->estatedistrict->name_none.'/'.$row->estatecity->name_none; ?>"><?=$row->estatedistrict->name;?> | <?=$row->estatecity->name;?></a></p>
                            <p class="des">
                                <?=strlen(strip_tags($row->description)) < 300 ? strip_tags($row->description): cut_string2(strip_tags($row->description), 300).' ...';?>
                            </p>
                            <p class="date"><?php echo date('d/m/Y',strtotime($row->created)); ?></p>
                        </div>
                    </div>
                </div>
                <div class="line <?php if($row->isVip == 1): ?>line-vip<?php endif; ?>"></div>
            <?php endforeach; unset($row); ?>
        </div>
    </div>
    <div class="qc-home-page">
        <a href="<?php echo getconfigkey('link_middle_images_homepage') ?>"><img src="<?php echo $base_url.getconfigkey('middle_images_homepage'); ?>" alt="Dự án bất động sản"/></a>
    </div>
    <div class="tinrao">
        <div class="titlenew-add">
            <span>Tin rao nhà đất mới nhất</span>
        </div>
        <div class="boxnew">
            <?php $i=0; foreach($estatesNew as $row): $i++;
            ?>
                <div class="<?= $i%2!=0 ? 'boxtinrao' : 'boxtinrao2'; ?>">
                    <div class="tieuderao">
                        <h3><a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?=$row->title;?>">
                            <?=ucfirst(mb_strtolower( $row->title , "utf-8"));?>
                        </a></h3>
                    </div>
                    <div class="thongtin noidung">
                        <p class="row" style="float:left;">
                            <span class="area">
                                <?php if($row->isArea == 0): ?>
                                    <?=$row->area_text;?> m<sup>2</sup>
                                <?php else: ?>
                                    <?='KXĐ'?>
                                <?php endif; ?>
                            </span>
                            <span class="price">
                                <?php if($row->isPrice == 0): ?>
                                    <?=$row->price_text.' '.getpricetype($row->price_type);?>
                                <?php else: ?>
                                    <?='Thương lượng'?>
                                <?php endif; ?>
                            </span>
                        </p>
                        <p class="row-2"><a href="<?php echo $base_url.$row->estatetype->name_none.'/'.$row->estatedistrict->name_none.'/'.$row->estatecity->name_none; ?>"><?=$row->estatedistrict->name;?> | <?=$row->estatecity->name;?></a></p>
                        <?php if($row->photo != null): ?>
                        <p class="icon-camera">
                            <img src="<?=$base_url?>images/iconcamera.png" alt="camera icon"/>
						</p>
                        <?php endif; ?>
                        <p class="date"><?php echo date('d/m/Y',strtotime($row->created)); ?></p>
					</div>
                </div>
            <?php endforeach; unset($row); ?>
        </div>
    </div>
    <div class="cl"></div>
    <div class="home-pagination">
        <div class="home-pagination-left">
            <span>Tin nhà đất bán mới nhất: </span>
            <a href="<?php echo $base_url.'nha-dat-ban/1'; ?>">1</a>
            <a href="<?php echo $base_url.'nha-dat-ban/2'; ?>">2</a>
            <a href="<?php echo $base_url.'nha-dat-ban/3'; ?>">3</a>
            <a href="<?php echo $base_url.'nha-dat-ban/4'; ?>">4</a>
            <a href="<?php echo $base_url.'nha-dat-ban/5'; ?>">5</a>
            <span>...</span>
        </div>
        <div class="home-pagination-right">
            <span>Tin nhà đất cho thuê mới nhất: </span>
            <a href="<?php echo $base_url.'nha-dat-cho-thue/1'; ?>">1</a>
            <a href="<?php echo $base_url.'nha-dat-cho-thue/2'; ?>">2</a>
            <a href="<?php echo $base_url.'nha-dat-cho-thue/3'; ?>">3</a>
            <a href="<?php echo $base_url.'nha-dat-cho-thue/4'; ?>">4</a>
            <a href="<?php echo $base_url.'nha-dat-cho-thue/5'; ?>">5</a>
            <span>...</span>
        </div>
    </div>
    <div class="cl"></div>
    <div align="justify" class="gioithieu" style="width:612px; height:112px; margin-left:15px; float:left; font-size:13px;">
	<p style="text-align:left;color:#0000;margin-top: 12px;font-weight:bold;line-height:20px;font-size: 14px;">Về Chúng tôi</p>
        <p style="text-align:left;color:#0000;margin-top: 4px;line-height: 20px;font-size: 13px;">
            <strong>SotayNhadat.vn</strong> là một trong số ít các kênh thông tin nhà đất cho thuê và <strong><a style="color: #057200;"href="http://sotaynhadat.vn/nha-dat-ban" title="nhà đất bán">nhà đất bán</a></strong> hàng đầu tại Việt Nam hiện nay! 
Chúng tôi truyền tải các thông tin đa dạng từ nhà đất bán, cho thuê, căn hộ, biệt thự, tin tức, dự án mới nhất đến cẩm nang phong thủy, tư vấn luật <strong><a style="color: #057200;"href="http://sotaynhadat.vn/" title="bất động sản">bất động sản</a></strong>... Để tiết kiệm thời gian, bạn nên dùng công cụ tìm kiếm. Hoặc tuyệt vời hơn, bạn có thể trực tiếp trải nghiệm!<br>
        </p>
    </div>
</div>
<style type="text/css">
    .home-pagination{height: 22px;border: 1px solid #ccc;margin-left: 15px;padding: 0px 5px;}
    .home-pagination .home-pagination-left{float: left;}
    .home-pagination .home-pagination-right{float: right;}
    .home-pagination span, .home-pagination a{line-height: 22px;}
    .home-pagination span{font-size: 14px;}
    .home-pagination a{font-size: 13px;color: #051c94;font-weight: 600;padding: 0px 1px;}
    .home-pagination a:hover{text-decoration: underline;}
    .boxhinh2{float: left;width: 101px;height: 101px;}
    .boxhinh2 img{width: 100px;height: 100px;}
    .tieude4{float: left;width: 180px;height: 100px;}
    .tieude4 a{margin-left: 0px;width: 180px;}
    .tieude4 a:hover{margin-left: 0px;width: 180px;}
</style>
<div class="right">
    <div style="display: none" class="boxnoibat">
        <div class="titledm" style="background-color:#1483d0; width:312px; height:35px; float:right; margin-bottom:5px;">
            <p  style="font-size:16px; font-weight:bold; color:#FFFFFF; margin-top:8px; margin-left:25px; float:left;">Tin nổi bật</p>
        </div>
        <div class="hot-news-top">
            <ul>
                <?php 
                    foreach($this->newsHot as $row): 
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    $catParent = new Newscatalogue($cat->parentcat_id);
                ?>
                <li>
                    <div  class="sreennoibat" style="width:312px; margin-top:10px; float:left;">
                        <div style="width: 111px; margin-left: 10px;" class="boxhinh2">
                            <a href="<?=$base_url.$catParent->name_none.'/'.$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                                <img style="width: 109px;" src="<?=$base_url.'img/news/'.$row->image?>" />
                            </a>
                        </div>
                        <div class="tieude4">
                            <a style="height: auto" href="<?=$base_url.$catParent->name_none.'/'.$cat->name_none.'/'.$row->title_none?>.html">
                                <p><?=$row->title_vietnamese;?></p>
                            </a>
                            <p><?=strlen($row->short_vietnamese) < 150 ? $row->short_vietnamese : cut_string($row->short_vietnamese, 150).'...';?></p>
                        </div>
                        <div class="line3"></div>
                    </div>
                </li>
                <?php endforeach; unset($row); ?>
            </ul>
        </div>
        <div class="sreentinnoibat" style="width:312px; float:left; margin-bottom:3px;">
            <div id="container" class="carousel-hot-news">
                <ul id="carousel">
                    <?php $i=0; foreach($this->newsHot as $row): $i++;
                        $cat = new Newscatalogue($row->newscatalogue_id);
                        $catParent = new Newscatalogue($cat->parentcat_id);
                    ?>
                        <li><a href="<?=$base_url.$catParent->name_none.'/'.$cat->name_none.'/'.$row->title_none?>.html"><?=strlen($row->title_vietnamese) < 65 ? $row->title_vietnamese : cut_string($row->title_vietnamese, 65).' ...';?></a></li>
                    <?php endforeach; unset($row); ?>
                </ul>
            </div>
        </div>
    </div>
    <style type="text/css">
        #carousel li{
            width: 100%;
            padding-top: 7px;
            height: 23px;
            border-bottom: 1px solid #CCC;
            padding-left: 10px;
        }
        .hot-news-top{
            width: 100%;
            height: 70px;
        }
    </style>
    <script type="text/javascript" src="<?=base_url();?>images/js/jcarousellite_1.0.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".carousel-hot-news").jCarouselLite({
                start: 1,
                auto: 8000,
                speed: 300,
                vertical: true,
                visible: 5
            });
        });
        $(function() {
            $(".hot-news-top").jCarouselLite({
                start: 0,
                auto: 8000,
                speed: 300,
                vertical: true,
                visible: 1
            });
        });
    </script>

    <?php echo $this->load->view('front/includes/adv_right'); ?>
	
	<?php echo $this->load->view('front/includes/nha-dat-ban-tai'); ?>
	
	<div class="sreenboxtwen mt-15px" style="width:300px; float:left;">
        <div class="boxduan-homepage">
            <span class="title-top-box">Dự án nổi bật</span>
            <div class="scroll-nice-02">
            <?php $i=0; foreach($this->projectHot as $row): $i++;
                $cat = new Newscatalogue($row->newscatalogue_id);
                if($i>4){ break; }
                ?>
            <div style="width:280px; float:left; margin-bottom:15px; margin-left: 3px;">
                <div class="boxhinh-duan-homepage">
                    <a href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                        <img alt="<?=$row->title_vietnamese;?>" src="<?php echo image('img/news/'.$row->image, 'news_280_150') ?>" />
                    </a>
                </div>
                <div class="tieudeduan2">
                    <a style="color: #000; width: 285px; height: 16px;" href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>"><p align="center" style="margin-top:4px; margin-left: 5px;"><?=$row->title_vietnamese;?></p></a>
                </div>
            </div>
            <?php endforeach; unset($row); unset($cat); ?>
            </div>
        </div>
        <script type="text/javascript" src="<?=$base_url;?>images/js/jquery.validate.js?v1"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#email-signup").validate({
                    rules:{
                        email:{
                            required: true,
                            email: true,
                            remote:{
                                url:'<?=$base_url;?>kiem-tra-email-sign-up',
                                type:'post',
                                data:{email :function(){return $(':input[name="email"]').val();}}
                            }
                        }
                    } ,
                    messages:{
                        email:{
                            required: 'Vui lòng nhập email',
                            email: "Nhập đúng địa chỉ email",
                            remote:"Email đã được sử dụng."
                        }
                    }
                });

                $('.submit-email-signup').click(function(){
                    if( !$('.main-form-email-signup label.error').is(':visible') ){
                        if( $(':input[name="email"]').val() != '' ){
                            $.ajax({
                                type: "POST",
                                url: '<?=$base_url;?>email-sign-up',
                                data: 'email='+$(':input[name="email"]').val(),
                                success: function(data){
                                    $(':input[name="email"]').val('');
                                    $('p.notice-msg').html(data);
                                }
                            });
                        }
                    }
                });

                $(':input[name="email"]').keypress(function(){
                    $('p.notice-msg').html('');
                });
            });
        </script>
        <div class="email-signup-mbnd">
            <p class="title-email-signup">Cập nhật xu hướng bất động sản</p>
            <p class="info-mail-signup">Đăng ký để nhận bản tin thị trường mới nhất từ STNĐ</p>
            <form id="email-signup" action="#" method="post">
                <div class="main-form-email-signup">
                    <input type="text" name="email" placeholder="Email của bạn"/>
                    <input class="submit-email-signup" type="button" value="Đồng ý"/>
                    <p class="notice-msg">&nbsp;</p>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$this->load->view('front/includes/footer2')?>
</div>
<script src="<?php echo $base_url; ?>images/js/jquery.nicescroll.min.js"></script>
<script>
    $(document).ready(function() {
        $(".scroll-nice-01").niceScroll({touchbehavior:false,cursorcolor:"#ccc",cursoropacitymax:0.7,cursorwidth:6,background:"#fff",autohidemode:false});
        $(".scroll-nice-02").niceScroll({touchbehavior:false,cursorcolor:"#ccc",cursoropacitymax:0.7,cursorwidth:6,background:"#fff",autohidemode:false});
    });
</script>