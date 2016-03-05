<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url;?>" title="Trang chủ">Trang chủ</a></div>
    <div class="linkdautrang"><span class="linkdautrang-active"><?php echo $category->name_vietnamese; ?></span></div>
</div>

<div class="main main-tin-tuc">
    <div class="left">
        <div class="titlenew-add">
            <h1><?php echo $category->name_vietnamese; ?></h1>
        </div>
        <div class="sreenspduan">
            <?php $i=0; foreach ($news as $row): $i++; ?>
            <div class="sreentinthitruong">
                <div class="boxhinhthitruonglon">
                    <a href="<?=$base_url.$category->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                        <img src="<?php echo image('img/news/'.$row->image, 'news_200_145') ?>" alt="<?=$row->title_vietnamese;?>" />
                    </a>
                </div>
                <div class="sreennoidungthitruong">
                    <div class="sreentieudethitruong">
                        <div class="tieudenoibat2">
                            <a href="<?=$base_url.$category->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                                <p><?=$row->title_vietnamese;?></p>
                            </a>
                        </div>
                    </div>
                    <div class="date-news"><p>Cập nhật: <?=get_date_from_sql($row->updated);?></p></div>
                    <div class="sreenndtinthitruong">
                        <p><?=strlen($row->short_vietnamese) < 300 ? $row->short_vietnamese: cut_string($row->short_vietnamese, 300).'...';?></p>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <?php endforeach; ?>
            
            <div class="phantrang">
                <div class="back">
                    <?=$this->pagination->create_links();?>
                </div>
            </div>
        </div>
    </div>

    <div class="cotright right">
        <?php echo $this->load->view('front/widget/search-estates'); ?>
		<?php echo $this->load->view('front/includes/adv_right'); ?>
    </div>
</div>