<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url;?>" title="Sàn nhà đất">Trang chủ</a></div>
    <div class="linkdautrang"><span class="linkdautrang-active"><?php echo $value; ?></span></div>
</div>
<div class="main search-new">
    <!--left-->
    <div class="left">
        <div class="titlenew-add">
            <h1>Từ khóa tìm kiếm "<?php echo $value; ?>"</h1>
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
            
            <?php if($this->pagination->total_rows >= $this->pagination->per_page): ?>
            <div class="phantrang">
                <div class="back">
                    <?=$this->pagination->create_links();?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="right">
        <?=$this->load->view('front/estates/col-right-default');?>
    </div>
</div>