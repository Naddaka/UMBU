<!-- FOOTER.tpl --> 
<footer>
    <?php $page = get_page(3)?>
<?php $page = $CI->load->module('cfcm')->connect_fields($page, 'page')?>
    
    <div class="site-footer display-h pos-relative<?php if(strip_tags( $page['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?>" style="<?php if($page['field_bgcolor']): ?>background-color:<?php echo $page['field_bgcolor']; ?>;<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 1'): ?>color:<?php echo siteinfo('siteinfo_color')?><?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 2'): ?>color:<?php echo siteinfo('siteinfo_color2')?><?php endif; ?>">
       
       <div class="text-center socials"> 

         <?php if($page['field_facebook']): ?><a class="soc fadeInUp wow" data-wow-delay="0.1s" style="background-image:url('<?php echo $page['field_facebookIcon']; ?>');" href="<?php echo $page['field_facebook']; ?>" target="_blank">&nbsp;</a><?php endif; ?>

        <?php if($page['field_vk']): ?><a class="soc fadeInUp wow" data-wow-delay="0.2s" style="background-image:url('<?php echo $page['field_vkIcon']; ?>');" href="<?php echo $page['field_vk']; ?>" target="_blank">&nbsp;</a><?php endif; ?>

         <?php if($page['field_gp']): ?><a class="soc fadeInUp wow" data-wow-delay="0.3s" style="background-image:url('<?php echo $page['field_gpIcon']; ?>');" href="<?php echo $page['field_gp']; ?>" target="_blank">&nbsp;</a><?php endif; ?>

         <?php if($page['field_twitter']): ?><a class="soc fadeInUp wow" data-wow-delay="0.4s" style="background-image:url('<?php echo $page['field_twitterIcon']; ?>');" href="<?php echo $page['field_twitter']; ?>" target="_blank">&nbsp;</a><?php endif; ?>

         <?php if($page['field_instagram']): ?><a class="soc fadeInUp wow" data-wow-delay="0.5s" style="background-image:url('<?php echo $page['field_instagramIcon']; ?>');" href="<?php echo $page['field_instagram']; ?>" target="_blank">&nbsp;</a><?php endif; ?>
         </div>
            <div class="copyright">
                <div class="company text-center text-uppercase"><?php echo $page['prev_text']; ?></div>
                <div class="text-center"><?php echo $page['full_text']; ?></div>
            </div>
        </div>
        
   </footer>
<!--/site-footer --><?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531799; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/footer.tpl ?>