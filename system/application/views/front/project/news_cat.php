<link rel="stylesheet" href="<?php echo $base_url.'images/css/style-new-282015.css'; ?>"/>

<div class="linktop" style=" width:600px;height:20px; float:left; margin-top:8px; margin-left:25px; margin-bottom:10px; ">
    <div class="link" style="margin-left:10px; width:auto; float:left;"><a href="<?=$base_url;?>" title="Sàn nhà đất">Trang chủ</a></div>
    <p style="float:left; margin-left:5px; margin-right:5px;">-</p>
    <div class="link" style=" width:auto; float:left;"><a href="<?=$base_url;?>du-an" title="Dự án">Dự án</a></div>
    <p style="float:left; margin-left:5px; margin-right:5px;">-</p>
    <div class="link" style=" width:auto; float:left;"><a href="<?=$base_url;?>du-an/<?=$category->name_none;?>" title="<?=$category->name_vietnamese;?>"><?=$category->name_vietnamese;?></a></div>
</div>

<div class="main" style="width:960px;float:left;margin-top:5px;  margin-left:12px; ">
    <div class="left">
        <div class="top-vip">
            <div class="title-top-vip fl">
                <h1><?=$category->name_vietnamese;?></h1>
            </div>
            <div class="sreenspduan">
                <?php $i=0; foreach($news as $row): $i++; ?>
                    <div class="sreensp1 <?php echo $i%3==0 ? 'last' : ''; ?>">
                        <div class="spduan">
                            <a href="<?=$base_url?>du-an/<?=$category->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                                <img src="<?php echo image('img/news/'.$row->image, 'news_160_150') ?>" alt="<?=$row->title_vietnamese;?>" />
                            </a>
                        </div>
                        <a class="tool-tip-title" href="<?=$base_url?>du-an/<?=$category->name_none.'/'.$row->title_none?>.html">
                            <span><?=$row->title_vietnamese?></span>
                        </a>
                    </div>
                    <?php if($i%3==0): ?>
                    <div class="line"></div>
                    <?php endif; ?>
                <?php endforeach; unset($row); ?>

                <div class="phantrang">
                    <div class="back">
                        <?=$this->pagination->create_links();?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?=$this->load->view('front/project/col-right')?>
</div>