<!--Общий шаблон HEAD и BODY -->
<!DOCTYPE html>
<html lang="<?php echo current_language (); ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(isset($site_title)){ echo $site_title; } ?></title>
<?php $this->include_tpl('favicon', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>
<meta name="theme-color" content="#ffffff">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php $this->include_tpl('loader', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>
<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/bootstrap.css?v3.3.5" rel="stylesheet" type="text/css" title="">
<!-- Bootstrap -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/animate.css?v1.0.0" rel="stylesheet" type="text/css" title="">
<!-- Font Awesome -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/font-awesome.css?v4.4.0" rel="stylesheet" type="text/css" title="">
<!-- Font Et-line -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/et-line.css?v1.0.0" rel="stylesheet" type="text/css" title="">
<!-- Font Simple line -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/simple-line-icons.css?v=1.0.0" rel="stylesheet" type="text/css" title="">
<!-- Font Elegant -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/elegant-font.css?v1.0.0" rel="stylesheet" type="text/css" title="">
<!-- Owl carousel default style -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/owl.carousel.css?v2.0.0" rel="stylesheet" type="text/css" title="">
<!-- Magnific Popup default style -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/magnific-popup.css?v=1.0.0" rel="stylesheet" type="text/css" title="">
<!-- Main css file -->
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/style.css?v=1.0.0" rel="stylesheet" type="text/css" title="">
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/naddaka.css?v=1.0.0" rel="stylesheet" type="text/css" title="">
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/landing.css?v=1.0.0" rel="stylesheet" type="text/css" title="">
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/adaptive.css?v=1.0.0" rel="stylesheet" type="text/css" title="">
<link href="<?php if(isset($THEME)){ echo $THEME; } ?>css/project.css?v=1.0.0" rel="stylesheet" type="text/css" title="">
<?php $this->include_tpl('styles', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>
</head>
<body class="load display-h">
    <div class="wrapper">
<!-- Подключение меню (menu.tpl) --> 
        <?php $this->include_tpl('menu', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?> 

<!-- Подключение шаблонов категорий (по умолчанию category.tpl) --> 
        <?php if(isset($content)){ echo $content; } ?>     
        
<!--Подключение пред-подвала (prefooter.tpl) --> 
    <?php $this->include_tpl('prefooter', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>
    </div>
    <div class="page-loader">
        <div class="preloader loading"> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> </div>
    </div>
    <!--Подключение подвала (footer.tpl) --> 
    <?php $this->include_tpl('footer', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?> 
    <!-- jQuery -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/jquery.min.js?v=1.11.2"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- Map library -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    <!-- Zoom library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/jquery.elevatezoom.js?v=1.0.0"></script>
    <!-- Scroll library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/wow.js?v=1.0.0"></script>
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/jquery.inview.js?v=1.0.0"></script>
    <!-- OWL Carousel library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/owl.carousel.js?v=2.0.0"></script>
    <!-- OWL Slider library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/jquery.superslides.js?v=1.0.0"></script>
    <!-- Magnific Popup library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/jquery.magnific-popup.js?v=1.0.0"></script>
    <!-- Isotope library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/imagesloaded.pkgd.js?v=2.2.0"></script>
    <!-- Isotope library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/isotope.js?v=2.2.0"></script>
    <!-- SmoothScroll library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/SmoothScroll.js?v=1.4.0"></script>
    <!-- Text rotator library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/morphext.js?v=2.4.4"></script>
    <!-- Video bg library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/jquery.backgroundvideo.js?v=1.0.0"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/bootstrap.js?v=3.3.5"></script>
    <!-- Pjax Library -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/jquery.pjax.js?v=1.0.0"></script>
    <!-- Main script -->
    <script src="<?php if(isset($THEME)){ echo $THEME; } ?>js/script.js?v=1.0.0"></script>
    <?php $category = get_category(1)?>
<?php $item = $CI->load->module('cfcm')->connect_fields($category, 'category')?>
    <script>
        $('#slides').superslides({
            play: <?php echo strip_tags ( $category['field_slidedelay'] ); ?>,
            animation: '<?php echo strip_tags ( $category['field_slideAnimation'] ); ?>',
        });
        $( '.content .display-tc' ).css({width: $(window).width(), height: $(window).height()});
    </script>
    
</body>
</html><?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531799; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/main.tpl ?>