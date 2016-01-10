<link rel="stylesheet" href="<?php echo $base_url.'images/css/style-new-282015.css'; ?>"/>

<div class="linktop">
    <div class="linkdautrang"><a href="<?php echo $base_url; ?>">Trang ch&#7911;</a></div>
    <div class="linkdautrang"><a class="linkdautrang-active" href="<?php echo $base_url.'tin-tuc'; ?>">Tin Tức</a></div>
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
    </div>
</div>