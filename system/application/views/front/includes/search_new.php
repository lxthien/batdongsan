<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url;?>" title="Sàn nhà đất">Trang chủ</a></div>
</div>
<div class="main">
    <!--left-->
    <div class="left">
        <div class="titlenew-add">
            <h1>Tìm kiếm</h1>
        </div>
        <!--tin tuc-->
        <div class="sreenspduan">
            <?php $i=0; foreach($news as $row): $i++;
                $cat = new Newscatalogue($row->newscatalogue_id);
                ?>
                <div class="sreentinthitruong">
                    <div class="boxhinhthitruonglon">
                        <a href="<?=$base_url.$cat->parentcat->name_none.'/'.$row->newscatalogue->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                            <img src="<?php echo image('img/news/'.$row->image, 'news_198_148') ?>" alt="<?=$row->title_vietnamese;?>" />
                        </a>
                    </div>
                    <div class="sreennoidungthitruong">
                        <div class="sreentieudethitruong">
                            <div class="tieudenoibat2">
                                <a href="<?=$base_url.$cat->parentcat->name_none.'/'.$row->newscatalogue->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
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
            <?php endforeach; ?>
            <div class="phantrang">
                <div class="back">
                    <?=$this->pagination->create_links();?>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="news-right-item boxnoibat">
            <span class="title-top-box">Dự án nổi bật</span>
            <?php foreach($this->projectHot as $row):
                $cat = new Newscatalogue($row->newscatalogue_id);
                ?>
                <div class="sreennoibat">
                    <div class="boxhinhxemnhieu">
                        <a href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html">
                            <img src="<?=image('img/news/'.$row->image, 'news_100_70');?>" alt="<?=$row->title_vietnamese;?>" width="115" height="70" >
                        </a>
                    </div>
                    <div class="tieudetinxemnhieu">
                        <a href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html"><?=$row->title_vietnamese;?></a>
                    </div>
                </div>
            <?php endforeach; unset($row); unset($cat); ?>
        </div>
        <?=$this->load->view('front/news/col-right')?>
    </div>
</div>