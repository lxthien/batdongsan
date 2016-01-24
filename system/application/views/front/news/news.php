<div class="linktop">
    <div class="linkdautrang"><a href="<?php echo $base_url; ?>">Trang chủ</a></div>
    <div class="linkdautrang"><span class="linkdautrang-active">Tin Tức</span></div>
</div>

<div class="main main-tin-tuc">
    <div class="cotleft">
        <div class="tintuctop">
            <?php $cat = new Newscatalogue($newHotFirst->newscatalogue_id); ?>
            <div class="tintuctop-left">
                <div class="hinhtintuctop">
                    <a href="<?=$base_url.'tin-tuc/'.$cat->name_none.'/'.$newHotFirst->title_none?>.html" title="<?php echo $newHotFirst->title_vietnamese;?>">
                        <img src="<?= image('img/news/'.$newHotFirst->image, 'news_575_373'); ?>" alt="<?php echo $newHotFirst->title_vietnamese;?>">
                    </a>
                </div>
                <a class="tool-tip-title" href="<?=$base_url.'tin-tuc/'.$cat->name_none.'/'.$newHotFirst->title_none?>.html" title="<?php echo $newHotFirst->title_vietnamese;?>">
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
                        <a href="<?=$base_url.'tin-tuc/'.$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                            <img src="<?= image('img/news/'.$row->image, 'news_425_165'); ?>" alt="<?=$row->title_vietnamese;?>">
                        </a>
                    </div>
                    <a class="tool-tip-title" href="<?=$base_url.'tin-tuc/'.$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                        <span><?=$row->title_vietnamese;?></span>
                    </a>
                </div>
                    <?php endif;
                endforeach;
                ?>
            </div>
        </div>

        <div class="list-news-cat">
            <?php foreach($this->newsCate as $rowCat): ?>
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
                        <a href="<?=$base_url.'tin-tuc/'.$rowCat->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title_vietnamese; ?>">
                            <img src="<?php echo image('img/news/'.$row->image, 'news_240_155') ?>" alt="<?php echo $row->title_vietnamese; ?>">
                        </a>
                        <a class="tool-tip-title" href="<?=$base_url.'tin-tuc/'.$rowCat->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title_vietnamese; ?>">
                            <span><?php echo $row->title_vietnamese; ?></span>
                        </a>
                    </div>
                    <?php if ($i==2):?><div class="line"></div><?php endif; ?>
                    <?php endforeach; unset($row); ?>
                </div>
            </div>
            <?php endforeach; unset($row); ?>
        </div>
    </div>
</div>