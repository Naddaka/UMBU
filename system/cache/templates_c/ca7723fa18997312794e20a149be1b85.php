<!--Шаблон главной страницы (homepage.tpl), родитель которого main.tpl -->

<?php if(strip_tags( $category['field_slider'] ) == 'Fullscreen'): ?>
<!-- include slider.tpl -->
  <?php $this->include_tpl('slider', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>
<?php endif; ?>

<!-- Подключение главного контента в виде landing.tpl на странице Main -->
            <?php $this->include_tpl('landing', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>

<?php if(strip_tags( $category['field_contactform'] ) == 'ON'): ?>
       <!-- contact_form.tpl -->
            <?php $this->include_tpl('contact_form', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>
<?php endif; ?>   <?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531801; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/homepage.tpl ?>