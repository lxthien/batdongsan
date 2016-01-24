<div class="linktop">
    <div class="linkdautrang"><a href="<?php echo $base_url; ?>">Trang chủ</a></div>
    <div class="linkdautrang"><span class="linkdautrang-active">Cẩm nang</span></div>
</div>

<div class="main main-tin-tuc">
    <div class="cotleft">
        <div class="tintuctop">
            <?php $cat = new Newscatalogue($newHotFirst->newscatalogue_id); ?>
            <div class="tintuctop-left">
                <div class="hinhtintuctop">
                    <a href="<?=$base_url.'cam-nang/'.$cat->name_none.'/'.$newHotFirst->title_none?>.html" title="<?php echo $newHotFirst->title_vietnamese;?>">
                        <img src="<?= image('img/news/'.$newHotFirst->image, 'news_575_373'); ?>" alt="<?php echo $newHotFirst->title_vietnamese;?>">
                    </a>
                </div>
                <a class="tool-tip-title" href="<?=$base_url.'cam-nang/'.$cat->name_none.'/'.$newHotFirst->title_none?>.html" title="<?php echo $newHotFirst->title_vietnamese;?>">
                    <span><?php echo $newHotFirst->title_vietnamese;?></span>
                </a>
            </div>
            <div class="tintuctop-right">
                <?php
                unset($cat);
                foreach($newHot as $row):
                    if($row->id != $newHotFirst->id):
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                <div class="tintuctop-right-item">
                    <div class="hinhtintuctopcon">
                        <a href="<?=$base_url.'cam-nang/'.$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                            <img src="<?= image('img/news/'.$row->image, 'news_425_165'); ?>" alt="<?=$row->title_vietnamese;?>">
                        </a>
                    </div>
                    <a class="tool-tip-title" href="<?=$base_url.'cam-nang/'.$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                        <span><?=$row->title_vietnamese;?></span>
                    </a>
                </div>
                    <?php endif;
                endforeach;
                ?>
            </div>
        </div>

        <div class="list-news-cat">
            <div class="list-news-cat">
                <?php foreach($this->guideCate as $rowCat): ?>
                <?php
                    $news = getNewsByCategory($rowCat->id);
                ?>
                <div class="list-news-cat-item fl">
                    <div class="title-top-vip fl">
                        <h1><?=$rowCat->name_vietnamese;?></h1>
                    </div>
                    <div class="list-news-cats fl">
                        <?php $i=0; foreach($news as $row): $i++; ?>
                        <div class="list-news-cats-item">
                            <a href="<?=$base_url.'cam-nang/'.$rowCat->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title_vietnamese; ?>">
                                <img src="<?php echo image('img/news/'.$row->image, 'news_240_155') ?>" alt="<?php echo $row->title_vietnamese; ?>">
                            </a>
                            <a class="tool-tip-title" href="<?=$base_url.'cam-nang/'.$rowCat->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title_vietnamese; ?>">
                                <span><?php echo $row->title_vietnamese; ?></span>
                            </a>
                        </div>
                        <?php if ($i==2):?><div class="line"></div><?php endif; ?>
                        <?php endforeach; unset($row); ?>
                    </div>
                </div>
                <?php endforeach; unset($row); ?>
            </div>
            <div class="list-news-cat-item fl">
                <div class="title-top-vip fl">
                    <h1>Tin dự án</h1>
                </div>
                <div class="list-news-cats fl">
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="line"></div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-news-cat-item fl">
                <div class="title-top-vip fl">
                    <h1>Tin dự án</h1>
                </div>
                <div class="list-news-cats fl">
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="line"></div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-news-cat-item fl">
                <div class="title-top-vip fl">
                    <h1>Tin dự án</h1>
                </div>
                <div class="list-news-cats fl">
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="line"></div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-news-cat-item fl">
                <div class="title-top-vip fl">
                    <h1>Tin dự án</h1>
                </div>
                <div class="list-news-cats fl">
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="line"></div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                    <div class="list-news-cats-item">
                        <a href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <img src="<?php echo image($row->photo, 'estate_165_130') ?>" alt="<?php echo $row->title; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                            <span><?php echo $row->title; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <?php
        foreach ($newNews as $row):
            $cat = new Newscatalogue($row->newscatalogue_id);
            ?>
            <div class="sreentinthitruong">
                <div class="boxhinhthitruonglon">
                    <a href="<?=$base_url?>cam-nang/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                        <img style="width: 196px; height: 124px;" src="<?php echo image('img/news/'.$row->image, 'news_196_124') ?>" alt="<?=$row->title_vietnamese;?>" width="196" height="124">
                    </a>
                </div>
                <div class="sreennoidungthitruong" style=" float:left; margin-top:6px; width:430px; margin-left:3px;">
                    <div class="sreentieudethitruong" style="width:430px; float:right; margin-bottom:3px; margin-top:0px; ">
                        <div class="tieudenoibat2">
                            <a style="height: auto; width: 100%;" href="<?=$base_url?>cam-nang/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                                <p style="margin-left:12px; "><?=$row->title_vietnamese;?></p>
                            </a>
                        </div>
                    </div>
                    <div style="width:430px;margin-bottom:8px;float:left;margin-top: 3px;">
                        <div style="float:left;">
                            <div class="linktinupdate"><a style="color: #109502;" href="<?php echo $base_url?>cam-nang/<?=$cat->name_none; ?>" title="<?=$cat->name_vietnamese;?>"><p style="margin-left:12px;"><?=$cat->name_vietnamese;?></p></a></div>
                        </div>
                        <p style="color:#999999;font-size:14px;float:left;margin-top:-1px;margin-left:5px;margin-right:5px;">-</p>
                        <p style="color:#999999; font-size:13px; margin-top:0px; float:left;"><?=get_date_from_sql($row->created);?></p>
                    </div>
                    <div class="sreenndtinthitruong"
                         style="width:410px; margin-left:12px; height:70px; float:left;color:#333333;">
                        <p align="justify" style="margin-left:0px; font-size:14px; font-weight:lighter;">
                            <?=strlen($row->short_vietnamese) < 300 ? $row->short_vietnamese: cut_string($row->short_vietnamese, 300).'...';?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="linedot"></div>
        <?php endforeach; unset($row); ?>
        -->
    </div>

    <!--
    <div class="cotright">
        <div style="width:300px; float:right; margin-bottom: 15px;">
            <?php echo $this->load->view('front/includes/adv_right_s'); ?>
        </div>
        <div
            style="width:300px; height:29px; float:right; background:#109502; font-size:16px; font-weight:bold; color:#FFFFFF; margin-top:0px; margin-bottom:8px;">
            <p style=" margin-left:10px; margin-top:6px;">Tin được xem nhiều</p>
        </div>
        <div style="width:300px; float:right;  margin-top:10px;">
            <?php
            foreach ($newViewMost as $row):
                $cat = new Newscatalogue($row->newscatalogue_id);
                ?>
                <div class="sreennoibat" style="width:300px;  margin-bottom:20px; float:right;">
                    <div class="boxhinhxemnhieu">
                        <a href="<?=$base_url?>cam-nang/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                            <img src="<?=image('img/news/'.$row->image, 'news_115_70');?>" title="<?=$row->title_vietnamese;?>" width="115" height="70">
                        </a>
                    </div>
                    <div style=" width:180px; float:right; ">
                        <p class="tieudetinxemnhieu" style="margin-left:3px;">
                            <a href="<?=$base_url?>cam-nang/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>"><?=$row->title_vietnamese;?></a>
                        </p>
                    </div>
                </div>
            <?php endforeach; unset($row); ?>
        </div>
    </div>
    -->
</div>
<!-- end main-->