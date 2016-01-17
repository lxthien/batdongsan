<div class="linktop">
    <?php $i = 0; foreach($this->newsCate as $row): $i++; ?>
        <div class="linkdautrang">
            <a class="<?php echo $row->name_none == $this->uri->segment(2, '') ? 'linkdautrang-active' : ''; ?>" href="<?=$base_url?>tin-tuc/<?=$row->name_none?>"><?=$row->name_vietnamese;?></a>
        </div>
    <?php endforeach; unset($row); ?>
</div>

<div class="main">
    <div class="left">
        <div class="tintuctop">
            <div class="news-detail">
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
                    <span style="line-height: 20px;float: right;margin-right: 15px;font-size: 12px; color: #999999;"><?=$news->source;?></span>
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
    <div class="right">
        <div class="boxnoibat">
            <span class="title-top-box">Tin mới nhất</span>
            <div class="boxnoibat-main">
                <?php
                foreach ($newView as $row):
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                    <div class="sreennoibat">
                        <div class="boxhinhxemnhieu">
                            <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html">
                                <img src="<?=image('img/news/'.$row->image, 'news_100_70');?>" alt="<?=$row->title_vietnamese;?>" width="115" height="70" >
                            </a>
                        </div>
                        <div class="tieudetinxemnhieu">
                            <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html"><?=$row->title_vietnamese;?></a>
                        </div>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
        </div>

        <div class="boxnoibat">
            <span class="title-top-box">Tin được xem nhiều</span>
            <div class="boxnoibat-main">
                <?php
                foreach ($newViewMost as $row):
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                    <div class="sreennoibat">
                        <div class="boxhinhxemnhieu">
                            <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html">
                                <img src="<?=image('img/news/'.$row->image, 'news_100_70');?>" alt="<?=$row->title_vietnamese;?>" width="115" height="70" >
                            </a>
                        </div>
                        <div class="tieudetinxemnhieu">
                            <a href="<?=$base_url?>tin-tuc/<?=$cat->name_none.'/'.$row->title_none?>.html"><?=$row->title_vietnamese;?></a>
                        </div>
                    </div>
                <?php endforeach; unset($row); ?>
            </div>
        </div>

        <?php echo $this->load->view('front/includes/adv_right_s'); ?>
    </div>
</div>