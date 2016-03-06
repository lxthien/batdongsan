<div class="boxtimkiembds-simple">
    <form action="<?php echo $base_url.'tim-kiem'; ?>" method="post">
        <div class="main-search-simple">
            <input type="text" placeholder="Nhập theo từ khóa ..." name="value" >
            <button>Tìm kiếm</button>
        </div>
    </form>
</div>
<div class="boxtimkiembds">
    <span class="title-top-box">Tìm kiếm nâng cao</span>
    <div class="sreenboxseach2">
        <form action="<?=$base_url?>tim-kiem-bat-dong-san" method="post">
            <div  class="boxseach" style="width:100px; float:left; margin-left: 8px;">
                <label>
                    <input type="radio" style="float:left; margin-top:10px;" name="estatecatalogue_id" value="1"/>
                    <p style="font-weight:500; font-size:14px; color:#000000; float:left; margin-top:8px; margin-left:5px;">Mua - Bán</p>
                </label>
            </div>
            <div class="boxseach" style="width:100px; margin-left:5px; float:left;">
                <label>
                    <input type="radio" style="float:left; margin-top:10px;" name="estatecatalogue_id" value="2"/>
                    <p style="font-weight:500; font-size:14px; color:#000000; float:left; margin-top:8px; margin-left:5px;">Cho Thuê</p>
                </label>
            </div>
            <div class="sreenseachtimkiembds1">
                <select name="estatetype_id" id="estatetype_id">
                    <option value="" selected="selected">Loại Nhà Đất</option>
                </select>
                <input id="estatecity_id" name="estatecity_id" type="hidden" value="14">
                <!--
                <select name="estatecity_id" id="estatecity_id">
                    <option value="">Tỉnh/TP</option>
                    <?php foreach($this->estateProvince as $row): ?>
                        <option <?php if($object->estatecity_id == $row->id) echo 'selected="selected"'; ?> value="<?=$row->id?>"><?=$row->name;?></option>
                    <?php endforeach; unset($row); ?>
                </select>
                -->
                <select name="estatedistrict_id" id="estatedistrict_id">
                    <option value="">TP/Huyện</option>
                </select>
            </div>
            <div class="sreenseachtimkiembds1">
                <select name="estateward_id" id="estateward_id" size="1">
                    <option value="">Phường/Xã</option>
                </select>
                <select name="estatearea_id" id="estatearea_id" size="1" >
                    <option value="" selected="selected">Diện Tích</option>
                    <option value="-1">Không xác định</option>
                    <?php foreach($this->estateareas as $row): ?>
                        <option <?php if($object->estatecity_id == $row->id) echo 'selected="selected"'; ?> value="<?=$row->id?>"><?=$row->label;?></option>
                    <?php endforeach; unset($row); ?>
                </select>
            </div>
            <div class="sreenseachtimkiembds1">
                <select name="estateprice_id" id="estateprice_id" size="1">
                    <option value="" selected="selected">Mức Giá</option>
                </select>
                <select name="estatedirection_id" id="estatedirection_id" size="1">
                    <option value="" selected="selected">Hướng Nhà</option>
                    <?php foreach($this->estateDirection as $row): ?>
                        <option value="<?=$row->id?>"><?=$row->name;?></option>
                    <?php endforeach; unset($row); ?>
                </select>
            </div>
            <div class="timkiembds2">
                <input type="submit" value=""/>
            </div>
        </form>
    </div>
</div>