<script language="javascript" type="text/javascript" src="<?php echo $base_url;?>ckeditor/ckeditor.js"></script>
<script language="javascript" type="text/javascript" src="<?=$base_url; ?>images/js/jquery.validate.js"></script>
<link rel="stylesheet" href="<?php echo $base_url.'images/css/style-new-282015.css'; ?>"/>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$('#myForm').validate({
			rules:{
				title:{
					required:true,
					maxlength:100
					},
				name:{
					required: true,
					maxlength:50
				},
				email:{
					required: true,
					email:true
				},
				content:{
					required: true
				},
				phone:{
                    required: true,
                    number:true
                },
                address:{
                    required: true
                }
			},
			messages:{
				title:{
					required:"<font color=red>Vui lòng nhập tiêu đề</font>"	,
					maxlength:"<font color=white>Tiêu đề tối đa 100 kí tự</font>"
					},
				name:{
					required: "<font color=white>Vui lòng nhập họ tên của bạn</font>",
					maxlength:"<font color=white>Tên không quá 50 kí tự</font>"
				},
				email:{
					required: "<font color=white>Vui lòng nhập địa chỉ email</font>",
					email: "<font color=white>Nhập đúng dạng địa chỉ email</font>"
				},
				content:{
					required: "<font color=white>Vui lòng nhập nội dung</font>"
				},
                phone:{
                    required: "<font color=white>Vui lòng nhập số điện thoại</font>",
                    number: "<font color=white>Vui lòng nhập số</font>"
                },
                address:{
                    required: "<font color=white>Vui lòng nhập địa chỉ</font>"
                }
			}
		});
	});
</script>
<style type="text/css">
    .contact-tbl-content{
        position: relative;
    }
    .contact-tbl-row input {
        width: 350px;
        height: 22px;
        line-height: 22px;
        margin: 3px 0;
        border: 1px solid #cccccc;
    }
    .contact-tbl-row textarea {
        width: 500px;
        margin: 3px 0 5px;
        border: 1px solid #cccccc;
    }
    label.error{
        width: 200px;
        top: 5px;
        right: -36px;
        padding-top: 2px;
        height: 20px;
        color: #ffffff;
    }
    .gui input {
        background: #109502;
        border: none;
        width: 80px;
        height: 30px;
        line-height: 30px; text-align: center; text-transform: uppercase; color: #ffffff; cursor: pointer; margin-right: 5px;
        font-weight: 600;
    }
</style>

<div class="linktop" style="width:600px;height:20px; float:left; margin-top:8px; margin-left:5px; margin-bottom:10px;">
    <div class="linkdautrang"><a href="<?=$base_url?>" title="Sàn nhà đất">Trang chủ</a></div>
    <div class="linkdautrang"><a class="linkdautrang-active" href="<?=$base_url?>lien-he.html" title="Liên hệ">Liên hệ với SotayNhadat.vn</a></div>
</div>

