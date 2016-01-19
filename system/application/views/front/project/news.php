<div class="linktop">
    <div class="linkdautrang"><a href="<?php echo $base_url; ?>">Trang chủ</a></div>
    <div class="linkdautrang"><a href="<?=$base_url?>du-an">Dự án</a></div>
</div>
<!--main-->
<div class="main main-du-an">
    <div class="top-du-an-open fl">
        <ul class="fl">
            <?php
                $i=0; foreach($projectHot as $row): $i++;
                $cat = new Newscatalogue($row->newscatalogue_id);
                if ($i==5){break;}
            ?>
            <li>
                <a href=""><img src="<?php echo image('img/news/'.$row->image, 'news_228_200') ?>"></a>
                <a class="tool-tip-title" href="<?=$base_url.$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none?>.html" title="<?php echo $row->title; ?>">
                    <span><?=$row->title_vietnamese?></span>
                </a>
            </li>
            <?php endforeach; unset($row); ?>
        </ul>
    </div>
    <!--left-->
    <div class="left">

        <div class="top-vip">
            <div class="title-top-vip fl">
                <h1>Dự án Vũng Tàu</h1>
            </div>
            <div class="sreenspduan">
                <?php $i=0; foreach($projectVT as $row): $i++;
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                    <div class="sreensp1 <?php echo $i%3==0 ? 'last' : ''; ?>">
                        <div class="spduan">
                            <a href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese?>">
                                <img src="<?php echo image('img/news/'.$row->image, 'news_230_155') ?>" alt="<?=$row->title_vietnamese?>" />
                            </a>
                        </div>
                        <a class="tool-tip-title" href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html">
                            <span><?=$row->title_vietnamese?></span>
                        </a>
                    </div>
                    <?php if($i%3==0): ?>
                    <div class="line"></div>
                    <?php endif; ?>
                <?php endforeach; unset($row); ?>
            </div>

            <div class="title-top-vip fl">
                <h1>Dự án được xem nhiều</h1>
            </div>

            <div class="sreenspduan">
                <?php $i=0; foreach($projectViewMost as $row): $i++;
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                    <div class="sreensp1 <?php echo $i%3==0 ? 'last' : ''; ?>">
                        <div class="spduan">
                            <a href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese?>">
                                <img src="<?php echo image('img/news/'.$row->image, 'news_230_155') ?>" alt="<?=$row->title_vietnamese?>" />
                            </a>
                        </div>
                        <a class="tool-tip-title" href="<?=$base_url?>du-an/<?=$cat->name_none.'/'.$row->title_none?>.html">
                            <span><?=$row->title_vietnamese?></span>
                        </a>
                    </div>
                    <?php if($i%3==0): ?>
                    <div class="line"></div>
                    <?php endif; ?>
                <?php endforeach; unset($row); ?>
            </div>
            
        </div>

    </div>
    <!--end left-->
    <?=$this->load->view('front/project/col-right')?>
</div>
<!--end main-->