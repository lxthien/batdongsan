<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?=$this->page_title;?></title>
<meta name="description" content="<?=$this->page_description;?>"/>
<meta name="keywords" content="<?=$this->page_keyword;?>"/>	
<meta name="robots" content="noindex, nofollow"/>
<meta http-equiv="audience" content="general"/>
<meta name="resource-type" content="document"/>
<meta name="abstract" content="Thông tin nhà đất Việt Nam"/>
<meta name="classification" content="Bất động sản Việt Nam"/>
<meta name="area" content="Nhà đất và bất động sản"/>
<meta name="placename" content="Việt Nam"/>
<meta name="author" content="Batdongsanvungtau.com.vn"/>
<meta name="copyright" content="©2013 Batdongsanvungtau.com.vn"/>
<meta name="owner" content="Batdongsanvungtau.com.vn"/>
<meta name="generator" content="Batdongsanvungtau.com.vn"/>
<meta name="distribution" content="Global"/>
<meta name="revisit-after" content="1 days"/>


<link href="<?php echo $base_url;?>images/css/style.css?v=100" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url;?>images/css/style-new-282015.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url;?>images/css/styles.css?v=100" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url;?>images/css/jquery.selectbox-0.2/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="<?=$base_url;?>favicon.png" />

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,500italic,700,300' rel='stylesheet' type='text/css'>

<!-- Begin add jquery and jquery ui to website -->
<script type="text/javascript" src="<?=$base_url?>images/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?=$base_url?>images/js/jquery-ui-1.8.18.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>images/js/jquery.selectbox-0.2/js/jquery.selectbox-0.2.js"></script>
<script type="text/javascript" src="<?=$base_url;?>images/js/jquery.validate.js?v1"></script>
<script type="text/javascript" src="<?= $base_url?>js/main.js"></script>
<!-- End add jquery and jquery ui to website -->

</head>
<body <?php echo $this->menu_active == "home" ? 'class="home-page"' : 'page'; ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=397129657010987";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <?php if($this->menu_active == "home"): ?>
    <?php $this->load->view($view);?>
  <?php else: ?>
    <div class="wrapper wrapper-2">
      <?php $this->load->view('front/includes/header');?>
      <?php $this->load->view('front/includes/menu');?>
      <?php //$this->load->view('front/includes/slide');?>
      <?php //$this->load->view('front/includes/slide-word');?>
      <?php $this->load->view($view);?>
      <?php $this->load->view('front/includes/footer');?>
  </div>  
  <?php endif; ?>
</body>
</html>
