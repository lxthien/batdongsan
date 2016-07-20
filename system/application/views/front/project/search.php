<div class="linktop">
    <div class="linkdautrang"><a href="<?=$base_url?>" title="Sàn nhà đất">Trang chủ</a></div>
    <div class="linkdautrang"><span class="linkdautrang-active">Tìm kiếm dự án</span></div>
</div>
<div class="main du-an-search">
    <div class="left">
        <div class="top-vip">
            <div class="title-top-vip fl">
                <h1>Tìm kiếm dự án</h1>
            </div>
            <div class="sreenspduan">
                <?php $i=0; foreach($estates as $row): $i++;
                    $cat = new Newscatalogue($row->newscatalogue_id);
                    ?>
                    <div class="sreensp1 <?php echo $i%3==0 ? 'last' : ''; ?>">
                        <div class="spduan">
                            <a href="<?=$base_url?>du-an/<?=$category->name_none.'/'.$row->title_none?>.html" title="<?=$row->title_vietnamese;?>">
                                <img src="<?php echo image('img/news/'.$row->image, 'news_230_155') ?>" alt="<?=$row->title_vietnamese;?>" />
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
            </div>
        </div>
    </div>
    <?php echo $this->load->view('front/project/col-right')?>
    <?php echo $this->load->view('front/includes/footer')?>
</div>