<link href="<?=$base_url;?>images/css/tooltip2/jquery.qtip.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?= $base_url?>images/js/tooltip2/jquery.qtip.js"></script>
<script type="text/javascript" src="<?= $base_url?>images/js/tooltip2/imagesloaded.pkg.min.js"></script>

<script type="text/javascript" src="<?= $base_url?>js/main.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.tooltip').each(function() { // Notice the .each() loop, discussed below
        $(this).qtip({
            content: {
                text: $(this).next('div') // Use the "div" element next to this for the content
            },
            style: {
                classes: 'popup-tooltip',
                width: 450,
            }
        });
    });
});
</script>

<div id="portlets">
<div class="column"> 
</div>
<div class="portlet">
<div class="portlet-header fixed"><img src="<?=$this->admin_images;?>images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> <?=$title_table;?></div>
<div class="portlet-content nopadding">
    <form action="<?php echo $base_url.'admin/estates/searchFree/'; ?>" name="myform" id="myform" method="get" >
        <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <tbody>
                <tr>
                    <td>
                        <div align="left">Mã tin</div>
                        <div align="left"><input style="width: 85px;" type="text" name="searchKey" id="searchKey" value="<?=$_GET['searchKey']?>" class="input" /></div>
                    </td>
                    <td>
                        <div align="left">Hình thức</div>
                        <select style="width: 145px;" class="fl estatecatalogue_id" name="estatecatalogue_id" id="estatecatalogue_id">
                            <option <?php echo $_GET['estatecatalogue_id'] == '' ? 'selected="selected"' : ''; ?> value="">Chọn hình thức</option>
                            <option <?php echo $_GET['estatecatalogue_id'] == 1 ? 'selected="selected"' : ''; ?> value="1">Nhà đất bán</option>
                            <option <?php echo $_GET['estatecatalogue_id'] == 2 ? 'selected="selected"' : ''; ?> value="2">Nhà đất cho thuê</option>
                        </select>
                    </td>
                    <td>
                        <div align="left">Menu</div>
                        <input type="hidden" name="estatetype_selected" value="<?=$_GET['estatetype_id']?>"/>
                        <select style="width: 145px;" class="fl estatetype_id" name="estatetype_id" id="estatetype_id">
                            <option value="">Chọn Phân mục</option>
                        </select>
                    </td>
                    <td>
                        <div align="left">Mức giá</div>
                        <input type="hidden" name="price_selected" value="<?=$_GET['estateprice_id']?>"/>
                        <select style="width: 145px;" class="fl estateprice_id" name="estateprice_id" id="estateprice_id">
                            <option value="">Chọn Mức giá</option>
                        </select>
                    </td>
                    <td>
                        <div align="left">Mức diện tích</div>
                        <select style="width: 145px;" class="fl estatearea_id" name="estatearea_id" id="estatearea_id">
                            <option value="">Chọn Mức diện tích</option>
                            <?php foreach ($estateareas as $row): ?>
                                <option <?php echo $_GET['estatearea_id'] == $row->id ? 'selected="selected"' : ''; ?> value="<?= $row->id ?>"><?= $row->label; ?></option>
                            <?php endforeach; unset($row); ?>
                        </select>
                    </td>
                    <td>
                        <div align="left">Tin chính chủ</div>
                        <select style="width: 90px;" class="fl isReals" name="isReals" id="isReals">
                            <option <?php echo $_GET['isReals'] == -1 ? 'selected="selected"' : ''; ?> value="-1">Tất cả</option>
                            <option <?php echo $_GET['isReals'] == 0 ? 'selected="selected"' : ''; ?> value="0">Không</option>
                            <option <?php echo $_GET['isReals'] == 1 ? 'selected="selected"' : ''; ?> value="1">Có</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50"></td>
                    <td colspan="4"><div align="left"><input type="submit" value="Tìm kiếm" /></div></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="portlet-content nopadding">
    <form name="myform" id="myform" method="post" >
    <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
		<thead>
			<tr>
            	<th width="20">TT</th>
            	<th width="30"><div align="center">Mã tin</div></th>
                <th width="120"><?=$menu_active?></th>
                <th width="50">Menu</th>
                <th width="50">Diện tích</th>
                <th width="50">Giá</th>
            	<th width="30"><div align="center">Vip</div></th>
            	<th width="30"><div align="center">CC</div></th>
                <th width="30"><div align="center">Ngày tạo</div></th>
                <th width="50"><div align="center">Công cụ</div></th>
            </tr>
		</thead>
		<tbody>
			<?php $i=$page_i; foreach($estates as $row): $i++;?>
            <tr>
                <td><div align="center"><?=$i?></div></td>
                <td>
                    <div align="center">
                        <?=$row->code?>
                    </div>   
                </td>
                <td>
                    <span class="tooltip"><?=$row->title?></span>
                    <div class="hidden"><?php echo $row->description; ?></div>
                    <?php if($row->photo != null): ?><img title="Có hình đại diện" src="<?php echo base_url().'images/iconcamera.png'; ?>"/><?php endif; ?>
                    <?php if($row->Estate_photo->result_count() > 0): ?><img title="Có danh sách hình slide" src="<?php echo base_url().'images/slides_stack.png'; ?>"/><?php endif; ?>
                    <?php if ($row->article_id > 0): ?><img title="Có dự án" style="width: 15px;" src="<?php echo base_url().'images/projects.png'; ?>"/><?php endif; ?>
                </td>
                <td><?=$row->estatetype->name?></td>
                <td><?=$row->area_text;?> m<sup>2</sup></td>
                <td><?=$row->price_text.' '.getpricetype($row->price_type);?></td>
                <td>
                    <div align="center">
                        <?php if($row->isVip==1)
                            echo create_link_table('approve_icon',$this->admin_url.'estates/hot/'.$row->id,'Vô hiệu');
                        else
                            echo create_link_table('reject_icon',$this->admin_url.'estates/hot/'.$row->id,'Kích hoạt');
                        ?>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <?php if($row->isReals==1)
                            echo create_link_table('approve_icon',$this->admin_url.'estates/reals/'.$row->id,'Vô hiệu');
                        else
                            echo create_link_table('reject_icon',$this->admin_url.'estates/reals/'.$row->id,'Kích hoạt');
                        ?>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <?=date('d/m/y',strtotime($row->created))?>
                    </div>   
                </td>
                <td>
                    <div align="center">
                    <?php
                        echo create_link_table('edit_icon',$base_url.'admin/estates/edit/'.$row->id,'edit');
                        echo create_link_table('delete_icon',$base_url.'admin/estates/delete/'.$row->id,'delete','return confirm ("Bạn có muốn xóa đối tượng này không ?")');
                    ?>
                    </div>
                </td>
                
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="11">
                    <?php echo $this->pagination->create_links();?>
                </td>
            </tr>             
		</tbody>
	</table>
    </form>
</div>
</div>
</div>
     