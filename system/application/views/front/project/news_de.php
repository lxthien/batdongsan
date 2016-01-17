<div class="linktop">
    <div class="linkdautrang">
        <h3 style="font-weight: normal"><a href="<?=$base_url?>" title="Sàn nhà đất">Trang chủ</a></h3>
    </div>
    <div class="linkdautrang">
        <h3 style="font-weight: normal"><a href="<?=$base_url?>du-an" title="Dự án">Dự án</a></h3>
    </div>
    <div class="linkdautrang">
        <h3 style="font-weight: normal"><a href="<?=$base_url?>du-an/<?=$category->name_none?>" title="<?=$category->name_vietnamese?>"><?=$category->name_vietnamese?></a></h3>
    </div>
    <div class="linkdautrang">
        <h3 style="font-weight: normal"><a class="linkdautrang-active" href="<?=$base_url?>du-an/<?=$category->name_none.'/'.$news->title_none?>.html" title="<?=$news->title_vietnamese;?>"><?=$news->title_vietnamese;?></a></h3>
    </div>
</div>

<div class="main">
    <div class="left">
        <div class="chi-tiet-du-an sreenspduan news-detail">
            <h1 id="ctl27_ctl01_divSummary"><?=$news->title_vietnamese;?></h1>
            <p class="date-time">Cập nhật <?=get_date_from_sql($news->created);?></p>
            <div class="nutmangxahoi">
                <div style="float: left;">
                    <!-- Button like facebook -->
                    <div class="fb-like" data-href="<?php echo $this->url; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    <!-- Button like facebook -->
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-size="medium" data-href="<?php echo $this->url; ?>"></div>
                    <!-- Place this tag where you want the +1 button to render. -->
                    <!-- Button share facebook -->
                    <div class="fb-share-button" data-href="<?php echo $this->url; ?>" data-layout="button"></div>
                    <!-- Button share facebook -->
                    <!-- Place this tag where you want the share button to render. -->
                    <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php echo $this->url; ?>"></div>
                </div>
            </div>
            <div id="divContents">
                <?=$news->full_vietnamese;?>
            </div>
            <div class="sreentag2" >
                <div class="tag"></div>
                <p>
                    <?php foreach($tag as $tagSub): ?>
                        <a href="<?=$base_url.'tags/'.remove_vn($tagSub)?>"><?=$tagSub;?></a> ,
                    <?php endforeach ?>
                </p>
            </div>
            <div class="duankhac">
                <h3>Dự án khác</h3>
            </div>
            <div class="sreenduankhac">
                <?php $i=0; foreach($related_news as $row): $i++;
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                    <div class="sreenspkhac1 <?php echo $i%2==0 ? 'sreenspkhac1-right' : ''?>">
                        <div class="spkhac">
                            <a href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese?>">
								<img src="<?php echo image('img/news/'.$row->image, 'news_123_116') ?>" alt="<?=$row->title_vietnamese?>" />
                            </a>
                        </div>
                        <div class="titleduankhac">
                            <h4><a href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese?>"><?=$row->title_vietnamese?></a></h4>
                            <p>Chủ đầu tư: <?=$row->investors?></p>
                            <p>Vị trí: <?=$row->estatecity->name?></p>
                        </div>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
        </div>
    </div>
    <?=$this->load->view('front/project/col-right')?>
</div>