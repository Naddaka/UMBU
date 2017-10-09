<!-- Подключение меню (menu.tpl) -->

<?php $category = get_category(1)?>
<?php $item = $CI->load->module('cfcm')->connect_fields($category, 'category')?>

<?php if(strip_tags( $item['field_menu'] ) == 'Left-Right'): ?>

<div class="navigation default leftright navbar-fixed-top" style="background-color: <?php if($category['field_menucolor']): ?><?php echo strip_tags ( $category['field_menucolor'] ); ?><?php else:?>#000<?php endif; ?>">
        <button type="button" class="navbar-toggle collapsed"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="title"><?php echo siteinfo('siteinfo_transl-menu')?></span> </button>
    <nav>
    	<div class="container">
			<div class="row">
				<div class="col-sm-4 menu-l">
					<!-- Подключение шаблона верхнего меню (/main_menu/level_0/) --> 
    				<?php echo load_menu ('top-menu'); ?>
				</div>
	
				<div class="col-sm-4 menu-lr">
					<!-- Логотип --> 
    				<a class="navbar-brand" href="<?php echo site_url (); ?>"> <img class="logo-img" src="/uploads/images/boginsky-logo-svg-01.svg" alt=""> </a>
				</div>
	
				<div class="col-sm-4 menu-r">
					<!-- Подключение шаблона верхнего меню (/main_menu/level_0/) --> 
    				<?php echo load_menu ('top-menu-2'); ?>
				</div>
			</div>
		</div>

	</nav>
</div>

<?php else:?>
<!-- Подключение шаблона верхнего меню (/main_menu/level_0/) --> 
    <?php echo load_menu ('top-menu'); ?>
<?php endif; ?><?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531799; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/menu.tpl ?>