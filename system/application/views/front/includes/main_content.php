<div class="home-header">
    <div class="home-nav">
        <div class="wrapper">
            <ul>
                <li><h2><a class="icon-home" href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>images/assets/icon-home.png"></a></h2></li>
                <li><h2><a href="<?php echo $base_url; ?>gioi-thieu.html">Giới thiệu</a></h2></li>
                <li><h2><a href="<?php echo $base_url?>nha-dat-ban">Nhà đất bán</a></h2>
                    <ul>
                        <?php $i=0; foreach($this->typeHouseSale as $row): $i++; ?>
                        <li><h2><a href="<?php echo $base_url?>nha-dat-ban/<?=$row->name_none;?>"><?php echo $row->name;?></a></h2></li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li><h2><a href="">Nhà đất cho thuê</a></h2>
                    <ul>
                        <?php foreach($this->typeHouseLease as $row): ?>
                        <li><a href="<?=$base_url?>nha-dat-cho-thue/<?=$row->name_none;?>"><?=$row->name;?></a></li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li><h2><a href="<?php echo $base_url; ?>du-an">Dự án</a></h2>
                    <ul>
                        <?php foreach($this->projectsCate as $row): ?>
                        <li><a href="<?=$base_url?>du-an/<?=$row->name_none;?>"><?=$row->name_vietnamese;?></a></li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li><h2><a href="<?php echo $base_url; ?>tin-tuc">Tin tức</a></h2>
                    <ul>
                        <?php foreach($this->newsCate as $row): ?>
                        <li><a href="<?=$base_url?>tin-tuc/<?=$row->name_none;?>"><?=$row->name_vietnamese;?></a></li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li><h2><a href="<?php echo $base_url; ?>cam-nang">Cẩm nâng</a></h2>
                    <ul>
                        <?php foreach($this->guideCate as $row):?>
                        <li><a href="<?=$base_url?>cam-nang/<?=$row->name_none;?>"><?=$row->name_vietnamese;?></a></li>
                        <?php endforeach; unset($row); ?>
                    </ul>
                </li>
                <li><h2><a href="<?php echo $base_url; ?>lien-he.html">Liên hệ</a></h2></li>
            </ul>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="home-right-bar">
        <h3 class="home-title-services">Dịch vụ chính</h3>
        <?php foreach ($this->services as $row): ?>
        <div class="home-service-item">
            <h1><a href="<?=$base_url.'dich-vu-bds/'.$row->title_none?>.html"><?=$row->title_vietnamese;?></a></h1>
            <div class="home-descripton-service">
                <p><?=strlen($row->short_vietnamese) < 300 ? $row->short_vietnamese: cut_string($row->short_vietnamese, 300).'...';?></p>
                <a href="<?=$base_url.'dich-vu-bds/'.$row->title_none?>.html">Chi tiết</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="home-search">
        <div class="search-simple">
            <form id="search-simple" method="post" action="<?php echo $base_url.'tim-kiem'; ?>">
                <input type="text" placeholder="Nhập theo từ khóa ... " name="value" />
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
        <div class="search-advanced">
            <h4 class="title-advanced">Tìm kiếm nâng cao</h4>
            <form id="search-advanced" action="<?=$base_url?>tim-kiem-bat-dong-san" method="post">
                <div class="boxseach">
                    <label><input type="radio" name="estatecatalogue_id" value="1"> Mua bán</label>
                    <label><input type="radio" name="estatecatalogue_id" value="2"> Mua bán</label>
                </div>
                <div class="formtimkiem">
                    <select name="estatetype_id" id="estatetype_id">
                        <option value="" style="margin-top:2px;">Chọn Loại nhà đất</option>
                    </select>
                </div>
                <div class="formtimkiem">
                    <select name="estatecity_id" id="estatecity_id" class="estatecity_id">
                        <option value="" selected="selected" style="margin-top:2px;">Chọn Tỉnh/TP</option>
                        <?php foreach($estateProvince as $row): ?>
                            <option value="<?=$row->id?>"><?=$row->name?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="formtimkiem">
                    <select name="estatedistrict_id" id="estatedistrict_id">
                        <option value="">Chọn Quận/Huyện</option>
                    </select>
                </div>
                <div class="formtimkiem">
                    <select name="estatearea_id" id="estatearea_id">
                        <option value="" selected="selected">Chọn Diện tích</option>
                        <option value="-1">Không xác định</option>
                        <?php foreach($this->estateareas as $row): ?>
                            <option <?php if($object->estatecity_id == $row->id) echo 'selected="selected"'; ?> value="<?=$row->id?>"><?=$row->label;?></option>
                        <?php endforeach; unset($row); ?>
                    </select>
                </div>
                <div class="formtimkiem">
                    <select name="estateprice_id" id="estateprice_id">
                        <option value="" selected="selected">Chọn Mức giá</option>
                    </select>
                </div>
                <div class="formtimkiem">
                    <select name="estatedirection_id" id="estatedirection_id">
                        <option value="" selected="selected">Chọn Hướng nhà</option>
                        <?php foreach($this->estateDirection as $row): ?>
                            <option value="<?=$row->id?>"><?=$row->name;?></option>
                        <?php endforeach; unset($row); ?>
                    </select>
                </div>
                <input class="submit-top-main" type="submit" value="Tìm ngay"/>
            </form>
        </div>
    </div>
</div>