<!--main-->
<div class="main">
    <!--left-->
    <div class="left">
        <!--lien he-->
        <div class="hotnew">
            <div class="sreentieudethitruong">
                <div class="tieudethitruongchitiet">
                    <h1 style="font-size: 25px; color:#051c94;">Liên hệ - Góp ý</h1>
                </div>
            </div>
            <form id="myForm" action="<?=$base_url?>lien-he.html" method="post">
                <div class="noidunggioithieu" style="width:545px; margin-top:25px; margin-left: 0px; margin-bottom:10px;">
                    <div class="contact-tbl">
                        <div class="contact-tbl-row"><img src="<?=$base_url?>images/contact_add.png" width="16" height="18" />
                            <span class="label" style="font-weight:bold;">Địa chỉ: </span>
                            Tầng 3, Tòa nhà ACB, 12 Hoàng Hoa Thám, Phường 2, TP. Vũng Tàu, BRVT.
                        </div>
                        <div class="contact-tbl-row"><img src="<?=$base_url?>images/contact_phone.png" width="16" height="18" />
                            <span class="label" style="font-weight:bold;">Điện thoại: </span>
                            0646 - 557 999 &nbsp;&nbsp;<img src="<?=$base_url?>images/contact_hotline.png" width="16" height="18" style=" margin-bottom:-3px;" />
                    <span class="label">
                        <span id="ctl28_ctl01_lblTPhone" style="font-weight:bold;">Di động: </span>&nbsp;</span>
                            <span class="content" style="border: 0;background-image: none;">0168 200 0080 </span>
                        </div>
                        <div class="contact-tbl-row"><img src="<?=$base_url?>images/contact_web.png" width="16" height="18" />
                            <span class="label" style="font-weight:bold;">Website:</span> www.sotaynhadat.vn&nbsp;&nbsp;<img src="<?=$base_url?>images/contact_email.png" width="16" height="18"  style=" margin-bottom:-4px;"/>
                    <span class="label">
                        <span id="ctl28_ctl01_lblTPhone" style="font-weight:bold;">Email:</span>&nbsp;</span>
                            <span class="content">info@sotaynhadat.vn </span>
                        </div>
                        <div class="clear"></div>
                        <span style="display: block; text-align: center; padding: 5px 0px; font-weight: 600; color: #0000ff; margin-top: 10px;">
                            <?=$msg;?>
                        </span>
                        <div class="contact-tbl-title" style="margin-top:10px; font-size:16px; font-weight:bold;">Liên Hệ</div>
                        <div class="clear"></div>
                        <div class="separable"></div>
                        <div class="tbl-inform">
                            <span><span id="ctl28_ctl01_lblInform"></span></span>
                        </div>
                        <div class="contact-tbl-row" style="margin-bottom:8px;">
                            <div class="contact-tbl-label">
                                <span id="ctl28_ctl01_lblName">Họ tên:</span></div>
                            <div class="contact-tbl-content">
                                <input name="name" type="text" id="ctl28_ctl01_txtName" class="contact-text-field">
                            </div>
                        </div>
                        <div class="contact-tbl-row"style="margin-bottom:8px;">
                            <div class="contact-tbl-label">Địa chỉ:</div>
                            <div class="contact-tbl-content">
                                <input name="address" type="text" id="ctl28_ctl01_txtAddress" class="contact-text-field">
                            </div>
                        </div>
                        <div class="contact-tbl-row"style="margin-bottom:8px;">
                            <div class="contact-tbl-label">Email:</div>
                            <div class="contact-tbl-content">
                                <input name="email" type="text" id="ctl28_ctl01_txtAddress" class="contact-text-field">
                            </div>
                        </div>
                        <div class="contact-tbl-row">
                            <div class="contact-tbl-label">
                                <div class="contact-tbl-content"></div>
                            </div>
                            <div class="contact-tbl-row" style="margin-bottom:8px;">
                                <div class="contact-tbl-label">Điện thoại:</div>
                                <div class="contact-tbl-content">
                                    <input name="phone" type="text" id="ctl28_ctl01_txtPhone" class="contact-text-field">
                                </div>
                            </div>
                            <div class="contact-tbl-row" style="margin-bottom:8px;">
                                <div class="contact-tbl-label">Tiêu đề:</div>
                                <div class="contact-tbl-content">
                                    <input name="title" type="text" id="ctl28_ctl01_txtSubject" class="contact-text-field">
                                </div>
                            </div>
                            <div class="contact-tbl-row">
                                <div class="contact-tbl-label">
                                    <span id="ctl28_ctl01_lblContent">Nội dung:</span></div>
                                <div class="contact-tbl-content">
                                    <textarea name="content" rows="10" cols="50" id="ctl28_ctl01_txtContent" class="contact-text-area"></textarea>
                                </div>
                            </div>
                            <span class="rowLabel" style="position:relative;">
                                <img id="captcha" height="50" src="<?=$base_url;?>securimage/securimage_show.php" alt="CAPTCHA Image" />
                                <a href="javascript:void(0)" onclick="document.getElementById('captcha').src = '<?=$base_url;?>/securimage/securimage_show.php?' + Math.random(); return false">
                                    <img alt="Refresh" width="30" height="30" src="<?=$base_url?>images/refresh.png" style="position:absolute;bottom:5px;left:0px;cursor:pointer;" />
                                </a>
                            </span>
                            <br>
                            <span class="rowLabel">Mã xác nhận <span style="display: inline-block; color: red;">(*)</span></span>
                            <br>
                            <span class="rowInput"><input type="text" name="captcha_code" id="captcha_code" value="" /></span>
                        </div>
                    </div>
                </div>
                <!--end hotnew-->
                <div class="gui" style="width:200px; height: 30px; float:left; margin-left:0px; margin-bottom:10px;">
                    <input type="submit" name="" value="Gửi" id="ctl28_ctl01_btnSend" class="button white">
                    <input type="reset" name="" value="Hủy" id="ctl28_ctl01_btnReset" class="button white">
                </div>
            </form>
        </div>
        <!--end lien he-->
    </div>
    <!--end left-->
    <!-- right-->
    <div class="right">
        <!-- tim kiem bds-->
        <div class="boxtimkiembds">
            <span class="title-top-box">Tìm kiếm bất động sản</span>
            <div class="sreenboxseach2" style=" width:310px;  margin-bottom:20px; float:left;">
                <form action="<?=$base_url?>tim-kiem-bat-dong-san" method="post">
                    <div  class="boxseach"  style=" width:100px; float:left; margin-left:60px;">
                        <label>
                            <input type="radio" style="float:left; margin-top:10px;" name="estatecatalogue_id" value="1"/>
                            <p style="font-weight:bold; font-size:14px; color:#CC0000; float:left; margin-top:8px; margin-left:5px;">Mua - Bán</p>
                        </label>
                    </div>
                    <div class="boxseach"  style=" width:100px; margin-left:5px;  float:left;">
                        <label>
                            <input type="radio" style="float:left; margin-top:10px;" name="estatecatalogue_id" value="2"/>
                            <p style="font-weight:bold; font-size:14px; color:#CC0000; float:left; margin-top:8px; margin-left:5px;">Cho Thuê</p>
                        </label>
                    </div>
                    <div class="sreenseachtimkiembds1" style="width:310px; height:25px; float:left; margin-bottom:3px;">
                        <select name="estatetype_id" id="estatetype_id" size="1" style="float:left; margin-right:5px; margin-left:8px; width:140px;  height:23px; margin-top:10px; margin-bottom:5px;  border:1px  #CCCCCC solid;">
                            <option value="" selected="selected">Chọn Loại nhà đất</option>
                        </select>
                        <select name="estatecity_id" id="estatecity_id" size="1" style="float:left; width:140px; margin-right:5px;  height:23px; margin-bottom:5px; margin-top:10px;  border:1px  #CCCCCC solid;">
                            <option value="">Chọn Tỉnh/TP</option>
                            <?php foreach($this->estateProvince as $row): ?>
                                <option <?php if($object->estatecity_id == $row->id) echo 'selected="selected"'; ?> value="<?=$row->id?>"><?=$row->name;?></option>
                            <?php endforeach; unset($row); ?>
                        </select>
                    </div>
                    <div class="sreenseachtimkiembds1" style="width:310px; height:25px; float:left; margin-bottom:3px;">
                        <select name="estatedistrict_id" id="estatedistrict_id" size="1" style="float:left; width:140px; margin-right:5px; margin-left:8px;  height:23px; margin-top:10px; margin-bottom:5px;  border:1px  #CCCCCC solid;" >
                            <option value="">Chọn Quận/Huyện</option>
                        </select>
                        <select name="estatearea_id" id="estatearea_id" size="1" style="float:left; width:140px; margin-right:5px;  height:23px; margin-bottom:5px; margin-top:10px;  border:1px  #CCCCCC solid;" >
                            <option value="" selected="selected">Chọn Diện tích</option>
                            <option value="-1">Không xác định</option>
                            <?php foreach($this->estateareas as $row): ?>
                                <option <?php if($object->estatecity_id == $row->id) echo 'selected="selected"'; ?> value="<?=$row->id?>"><?=$row->label;?></option>
                            <?php endforeach; unset($row); ?>
                        </select>
                    </div>
                    <div class="sreenseachtimkiembds1" style="width:310px; height:25px; float:left; margin-bottom:13px;">
                        <select name="estateprice_id" id="estateprice_id" size="1" style="float:left; width:140px; margin-right:5px; margin-left:8px; height:23px; margin-top:10px; margin-bottom:5px;  border:1px  #CCCCCC solid;" >
                            <option value="" selected="selected">Chọn Mức giá</option>
                        </select>
                        <select name="estatedirection_id" id="estatedirection_id" size="1" style="float:left; width:140px; margin-right:5px;  height:23px; margin-bottom:5px; margin-top:10px;  border:1px  #CCCCCC solid;" >
                            <option value="" selected="selected">Chọn Hướng nhà</option>
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
        <!-- qc-->
        <?php echo $this->load->view('front/includes/adv_right'); ?>
        <!-- end qc-->
    </div>
</div>
<!--end main-->