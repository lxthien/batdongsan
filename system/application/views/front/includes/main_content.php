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
                        <li><a href="">Bán nhà ở</a></li>
                        <li><a href="">Bán nhà xưởng</a></li>
                    </ul>
                </li>
                <li><h2><a href="">Dự án</a></h2></li>
                <li><h2><a href="">Tin tức</a></h2></li>
                <li><h2><a href="">Cẩm nâng</a></h2></li>
                <li><h2><a href="">Liên hệ</a></h2></li>
            </ul>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="home-right-bar">
        <h3 class="home-title-services">Dịch vụ chính</h3>
        <div class="home-service-item"><h1><a href="">Môi giới bất động sản</a></h1>
            <div class="home-descripton-service">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="">Chi tiết</a>
            </div>
        </div>
        <div class="home-service-item"><h1><a href="">Phát triển bất động sản</a></h1>
            <div class="home-descripton-service">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="">Chi tiết</a>
            </div>
        </div>
        <div class="home-service-item"><h1><a href="">Phân phối dự án bất động sản</a></h1>
            <div class="home-descripton-service">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="">Chi tiết</a>
            </div>
        </div>
        <div class="home-service-item"><h1><a href="">Thiết kế xây dựng nhà ở</a></h1>
            <div class="home-descripton-service">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="">Chi tiết</a>
            </div>
        </div>
        <div class="home-service-item"><h1><a href="">Thẩm định giá các loại tài sản</a></h1>
            <div class="home-descripton-service">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="">Chi tiết</a>
            </div>
        </div>
        <div class="home-service-item"><h1><a href="">Cải tạo sửa chữa công trình dân dụng</a></h1>
            <div class="home-descripton-service">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <a href="">Chi tiết</a>
            </div>
        </div>
    </div>
</div>