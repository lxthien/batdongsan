<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?=$this->page_title;?></title>
<meta name="description" content="<?=$this->page_description;?>"/>
<meta name="keywords" content="<?=$this->page_keyword;?>"/>	
<meta name="robots" content="noydir, noodp, follow"/>
<meta http-equiv="audience" content="general"/>
<meta name="resource-type" content="document"/>
<meta name="abstract" content="Thông tin nhà đất Việt Nam"/>
<meta name="classification" content="Bất động sản Việt Nam"/>
<meta name="area" content="Nhà đất và bất động sản"/>
<meta name="placename" content="Việt Nam"/>
<meta name="author" content="SotayNhadat.vn"/>
<meta name="copyright" content="©2013 SotayNhadat.vn"/>
<meta name="owner" content="SotayNhadat.vn"/>
<meta name="generator" content="SotayNhadat.vn"/>
<meta name="distribution" content="Global"/>
<meta name="revisit-after" content="1 days"/>


<link href="<?=$base_url;?>images/css/style.css?v=100" rel="stylesheet" type="text/css" />
<link href="<?=$base_url;?>images/css/styles.css?v=100" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?=$base_url;?>favicon.png" />
<!-- Begin add jquery and jquery ui to website -->
<script type="text/javascript" src="<?=$base_url?>images/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?=$base_url?>images/js/jquery-ui-1.8.18.min.js"></script>
<!-- End add jquery and jquery ui to website -->
<!-- Begin facy box-->
<script type="text/javascript" src="<?= $base_url?>images/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?= $base_url?>images/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?= $base_url?>images/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<!-- End facy box-->
<!--Begin carouFredSel-->
<!--<script type="text/javascript" src="<?/*=base_url()*/?>images/js/jquery.carouFredSel-5.6.4-packed.js"></script>-->
<!--End carouFredSel-->

<!--Begin jquey simplyscroll-->
<!--<script type="text/javascript" src="<?/*=$base_url;*/?>images/js/simplyscroll/jquery.simplyscroll.js"></script>
<link rel="stylesheet" href="<?/*=$base_url;*/?>images/js/simplyscroll/jquery.simplyscroll.css" media="all" type="text/css" />-->
<!--End jquey simplyscroll-->

<!--facy box-->
<script type="text/javascript" src="<?= $base_url?>images/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?= $base_url?>images/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<!--facy box-->

<!--facy box-->
<script type="text/javascript" src="<?= $base_url?>js/main.js"></script>
<!--facy box-->

</head>
<body <?php echo $this->router->fetch_class() == "home" ? 'class="home-page"' : 'page'; ?>>
  <?php if($this->router->fetch_class() == "home"): ?>
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
