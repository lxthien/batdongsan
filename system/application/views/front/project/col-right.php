<div class="right">
    <div class="boxnoibat boxtimkiemduan">
        <span class="title-top-box">Tìm kiếm dự án</span>
        <form action="<?=$base_url?>tim-kiem-du-an" method="post">
            <div class="sreentimkiemduan">
                <div class="tieudetimkiemduan">
                    <p>Tìm kiếm theo danh mục:</p>
                </div>
                <div class="sreenmenuseach">
                    <select name="estatetype_id" id="estatetype_id">
                        <option value="0" selected="selected">Chọn danh mục dự án</option>
                        <?php foreach($this->projectsCate as $row): ?>
                            <option value="<?=$row->id;?>"><?=$row->name_vietnamese;?></option>
                        <?php endforeach; unset($row); ?>
                    </select>
                </div>
            </div>
            <div class="sreentimkiemduan">
                <div class="tieudetimkiemduan">
                    <p>Tìm kiếm theo TP/Huyện:</p>
                </div>
                <!--
                <div class="sreenmenuseach">
                    <select name="estatecity_id" id="estatecity_id">
                        <option value="">Chọn Tỉnh/Thành phố</option>
                        <?php foreach($this->estateProvince as $row): ?>
                            <option <?php if($object->estatecity_id == $row->id) echo 'selected="selected"'; ?> value="<?=$row->id?>"><?=$row->name;?></option>
                        <?php endforeach; unset($row); ?>
                    </select>
                </div>
                -->
                <input id="estatecity_id" name="estatecity_id" type="hidden" value="14">
                <div class="sreenmenuseach">
                    <select name="estatedistrict_id" id="estatedistrict_id">
                        <option value="">TP/Huyện</option>
                    </select>
                </div>
            </div>
            <div class="sreentimkiemduan">
                <div class="tieudetimkiemduan">
                    <p>Tìm kiếm theo Phường/Xã:</p>
                </div>
                <div class="sreenmenuseach">
                    <select name="estateward_id" id="estateward_id" size="1">
                        <option value="">Phường/Xã</option>
                    </select>
                </div>
            </div>
            <div class="sreentimkiemduan tim-kiem-du-an-button">
                <div class="timkiembduan">
                    <input type="submit" value=""/>
                </div>
            </div>
        </form>
    </div>

    <div class="boxnoibat" style="border-bottom: none;">
        <span class="title-top-box">Danh mục dự án</span>
        <?php foreach($this->projectsCate as $row): ?>
            <div class="sreentinnoibat">
                <div class="tinkhacnoibat">
                    <a href="<?=$base_url?>du-an/<?=$row->name_none?>" title="<?=$row->name_vietnamese;?>">
                        <p>
                            <?=strlen($row->name_vietnamese) < 50 ? $row->name_vietnamese : cut_string($row->name_vietnamese, 50).'...';?>
                        </p>
                    </a>
                </div>
            </div>
            <div class="line3"></div>
        <?php endforeach; unset($row); ?>
    </div>
</div>