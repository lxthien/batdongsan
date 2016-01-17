<link rel="stylesheet" href="<?php echo $base_url.'images/css/style-new-282015.css'; ?>"/>

<div class="linktop">
    <div class="linkdautrang">
        <h3><a href="<?=$base_url?>" title="Sàn nhà đất">Trang chủ</a></h3>
    </div>
    <div class="linkdautrang">
        <h3><a href="<?=$base_url?>dich-vu" title="Dự án">Dịch vụ</a></h3>
    </div>
    <div class="linkdautrang">
        <h3><a class="linkdautrang-active" href="<?=$base_url?>du-an/<?=$category->name_none.'/'.$news->title_none?>.html" title="<?=$news->title_vietnamese;?>"><?=$news->title_vietnamese;?></a></h3>
    </div>
</div>

<div class="main">
    <div class="left">
        <div class="chi-tiet-du-an sreenspduan">
            <div class="sreennoidungchitiet">
                <div class="sreentieudethitruong">
                    <h1><?=$news->title_vietnamese;?></h1>
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
                <h3>Dịch vụ khác</h3>
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