<link rel="stylesheet" href="<?php echo $base_url.'images/css/style-new-282015.css'; ?>"/>
<div class="linktop" style=" width:960px;height:20px; float:left; margin-top:12px; margin-bottom: 2px;">
    <?php $i = 0; foreach ($this->guideCate as $row): $i++; ?>
        <div class="linkdautrang" style="<?php echo $i==1?'margin-left:10px;':''; ?> width:auto; float:left;">
            <a class="<?php echo $row->name_none == $this->uri->segment(2, '') ? 'linkdautrang-active' : ''; ?>" href="<?=$base_url?>cam-nang/<?=$row->name_none?>"><?=$row->name_vietnamese;?></a>
        </div>
    <?php endforeach; unset($row); ?>
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
                    <a href="<?=$base_url?>cam-nang/<?=$category->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                        <img src="<?php echo image('img/news/'.$row->image, 'news_200_145') ?>" alt="<?=$row->title_vietnamese;?>" />
                    </a>
                </div>
                <div class="sreennoidungthitruong">
                    <div class="sreentieudethitruong">
                        <div class="tieudenoibat2">
                            <a href="<?=$base_url?>cam-nang/<?=$category->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                                <p><?=$row->title_vietnamese;?></p>
                            </a>
                        </div>
                    </div>
                    <div class="date-news">
                        <p>Cập nhật: <?=get_date_from_sql($row->created);?></p>
                    </div>
                    <div class="sreenndtinthitruong">
                        <p>
                            <?=strlen($row->short_vietnamese) < 300 ? $row->short_vietnamese: cut_string($row->short_vietnamese, 300).'...';?>
                        </p>
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
        <div class="news-right-item">
            <div class="news-right-title">
                <p>Tin dự án</p>
            </div>
            <div class="news-right-content">
                <?php
                foreach ($newNews as $row):
                $cat = new Newscatalogue($row->newscatalogue_id);
                ?>
                    <div class="sreennoibat">
                        <div class="boxhinhxemnhieu">
                            <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html">
                                <img src="<?=image('img/news/'.$row->image, 'news_115_70');?>" alt="<?=$row->title_vietnamese;?>" width="115" height="70" >
                            </a>
                        </div>
                        <div style="width:140px; float:right;">
                            <p class="tieudetinxemnhieu">
                                <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html"><?=$row->title_vietnamese;?></a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
        </div>
        <div class="news-right-item">
            <div class="news-right-title">
                <p>Tin thị trường</p>
            </div>
            <div class="news-right-content">
                <?php
                foreach ($newViewMost as $row):
                    $cat = new Newscatalogue($row->newscatalogue_id);
                ?>
                    <div class="sreennoibat">
                        <div class="boxhinhxemnhieu">
                            <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html">
                                <img src="<?=image('img/news/'.$row->image, 'news_115_70');?>" alt="<?=$row->title_vietnamese;?>" width="115" height="70" >
                            </a>
                        </div>
                        <div style="width:180px; float:right;">
                            <p class="tieudetinxemnhieu">
                                <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html"><?=$row->title_vietnamese;?></a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
        </div>
    </div>
</div>