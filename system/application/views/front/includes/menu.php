<div class="header-menu">
    <div id="page-navigative-menu">
        <div class="sreenmenu">
            <div class="sreenhome">
                <div class="home"><h2><a class="<?=$this->menu_active == 'home' ? 'active' : '';?>" href="<?=$base_url;?>"></a></h2></div>
            </div>
            <ul class="dropdown-navigative-menu">
                <li class="lv0 <?=$this->menu_active == 'nha-dat-ban' ? 'active' : '';?>">
                    <div class="sreen1">
                        <h2><a href="<?=$base_url?>nha-dat-ban" class="haslin ">Nhà đất bán</a></h2>
                    </div>
                    <ul>
                        <?php $i=0; foreach($this->typeHouseSale as $row): $i++; ?>
                            <li class="lv1" <?php if($i>1) echo 'style="margin-top:-2px;"';?>>
                                <a href="<?=$base_url?>nha-dat-ban/<?=$row->name_none;?>" class="haslink "><?=$row->name;?></a>
                            </li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li class="lv0  <?=$this->menu_active == 'nha-dat-cho-thue' ? 'active' : '';?>">
                    <div class="sreen1">
                        <h2><a href="<?=$base_url?>nha-dat-cho-thue" class="haslin ">Nhà đất cho thuê</a></h2>
                    </div>
                    <ul>
                        <?php $i=0; foreach($this->typeHouseLease as $row): $i++; ?>
                            <li class="lv1" <?php if($i>1) echo 'style="margin-top:-2px;"';?>>
                                <a href="<?=$base_url?>nha-dat-cho-thue/<?=$row->name_none;?>" class="haslink "><?=$row->name;?></a>
                            </li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li class="dropdown-navigative-menu2 <?=$this->menu_active == 'project' ? 'active' : '';?>">
                    <div class="sreen1">
                        <h2><a href="<?=$base_url?>du-an" class="haslin ">Dự án</a></h2>
                    </div>
                    <ul>
                        <?php $i=0; foreach($this->projectsCate as $row): $i++; ?>
                            <li class="lv1" <?php if($i>1) echo 'style="margin-top:-2px;"';?>>
                                <a href="<?=$base_url?>du-an/<?=$row->name_none;?>" class="haslink "><?=$row->name_vietnamese;?></a>
                            </li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li class="dropdown-navigative-menu2 <?=$this->menu_active == 'news' ? 'active' : '';?>">
                    <div class="sreen1">
                        <h2><a href="<?=$base_url?>tin-tuc" class="haslin ">Tin tức</a></h2>
                    </div>
                    <ul>
                        <?php $i=0; foreach($this->newsCate as $row): $i++; ?>
                            <li class="lv1" <?php if($i>1) echo 'style="margin-top:-2px;"';?>>
                                <a href="<?=$base_url?>tin-tuc/<?=$row->name_none;?>" class="haslink "><?=$row->name_vietnamese;?></a>
                            </li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li class="dropdown-navigative-menu2 <?=$this->menu_active == 'news' ? 'active' : '';?>">
                    <div class="sreen1">
                        <h2><a href="<?=$base_url?>dich-vu-bds" class="haslin ">Dịch vụ BĐS</a></h2>
                    </div>
                    <ul>
                        <?php $i=0; foreach($this->newsCate as $row): $i++; ?>
                            <li class="lv1" <?php if($i>1) echo 'style="margin-top:-2px;"';?>>
                                <a href="<?=$base_url?>tin-tuc/<?=$row->name_none;?>" class="haslink "><?=$row->name_vietnamese;?></a>
                            </li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li class="dropdown-navigative-menu2 <?=$this->menu_active == 'news' ? 'active' : '';?>">
                    <div class="sreen1">
                        <h2><a href="<?=$base_url?>cam-nang" class="haslin ">Cẩm nang</a></h2>
                    </div>
                    <ul>
                        <?php $i=0; foreach($this->newsCate as $row): $i++; ?>
                            <li class="lv1" <?php if($i>1) echo 'style="margin-top:-2px;"';?>>
                                <a href="<?=$base_url?>tin-tuc/<?=$row->name_none;?>" class="haslink "><?=$row->name_vietnamese;?></a>
                            </li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="cl"></div>