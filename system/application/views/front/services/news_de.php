<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url?>" title="Sàn nhà đất">Trang chủ</a></div>
    <div class="linkdautrang"><a href="<?=$base_url?>dich-vu" title="Dịch vụ">Dịch vụ</a></div>
    <div class="linkdautrang"><span class="linkdautrang-active"><?=$news->title_vietnamese;?></span></div>
</div>

<div class="main">
    <div class="left">
        <div class="tintuctop">
            <div class="news-detail">
                <h1 id="ctl27_ctl01_divSummary"><?=$news->title_vietnamese;?></h1>
                <p class="date-time">Cập nhật <?=get_date_from_sql($news->created);?></p>
                <div class="nutmangxahoi">
                    <div>
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
                <div class="nutmangxahoi">
                    <div>
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
                <div class="sreentag">
                    <div class="tag"></div>
                    <p style="width:100%;margin-left:60px;margin-top:3px;">
                        <?php $i=0; foreach($tag as $tagSub): $i++;?>
                            <a title="<?=$tagSub;?>" href="<?=$base_url.'tags/'.remove_vn($tagSub)?>"><?=$tagSub;?></a> <?php echo $i<count($tag) ? ',':''; ?>
                        <?php endforeach ?>
                    </p>
                </div>
                <div class="cl"></div>
                <div class="news-related">
                    <h3 class="title-news-related">Các tin khác</h3>
                    <?php
                        $i=0; foreach ($related_news as $row): $i++;
                        $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                    <div class="sreenspkhac <?php echo $i%3==0 ? 'sreenspkhac-three' : ''; ?>">
                        <div class="spkhac">
                            <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese?>">
                                <img src="<?php echo image('img/news/'.$row->image, 'news_231_145') ?>" alt="<?=$row->title_vietnamese?>" />
                            </a>
                        </div>
                        <div class="titleduankhac">
                            <h4><a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese?>"><?=$row->title_vietnamese?></a></h4>
                        </div>
                    </div>
                    <?php if ($i%3==0): ?><div class="line"></div><?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="cl"></div>
            </div>
        </div>
    </div>
    <?=$this->load->view('front/project/col-right')?>
</div>