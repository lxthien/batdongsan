<div class="main-header">
    <div class="header">
        <div class="logo"><a href="<?=$base_url;?>"><img src="<?=$base_url;?>images/logo_tet.png" alt="nhà đất, bất động sản"/></a></div>
        <div class="headerleft">
			<?php if (strpos($this->adverHeader->image, 'swf')): ?>
				<object style="display: block;margin-left: 12px;margin-top: 13px;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
						codebase="http://download.macromedia.com/pub/shockwave/
				cabs/flash/swflash.cab#version=6,0,40,0"
						width="650" height="100"
						id="mymoviename">
					<param name="movie"
						   value="<?=$base_url.$this->adverHeader->image;?>" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<embed src="<?=$base_url.$this->adverHeader->image;?>" quality="high" bgcolor="#ffffff"
						   width="650" height="100"
						   name="mymoviename" align="" type="application/x-shockwave-flash"
						   pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>
				</object>
			<?php else: ?>
				<a target="_blank" href="<?php echo $this->adverHeader->link; ?>"><img style="width: 650px; height: 95px;" src="<?php echo $base_url.$this->adverHeader->image; ?>" /></a>
			<?php endif; ?>
        </div>
    </div>
    <div class="sreendk" style="float:right; margin-bottom:-2px; margin-right:28px; height:25px;">
        <?php if($this->session->userdata('userLoginFlag') != 1): ?>
            <div class="main-account-header">
                <div class="dk">
                    <a style="text-align: center; font-weight: 600;" href="<?=$base_url?>dang-nhap">
                        <p style="padding-top: 5px;">Đăng Nhập </p>
                    </a></div>
                <div class="dk">
                    <a style="text-align: center; font-weight: 600;" href="<?=$base_url?>dang-ky">
                        <p style="padding-top: 5px;">Đăng Ký  </p>
                    </a>
                </div>
            </div>
            <div class="share-social-home">
                <div class="g-plusone" data-size="medium" data-href="http://sotaynhadat.vn/"></div>
                <div class="fb-like" data-href="http://sotaynhadat.vn/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                <script type="text/javascript">
                    window.___gcfg = {lang: 'vi'};

                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/platform.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
            </div>
        <?php else: ?>
            <div class="main-account-header">
                <div class="dk">
                    <a style="text-align: center; font-weight: 600;" href="<?=$base_url?>dang-xuat">
                        <p style="padding-top: 5px;">Đăng xuất</p>
                    </a>
                </div>
                <div class="dk">
                    <a style="text-align: center; font-weight: 600;" href="<?=$base_url?>trang-ca-nhan">
                        <p style="padding-top: 5px;"><?=$this->session->userdata('userLogin')?></p>
                    </a>
                </div>
            </div>
            <div class="share-social-home">
                <div class="g-plusone" data-size="medium" data-href="http://sotaynhadat.vn/"></div>
                <div class="fb-like" data-href="http://sotaynhadat.vn/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                <script type="text/javascript">
                    window.___gcfg = {lang: 'vi'};

                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/platform.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
            </div>
        <?php endif; ?>
    </div>
</div>