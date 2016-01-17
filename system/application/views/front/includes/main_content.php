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
                        <li><a href="<?=$base_url?>tin-tuc/<?=$row->name_none;?>"><?=$row->name_vietnamese;?></a></li>
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
    <div class="home-search">
        <div class="search-simple">
            <form id="search-simple">
                <input type="text" placeholder="Nhập theo từ khóa ... " />
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
        <div class="search-advanced">
            <form id="search-advanced">
                <input type="text" placeholder="Nhập theo từ khóa ... " />
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
</div>