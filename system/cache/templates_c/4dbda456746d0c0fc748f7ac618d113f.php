<!--Шаблон для подключение стилей (styles.tpl), которые настраиваются в main.tpl -->
<?php $category = get_category(1)?>
<?php $item = $CI->load->module('cfcm')->connect_fields($category, 'category')?>
<style>
body {
  <?php if($category['field_menucolor']): ?>background: <?php echo strip_tags ( $category['field_bgcolor'] ); ?>;<?php endif; ?>
  <?php if($category['field_textcolor']): ?>color: <?php if(strip_tags( $category['field_textcolor'] ) == 'Black'): ?>#000<?php endif; ?><?php if(strip_tags( $category['field_textcolor'] ) == 'White'): ?>#fff<?php endif; ?><?php if(strip_tags( $category['field_textcolor'] ) == 'Gray'): ?>#444<?php endif; ?><?php if(strip_tags( $category['field_textcolor'] ) == 'Color 1'): ?>color:<?php echo siteinfo('siteinfo_color')?><?php endif; ?><?php if(strip_tags( $category['field_textcolor'] ) == 'Color 2'): ?>color:<?php echo siteinfo('siteinfo_color2')?><?php endif; ?>;<?php endif; ?>
}
</style>
<?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531800; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/styles.tpl ?>