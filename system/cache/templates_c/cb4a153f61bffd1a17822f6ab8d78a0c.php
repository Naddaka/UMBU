<!-- landing.tpl -->
<?php if(is_true_array($pages)){ foreach ($pages as $page){ ?>
<?php $page = $CI->load->module('cfcm')->connect_fields($page, 'page')?>
<?php if($page['field_video']): ?>
<div class="page-section bg-section" data-background="<?php echo $page['field_bgimage']; ?>?v=1.0.0" data-overlay-color="#000" data-overlay-opacity="0.5">
  <div class="text-center">
    <a href="<?php echo $page['field_video']; ?>" class="popup-youtube big-icon white"><div class="circle pulse"></div><i class="fa fa-play"></i></a>
    <div>
      <h2 class="text-uppercase title-3 white mt50"><?php echo $page['title']; ?></h2>
    </div>
    <span class="sub-header white opacity-50 text-uppercase ls-02"><?php echo strip_tags ( $page['prev_text'] ); ?></span>
  </div>
</div>
<?php else:?>
<!-- Главный контейнер (стили блоков / настройки фона, цвета текста и другие) -->
<div id="<?php if(strip_tags( $page['field_lanpage'] ) == 'Default'): ?>page-standart<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Centered'): ?>block-center<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Text right'): ?>block-right<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Text left'): ?>block-left<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Picture alignment to bottom'): ?>block-img-bottom<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Only the photo as a background'): ?>only-img-bg<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Two columns'): ?>two-collum<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Photos-left'): ?>photos-left<?php endif; ?><?php if(strip_tags( $page['field_lanpage'] ) == 'Photos-right'): ?>photos-right<?php endif; ?>" class="page-section bg-section<?php if(strip_tags( $page['field_bgfixed'] ) == 'ON'): ?> fixed<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fill'): ?> cover<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fit'): ?> contain<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Original'): ?> origin<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?> <?php echo strip_tags ( $page['field_bgposition'] ); ?>" data-background="<?php echo $page['field_bgimage']; ?>?v=1.0.0" style="background-color:<?php echo $page['field_bgcolor']; ?>" <?php if(strip_tags( $page['field_lanpage'] ) == 'Text right'): ?><?php else:?><?php if(strip_tags( $page['field_overlay'] ) == 'OFF'): ?><?php else:?>data-overlay-color="<?php if($page['field_bgcolor']): ?><?php echo strip_tags ( $page['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>" data-overlay-opacity="<?php echo strip_tags ( $page['field_overlay'] ); ?>"<?php endif; ?><?php endif; ?>>
<?php if(strip_tags( $page['field_onlywidget'] ) == ''): ?>
<div class="container"<?php if(strip_tags( $page['field_lanpage'] ) == 'Text right' or strip_tags( $page['field_lanpage'] ) == 'Text left'): ?><?php else:?> style="padding: <?php if(strip_tags( $page['field_martop'] ) == '0'): ?>0<?php else:?><?php if($page['field_martop']): ?><?php echo $page['field_martop']; ?>px<?php else:?>70px<?php endif; ?><?php endif; ?> 15px<?php if(strip_tags( $page['field_marbot'] ) == '0'): ?> 0<?php else:?><?php if($page['field_marbot']): ?> <?php echo $page['field_marbot']; ?>px<?php else:?> 70px<?php endif; ?><?php endif; ?>"<?php endif; ?>>
    <div class="row">
       
      <?php if(strip_tags( $page['field_lanpage'] ) == 'Photos-left'): ?><!-- Стиль блока «Photos-left» --> 
       <div class="col-sm-6">
        <div class="layers">
        <?php if($page['field_pagephoto']): ?>
        <img src="<?php echo $page['field_pagephoto']; ?>?v=1.0.0" alt="" class="layer<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInLeft<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.2s"<?php endif; ?> width="555" height="439"><?php endif; ?>
        <?php if($page['field_accent1']): ?>
        <img src="<?php echo $page['field_accent1']; ?>?v=1.0.0" alt="" class="layer<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInLeft<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.1s"<?php endif; ?> width="555" height="439"><?php endif; ?>
        <?php if($page['field_accent2']): ?>
        <img src="<?php echo $page['field_accent2']; ?>?v=1.0.0" alt="" class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?>fadeInLeft<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0"<?php endif; ?> width="555" height="439"><?php endif; ?>
          </div>
        </div>
        <div class="col-sm-6">
        <?php if(strip_tags( $page['full_text'] )): ?>
          <h5 class="text-uppercase title-2 mb20 opacity-60<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".45s" style="visibility: visible; animation-delay: 0.45s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo strip_tags ( $page['full_text'] ); ?></h5><?php endif; ?>
          <!-- Заголовок -->
          <?php if(strip_tags( $page['field_titleoff'] ) == ''): ?><h2 class="<?php if(strip_tags( $page['field_uppercase'] ) == ''): ?><?php else:?>uppercase <?php endif; ?>mb30<?php if(strip_tags( $page['field_bigh'] ) == 'Monster'): ?> giant<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Big'): ?> bigh<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Middle'): ?> middle<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?><?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="1.00s" style="visibility: visible; animation-delay: 1.00s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo $page['title']; ?></h2><?php endif; ?>
          <?php if(strip_tags( $page['prev_text'] )): ?>
        <!-- Предварительное содержимое -->
     <div class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="1.35s" style="visibility: visible; animation-delay: 1.35s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo $page['prev_text']; ?></div><?php endif; ?>

   
     <?php if($page['field_link']): ?>  <!-- Button «Подробнее» -->
     <a href="<?php echo $page['field_link']; ?>" class="btn btn-primary<?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>  btn-inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".75s"<?php endif; ?> style="background-color:<?php echo siteinfo('siteinfo_color')?>"><?php echo strip_tags ( $page['field_btname'] ); ?></a>
     <!--/ Button «Подробнее» --><?php endif; ?> 
     
     <?php if($page['field_getlink']): ?><!-- Button «Подробнее 2» -->
     <a href="<?php echo $page['field_getlink']; ?>" class="btn btn-default<?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>  btn-inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?> style="background-color:<?php echo siteinfo('siteinfo_color')?>"><?php echo strip_tags ( $page['field_gettext'] ); ?></a>
     <!--/ Button «Подробнее 2» --><?php endif; ?>
     
        </div>
      <!--/ Photos-left --><?php endif; ?> 
      <?php if(strip_tags( $page['field_lanpage'] ) == 'Photos-right'): ?><!-- Стиль блока Photos-right --> 
          
        <div class="col-sm-6">
        <?php if(strip_tags( $page['full_text'] )): ?>
          <h5 class="text-uppercase title-2 mb0 opacity-60<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".45s" style="visibility: visible; animation-delay: 0.45s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo strip_tags ( $page['full_text'] ); ?></h5><?php endif; ?>
          <!-- Заголовок -->
          <?php if(strip_tags( $page['field_titleoff'] ) == ''): ?><h2 class="<?php if(strip_tags( $page['field_uppercase'] ) == ''): ?><?php else:?>uppercase <?php endif; ?>mb30<?php if(strip_tags( $page['field_bigh'] ) == 'Monster'): ?> giant<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Big'): ?> bigh<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Middle'): ?> middle<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="1.00s" style="visibility: visible; animation-delay: 1.00s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo $page['title']; ?></h2><?php endif; ?>
          <?php if(strip_tags( $page['prev_text'] )): ?>
        <!-- Предварительное содержимое -->
     <div class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="1.35s" style="visibility: visible; animation-delay: 1.35s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo $page['prev_text']; ?></div><?php endif; ?>
     
     <?php if($page['field_link']): ?><!-- Button «Подробнее» -->
     <a href="<?php echo $page['field_link']; ?>" class="btn btn-primary<?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>  btn-inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".75s"<?php endif; ?> style="background-color:<?php echo siteinfo('siteinfo_color')?>"><?php echo strip_tags ( $page['field_btname'] ); ?></a>
     <!--/ Button «Подробнее» --><?php endif; ?> 
     
     <?php if($page['field_getlink']): ?><!-- Button «Подробнее 2» -->
     <a href="<?php echo $page['field_getlink']; ?>" class="btn btn-default<?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>  btn-inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?> style="background-color:<?php echo siteinfo('siteinfo_color')?>"><?php echo strip_tags ( $page['field_gettext'] ); ?></a>
     <!--/ Button «Подробнее 2» --><?php endif; ?>
    
    </div>

      <div class="col-sm-6">
        <div class="layers mb-xs40 mt-sm80 mb-md0 mt-md0 mb-lg-50 mt-lg-50">
        <?php if($page['field_pagephoto']): ?>
        <img src="<?php echo $page['field_pagephoto']; ?>?v=1.0.0" alt="" class="layer<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.2s"<?php endif; ?> width="555" height="439"><?php endif; ?>
        <?php if($page['field_accent1']): ?>
        <img src="<?php echo $page['field_accent1']; ?>?v=1.0.0" alt="" class="layer<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.1s"<?php endif; ?> width="555" height="439"><?php endif; ?>
        <?php if($page['field_accent2']): ?>
        <img src="<?php echo $page['field_accent2']; ?>?v=1.0.0" alt="" class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?>fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0"<?php endif; ?> width="555" height="439"><?php endif; ?>
          </div>
        </div>
      <!--/ Photos right --><?php endif; ?> 

      <?php if(strip_tags( $page['field_lanpage'] ) == 'Text right' or strip_tags( $page['field_lanpage'] ) == 'Text left'): ?> 
      <!-- Стиль блока «Text right» или «Text left» -->      
      <div class="demi-1">
        <!-- Основное фото -->
        <?php if($page['field_pagephoto']): ?>
        <?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?>
        <img class="<?php echo strip_tags ( $page['field_imgsize'] ); ?>" src="<?php echo $page['field_pagephoto']; ?>" alt="<?php echo $page['field_alt']; ?>" />
        <?php else:?>
        <?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?>
        <div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
         <div class="img-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
           <?php if($page['field_alt']): ?>
           <span>
             <?php echo $page['field_alt']; ?>  
           </span> <?php endif; ?>
         </div>
       </div>
       <?php endif; ?>
       <?php if(strip_tags( $page['field_imgmask'] ) == 'Rounded'): ?>
       <div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
         <div class="img-round <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
           <?php if($page['field_alt']): ?>
           <span>
             <?php echo $page['field_alt']; ?>  
           </span> <?php endif; ?>
         </div>
       </div>
       <?php endif; ?>
       <?php endif; ?>
       <?php endif; ?><!-- /Основное фото -->
     </div>
     <div<?php if($page['field_anchor']): ?> id="<?php echo $page['field_anchor']; ?>"<?php endif; ?> class="demi-2 <?php echo strip_tags ( $page['field_hight'] ); ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> slideInRight<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Wide'): ?><?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Default'): ?> col-default<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Middle'): ?> col-middle<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Tight'): ?> col-tight<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> slideInRight<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?> <?php if($page['field_bgcolor']): ?>data-overlay-color="<?php if($page['field_bgcolor']): ?><?php echo strip_tags ( $page['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>"<?php endif; ?> <?php if(strip_tags( $page['field_overlay'] ) == 'OFF'): ?><?php else:?>data-overlay-opacity="<?php echo strip_tags ( $page['field_overlay'] ); ?>"<?php endif; ?>>
     <!-- Заголовок -->
     <?php if(strip_tags( $page['field_titleoff'] ) == ''): ?><div class="<?php if(strip_tags( $page['field_uppercase'] ) == ''): ?><?php else:?>uppercase <?php endif; ?>h2<?php if(strip_tags( $page['field_bigh'] ) == 'Monster'): ?> giant<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Big'): ?> bigh<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Middle'): ?> middle<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="1.00s" style="visibility: visible; animation-delay: 1.00s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo $page['title']; ?></div>
     <?php endif; ?>
     <!-- Предварительное содержимое -->
     <div class="prev<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="1.35s" style="visibility: visible; animation-delay: 1.35s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo $page['prev_text']; ?></div>
     <!-- Полное содержимое -->
     <div class="full<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".45s" style="visibility: visible; animation-delay: 0.45s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo $page['full_text']; ?></div>
     <!-- Button «Подробнее» -->
     <?php if($page['field_link']): ?>
     <a href="<?php echo $page['field_link']; ?>" class="btn btn-primary<?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>  btn-inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".75s"<?php endif; ?> style="background-color:<?php echo siteinfo('siteinfo_color')?>"><?php echo strip_tags ( $page['field_btname'] ); ?></a>
     <?php endif; ?> <!--/ Button «Подробнее» -->
   </div> 
   <div class="clearing"></div>
   <?php endif; ?> <!--/ Text right или слева -->

   <!-- Стиль блока «Two columns» -->
   <?php if(strip_tags( $page['field_lanpage'] ) == 'Two columns'): ?> 
   <!-- Заголовок, предварительное и полное содержимое -->
 ?>

 <?php if(strip_tags( $page['field_titleoff'] ) == ''): ?><span class="two-title <?php if(strip_tags( $page['field_uppercase'] ) == ''): ?><?php else:?>uppercase <?php endif; ?>h2<?php if(strip_tags( $page['field_bigh'] ) == 'Monster'): ?> giant<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Big'): ?> bigh<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Middle'): ?> middle<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.1s"<?php endif; ?> style="<?php if(strip_tags( $page['field_textcolor'] ) == 'Black'): ?>color: #333<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>color: #fff<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Gray'): ?>color: #666<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 1'): ?>color:<?php echo siteinfo('siteinfo_color')?><?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 2'): ?>color:<?php echo siteinfo('siteinfo_color2')?><?php endif; ?>"><?php echo $page['title']; ?></span>
 <?php endif; ?>     
 <div<?php if($page['field_anchor']): ?> id="<?php echo $page['field_anchor']; ?>"<?php endif; ?> class="col-sm-6">
 <?php echo $page['prev_text']; ?>
</div>
<div class="col-sm-6">
 <?php echo $page['full_text']; ?>
</div>   
<?php endif; ?> <!--/ Two columns -->

<!-- Стиль блока «World» -->
<?php if(strip_tags( $page['field_lanpage'] ) == 'World'): ?>
<div id="worldless<?php if($page['field_anchor']): ?> <?php echo $page['field_anchor']; ?><?php endif; ?>" class="col-sm-12">
  <h2 class="text-center mb-xs20 mb50"><?php echo $page['title']; ?></h2> </div>
  <div class="col-sm-12 col-md-6 text-center">
    <!-- Основное фото -->
    <?php if($page['field_pagephoto']): ?>
    <?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?>
    <img class="<?php echo strip_tags ( $page['field_imgsize'] ); ?>" src="<?php echo $page['field_pagephoto']; ?>" alt="<?php echo $page['field_alt']; ?>" />
    <?php else:?>
    <?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?>
    <div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
     <div class="img-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
       <?php if($page['field_alt']): ?>
       <span>
         <?php echo $page['field_alt']; ?>  
       </span> <?php endif; ?>
     </div>
   </div>
   <?php endif; ?>
   <?php if(strip_tags( $page['field_imgmask'] ) == 'Rounded'): ?>
   <div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
     <div class="img-round <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
       <?php if($page['field_alt']): ?>
       <span>
         <?php echo $page['field_alt']; ?>  
       </span> <?php endif; ?>
     </div>
   </div>
   <?php endif; ?>
   <?php endif; ?>
   <?php endif; ?><!-- /Основное фото -->
 </div>
 <div class="col-sm-12 col-md-6">
  <div class="row">
    <div class="col-sm-6 col-md-6">
      <div class="list">
        <?php echo $page['prev_text']; ?>
      </div>
    </div>
    <div class="col-sm-6 col-md-6">
      <div class="list">
        <?php echo $page['full_text']; ?>
      </div>
    </div>
  </div>
</div>

<?php endif; ?> <!--/ World -->

<!-- Стиль блока «Centered» -->
<?php if(strip_tags( $page['field_lanpage'] ) == 'Centered'): ?>
<div<?php if($page['field_anchor']): ?> id="<?php echo $page['field_anchor']; ?>"<?php endif; ?> class="<?php if(strip_tags( $page['field_colwidth'] ) == 'Wide'): ?>col-sm-12<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Default'): ?>col-sm-offset-1 col-sm-10<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Middle'): ?>col-sm-offset-2 col-sm-8<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Tight'): ?>col-sm-offset-4 col-sm-4<?php endif; ?>">

<!-- Основное фото -->
<?php if($page['field_pagephoto']): ?>
<?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?>
<img class="<?php echo strip_tags ( $page['field_imgsize'] ); ?>" src="<?php echo $page['field_pagephoto']; ?>" alt="<?php echo $page['field_alt']; ?>" />
<?php else:?>
<?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?>
<div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
 <div class="img-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
   <?php if($page['field_alt']): ?>
   <span>
     <?php echo $page['field_alt']; ?>  
   </span> <?php endif; ?>
 </div>
</div>
<?php endif; ?>
<?php if(strip_tags( $page['field_imgmask'] ) == 'Rounded'): ?>
<div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
 <div class="img-round <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
   <?php if($page['field_alt']): ?>
   <span>
     <?php echo $page['field_alt']; ?>  
   </span> <?php endif; ?>
 </div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?><!-- /Основное фото -->
<!-- Заголовок, предварительное и полное содержимое -->
<?php if(strip_tags( $page['field_titleoff'] ) == ''): ?><div class="<?php if(strip_tags( $page['field_uppercase'] ) == ''): ?><?php else:?>uppercase <?php endif; ?>h2<?php if(strip_tags( $page['field_bigh'] ) == 'Monster'): ?> giant<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Big'): ?> bigh<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Middle'): ?> middle<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.1s"<?php endif; ?> style="<?php if(strip_tags( $page['field_textcolor'] ) == 'Black'): ?>color: #333<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>color: #fff<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Gray'): ?>color: #666<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 1'): ?>color:<?php echo siteinfo('siteinfo_color')?><?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 2'): ?>color:<?php echo siteinfo('siteinfo_color2')?><?php endif; ?>"><?php echo $page['title']; ?></div>
<?php else:?><!--<div class="margin"></div> -->
<?php endif; ?>

<div class="table-wrapper">
  <div class="prev <?php echo strip_tags ( $page['field_hight'] ); ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.2s"<?php endif; ?>><?php echo $page['prev_text']; ?></div>
</div>

<div class="full"><?php echo $page['full_text']; ?></div>
<?php if(strip_tags( $page['field_typeAccent'] ) == 'OFF'): ?>

<!-- Button «Подробнее» -->
<div class="text-center"> 
  <?php if($page['field_link']): ?>
  <a href="<?php echo $page['field_link']; ?>" class="btn btn-primary<?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>  btn-inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.65s"<?php endif; ?>><?php echo strip_tags ( $page['field_btname'] ); ?></a>
  <?php endif; ?> 
  <?php if($page['field_getlink']): ?>
  <a href="<?php echo $page['field_getlink']; ?>" class="btn btn-primary<?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>  btn-inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?>><?php echo strip_tags ( $page['field_gettext'] ); ?></a>
  <?php endif; ?> 
</div> <!-- /Button «Подробнее» -->
<?php endif; ?>
</div> <!-- /Стиль блока «Centered» -->

<!--/ Centered --><?php endif; ?> 


<?php if(strip_tags( $page['field_lanpage'] ) == 'Default'): ?><!-- Стиль блока «Default» -->
<div<?php if($page['field_anchor']): ?> id="<?php echo $page['field_anchor']; ?>"<?php endif; ?> class="<?php if(strip_tags( $page['field_colwidth'] ) == 'Wide'): ?>col-sm-12<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Default'): ?>col-sm-offset-1 col-sm-10<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Middle'): ?>col-sm-offset-2 col-sm-8<?php endif; ?><?php if(strip_tags( $page['field_colwidth'] ) == 'Tight'): ?>col-sm-offset-4 col-sm-4<?php endif; ?>">


<!-- Заголовок, предварительное и полное содержимое -->
<?php if(strip_tags( $page['field_titleoff'] ) == ''): ?><div class="<?php if(strip_tags( $page['field_uppercase'] ) == ''): ?><?php else:?>uppercase <?php endif; ?>h2<?php if(strip_tags( $page['field_bigh'] ) == 'Monster'): ?> giant<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Big'): ?> bigh<?php endif; ?><?php if(strip_tags( $page['field_bigh'] ) == 'Middle'): ?> middle<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.1s"<?php endif; ?> style="<?php if(strip_tags( $page['field_textcolor'] ) == 'Black'): ?>color: #333<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'White'): ?>color: #fff<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Gray'): ?>color: #666<?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 1'): ?>color:<?php echo siteinfo('siteinfo_color')?><?php endif; ?><?php if(strip_tags( $page['field_textcolor'] ) == 'Color 2'): ?>color:<?php echo siteinfo('siteinfo_color2')?><?php endif; ?>"><?php echo $page['title']; ?></div>
<?php else:?><!--<div class="margin"></div> -->
<?php endif; ?>

<div class="table-wrapper">
  <div class="prev <?php echo strip_tags ( $page['field_hight'] ); ?>"><?php echo $page['prev_text']; ?></div>
</div>

<div class="full">

  
  <?php if($page['field_pagephoto']): ?><!-- Основное фото -->
  <?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?>
  <img class="<?php echo strip_tags ( $page['field_imgsize'] ); ?>" src="<?php echo $page['field_pagephoto']; ?>" alt="<?php echo $page['field_alt']; ?>" />
  <?php else:?>
  <?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?>
  <div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
   <div class="img-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
     <?php if($page['field_alt']): ?>
     <span>
       <?php echo $page['field_alt']; ?>  
     </span> <?php endif; ?>
   </div>
 </div>
 <?php endif; ?>
 <?php if(strip_tags( $page['field_imgmask'] ) == 'Rounded'): ?>
 <div class="img-crop <?php echo strip_tags ( $page['field_imgsize'] ); ?>">
   <div class="img-round <?php echo strip_tags ( $page['field_imgsize'] ); ?>" style="background-image:url(<?php echo $page['field_pagephoto']; ?>)"> 
     <?php if($page['field_alt']): ?>
     <span>
       <?php echo $page['field_alt']; ?>  
     </span> <?php endif; ?>
   </div>
 </div>
 <?php endif; ?>
 <?php endif; ?>
 <!-- /Основное фото --><?php endif; ?>
 <?php echo $page['full_text']; ?></div>
 <?php if(strip_tags( $page['field_typeAccent'] ) == 'OFF'): ?>
 
 <?php if($page['field_link']): ?><!-- Button «Подробнее» -->
 <a href="<?php echo $page['field_link']; ?>" class="btn btn-default<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".75s"<?php endif; ?> style="color:<?php echo siteinfo('siteinfo_color')?>;border-color:<?php echo siteinfo('siteinfo_color')?>"><?php echo strip_tags ( $page['field_btname'] ); ?></a>
 <!-- /Button «Подробнее» --><?php endif; ?> 
 <?php endif; ?>
</div> <!-- /Стиль блока «Default» -->
<?php endif; ?>
</div><!-- /row -->


<?php if(strip_tags( $page['field_typeAccent'] ) == 'Pictures'): ?><!-- Blocks-акценты -->
<div id="accent-pictures" class="row m-top70">
  <div class="col-sm-12 text-center">

    <?php if($page['field_accent1']): ?>
    <div class="<?php if($page['field_accent4']): ?>col-md-3 col-sm-6<?php else:?><?php if($page['field_accent3']): ?>col-md-4<?php else:?><?php if($page['field_accent2']): ?>col-md-6<?php else:?>col-md-12<?php endif; ?><?php endif; ?><?php endif; ?>">
      <div class="accent-img<?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?> accent-rectangle<?php endif; ?><?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?> accent-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?><?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fill'): ?> cover<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fit'): ?> contain<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Original'): ?> origin<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.1s"<?php endif; ?> style="background-image:url(<?php echo $page['field_accent1']; ?>)"></div>
      <div class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.2s"<?php endif; ?>><?php echo $page['field_accent1text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 1 -->

    <?php if($page['field_accent2']): ?>
    <div class="<?php if($page['field_accent4']): ?>col-md-3 col-sm-6<?php else:?><?php if($page['field_accent3']): ?>col-md-4<?php else:?>col-md-6<?php endif; ?><?php endif; ?>">
      <div class="accent-img<?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?> accent-rectangle<?php endif; ?><?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?> accent-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?><?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fill'): ?> cover<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fit'): ?> contain<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Original'): ?> origin<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.2s"<?php endif; ?> style="background-image:url(<?php echo $page['field_accent2']; ?>)"></div>
      <div class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.3s"<?php endif; ?>><?php echo $page['field_accent2text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 2 -->

    <?php if($page['field_accent3']): ?>
    <div class="<?php if($page['field_accent4']): ?>col-md-3 col-sm-6<?php else:?>col-md-4<?php endif; ?>">
      <div class="accent-img<?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?> accent-rectangle<?php endif; ?><?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?> accent-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?><?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fill'): ?> cover<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fit'): ?> contain<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Original'): ?> origin<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.3s"<?php endif; ?> style="background-image:url(<?php echo $page['field_accent3']; ?>)"></div>
      <div class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.4s"<?php endif; ?>><?php echo $page['field_accent3text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 3 -->

    <?php if($page['field_accent4']): ?>
    <div class="col-md-3 col-sm-6">
      <div class="accent-img<?php if(strip_tags( $page['field_imgmask'] ) == 'Rectangle'): ?> accent-rectangle<?php endif; ?><?php if(strip_tags( $page['field_imgmask'] ) == 'Circle'): ?> accent-mask <?php echo strip_tags ( $page['field_imgsize'] ); ?><?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fill'): ?> cover<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fit'): ?> contain<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Original'): ?> origin<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.4s"<?php endif; ?> style="background-image:url(<?php echo $page['field_accent4']; ?>)"></div>
      <div class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.5s"<?php endif; ?>><?php echo $page['field_accent4text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 4 -->

  </div>
</div>
<!-- /row (Blocks-акценты) -->
<?php endif; ?>

<?php if(strip_tags( $page['field_typeAccent'] ) == 'Icons'): ?>
<div class="row m-top70">
  <div class="col-sm-12 text-center">

    <?php if($page['field_accent1']): ?>
    <div class="service">
      <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.4s">
        <div class="icon-box"> 
          <div class="accent-img" style="background-image:url(<?php echo $page['field_accent1']; ?>)"></div>
        </div>
      </div>
      <div class="title fadeInUp wow" data-wow-delay="0.1s"><?php echo $page['field_accent1text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 1 -->

    <?php if($page['field_accent2']): ?>
    <div class="service">
      <div class="icon-wrapper fadeInUp wow">
        <div class="icon-box"> 
          <div class="accent-img" style="background-image:url(<?php echo $page['field_accent2']; ?>)"></div>
        </div>
      </div>
      <div class="title fadeInUp wow" data-wow-delay="0.1s"><?php echo $page['field_accent2text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 2 -->

    <?php if($page['field_accent3']): ?>
    <div class="service">
      <div class="icon-wrapper fadeInUp wow">
        <div class="icon-box"> 
          <div class="accent-img" style="background-image:url(<?php echo $page['field_accent3']; ?>)"></div>
        </div>
      </div>
      <div class="title fadeInUp wow" data-wow-delay="0.1s"><?php echo $page['field_accent3text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 3 -->

    <?php if($page['field_accent4']): ?>
    <div class="service">
      <div class="icon-wrapper fadeInUp wow">
        <div class="icon-box"> 
          <div class="accent-img" style="background-image:url(<?php echo $page['field_accent4']; ?>)"></div>
        </div>
      </div>
      <div class="title fadeInUp wow" data-wow-delay="0.1s"><?php echo $page['field_accent4text']; ?></div>
    </div>
    <?php endif; ?><!-- /accent 4 -->                        

  </div>
</div>
<!-- /row (Blocks-акценты) -->
<?php endif; ?>

<?php if(strip_tags( $page['field_typeAccent'] ) == 'Three columns'): ?> 
<article id="col_3" class="row">

  <div class="col-sm-4">
    <?php echo $page['field_accent1text']; ?>
  </div>

  <div class="col-sm-5">
    <?php echo $page['field_accent2text']; ?>
  </div>
  <div class="col-sm-3">
    <?php echo $page['field_accent3text']; ?>
  </div>

</article>
<!-- /row (Blocks-акценты) -->
<?php endif; ?>

<?php if(strip_tags( $page['field_typeAccent'] ) == 'OFF'): ?>
<?php else:?>

<?php if($page['field_link']): ?><!-- Button «Подробнее» -->
<a href="<?php echo $page['field_link']; ?>" class="btn btn-primary<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".75s" style="visibility: visible; animation-delay: 0.75s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?>><?php echo strip_tags ( $page['field_btname'] ); ?></a>
<?php endif; ?> 
<!-- /Button «Подробнее» --><?php endif; ?>


<?php if(strip_tags( $page['field_widget'] ) == 'Non' or strip_tags( $page['field_widget'] ) == 'Feedback'): ?>
<?php else:?><!-- Виджет --> 
<div id="widget" class="row<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay=".55s"<?php endif; ?>>
  <?php if(strip_tags( $page['field_widget'] ) == 'Actions'): ?>
  <?php echo widget ('sale'); ?> 
  <?php endif; ?> 
  <?php if(strip_tags( $page['field_widget'] ) == 'Comments'): ?>
  <?php echo widget ('comments'); ?> 
  <?php endif; ?> 
  <?php if(strip_tags( $page['field_widget'] ) == 'Price'): ?>
  <?php echo widget ('komplex'); ?> 
  <?php endif; ?>
  <?php if(strip_tags( $page['field_widget'] ) == 'Columns'): ?>
  <?php echo widget ('lenta-two-col'); ?> 
  <?php endif; ?>
  <?php if(strip_tags( $page['field_widget'] ) == 'Ecwid'): ?>
  <?php $this->include_tpl('store', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?> 
  <?php endif; ?>
  <?php if(strip_tags( $page['field_widget'] ) == 'Specification'): ?>
  <?php echo widget ('lenta-for-col'); ?> 
  <?php endif; ?>
  <?php if(strip_tags( $page['field_widget'] ) == 'Articles'): ?>
  <?php echo widget ('articles'); ?>
  <?php endif; ?>
</div>
<!-- /row (виджет) --><?php endif; ?>
</div> <!-- /container --><?php endif; ?>
 <?php if(strip_tags( $page['field_widget'] ) == 'Feedback'): ?>
  <!-- contact_form.tpl -->
  <?php $this->include_tpl('contact_form', '/var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave'); ?>
  <?php endif; ?>
<?php if(strip_tags( $page['field_typeAccent'] ) == 'Blocks'): ?> <!-- Акцент: Blocks -->
<article id="accent-block">

  <div class="col-sm-6 accent-block" style="background-color:<?php echo $page['field_bgcolor']; ?>">
    <div class="accent-block-img" data-background="<?php echo $page['field_accent1']; ?>?v=1.0.0"></div>
    <div class="col-sm-12 accent-block-text"><?php echo $page['field_accent1text']; ?></div>
  </div>

  <div class="col-sm-6 accent-block" style="background-color:<?php echo $page['field_bgcolor']; ?>">
    <div class="accent-block-img" data-background="<?php echo $page['field_accent2']; ?>?v=1.0.0"></div>
    <div class="col-sm-12 accent-block-text"><?php echo $page['field_accent2text']; ?></div>
  </div>   
  <div class="clearing"></div>
</article>
<!-- /Акцент: Blocks --><?php endif; ?>



<?php if($page['field_albumID']): ?><!--Вставка альбома галереи на странице -->
<?php if(strip_tags( $page['field_gallery'] ) == 'Photo grid'): ?>
<ul class="portfolio-list four-column list-unstyled popup-gallery">
  <li class="grid-sizer"></li>
  <?php $img = $CI->load->module('gallery')->gallery_m->get_album_images( $page['field_albumID'] , NULL, NULL, current_language()) ?>
  <?php $count=0?>
  <?php if(is_true_array($img)){ foreach ($img as $image){ ?>
  <li class="portfolio-item branding work-ajax-link<?php if($count > 4): ?> hide6<?php endif; ?><?php if($count > 2): ?> hide3<?php endif; ?>">
    <a class="<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.1s"<?php endif; ?> href="<?php echo media_url ('uploads/gallery'); ?>/<?php echo $image['album_id']; ?>/<?php echo $image['file_name']; ?><?php echo $image['file_ext']; ?>" data-title="<?php echo $image['description']; ?>" rel="group"> <img src="<?php echo media_url ('uploads/gallery'); ?>/<?php echo $image['album_id']; ?>/<?php echo $image['file_name']; ?><?php echo $image['file_ext']; ?>?v=1.0.0" alt="<?php echo $image['description']; ?>" width="400" height="320">
      <div class="info-container">
        <div class="title"><?php echo $image['title']; ?></div>
        <div class="category"><?php echo strip_tags ( $image['description'] ); ?></div>
      </div> 
    </a>
  </li><!-- .portfolio-item -->
  <?php $count++?>
  <?php if($count==64): ?><?php break?><?php endif; ?>
  <?php }} ?> 
</ul>
<?php endif; ?><!--/Photo grid -->

<?php if(strip_tags( $page['field_gallery'] ) == 'Logos 3' or strip_tags( $page['field_gallery'] ) == 'Logos 3 (white)'): ?>
<div id="clients" class="<?php if(strip_tags( $page['field_gallery'] ) == 'Logos 3 (white)'): ?>inverted<?php endif; ?><?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $page['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name:<?php if(strip_tags( $page['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $page['field_animation'] ); ?><?php endif; ?>"<?php endif; ?> <?php if($page['field_bgcolor']): ?>data-overlay-color="<?php if($page['field_bgcolor']): ?><?php echo strip_tags ( $page['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>"<?php endif; ?>>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 mb60">
        <div class="owl-carousel default-carousel no-dots client-carousel">
          <?php $img = $CI->load->module('gallery')->gallery_m->get_album_images( $page['field_albumID'] , NULL, NULL, current_language()) ?>
          <?php $count=0?>
          <?php if(is_true_array($img)){ foreach ($img as $image){ ?>
          <a class="carousel-item" data-merge="2"><img src="<?php echo site_url ('uploads/gallery'); ?>/<?php echo $image['album_id']; ?>/<?php echo $image['file_name']; ?><?php echo $image['file_ext']; ?>" alt=""> </a>
          <?php $count++?>
          <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?><!--/Logos 3 -->
<!--/вставка альбома --><?php endif; ?>


<?php if(strip_tags( $page['field_typeAccent'] ) == 'Statistics'): ?><!-- Акцент: Инфографика цифр -->
<div id="block-stat" class="pos-relative">
  <div class="container">

    <div class="row">

      <div class="col-xs-6 col-sm-3">
        <div class="couner-item" data-counter-animation="<?php echo $page['field_accent1number']; ?>">
        <div class="count-info">
            <div class="count"></div><?php if($page['field_accent1plus']): ?><div class="count-plus fadeIn wow" data-wow-delay="0.9s"><?php echo $page['field_accent1plus']; ?></div><?php endif; ?>
            <div class="title"><?php echo $page['field_accent1text']; ?></div>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3">
        <div class="couner-item" data-counter-animation="<?php echo $page['field_accent2number']; ?>">
          <div class="count-info">
            <div class="count"></div><?php if($page['field_accent2plus']): ?><div class="count-plus fadeIn wow" data-wow-delay="1.2s"><?php echo $page['field_accent2plus']; ?></div><?php endif; ?>
            <div class="title"><?php echo $page['field_accent2text']; ?></div>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3">
        <div class="couner-item" data-counter-animation="<?php echo $page['field_accent3number']; ?>">
          <div class="count-info">
            <div class="count"></div><?php if($page['field_accent3plus']): ?><div class="count-plus fadeIn wow" data-wow-delay="1.4s"><?php echo $page['field_accent3plus']; ?></div><?php endif; ?>
            <div class="title"><?php echo $page['field_accent3text']; ?></div>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-3">
        <div class="couner-item" data-counter-animation="<?php echo $page['field_accent4number']; ?>">
          <div class="count-info">
            <div class="count"></div><?php if($page['field_accent4plus']): ?><div class="count-plus fadeIn wow" data-wow-delay="1.7s"><?php echo $page['field_accent4plus']; ?></div><?php endif; ?>
            <div class="title"><?php echo $page['field_accent4text']; ?></div>
          </div>
        </div>
      </div>
    </div>
                                
                                
                              </div>
                              <!-- .page-section -->
                            </div>
                            <!-- /Акценты: Statistics --><?php endif; ?>    

                          <!-- /block... --></div> 
                          
                          <?php if($page['field_fullimg']): ?><!-- Фото на всю ширину -->
                          <div class="fullimg<?php if(strip_tags( $page['field_bgfixed'] ) == 'ON'): ?> fixed<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fill'): ?> cover<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Fit'): ?> contain<?php endif; ?><?php if(strip_tags( $page['field_cover'] ) == 'Original'): ?> origin<?php endif; ?><?php if(strip_tags( $page['field_botspace'] ) == 'ON'): ?> b100<?php endif; ?> <?php echo strip_tags ( $page['field_hight2'] ); ?>" style="background-image:url(<?php echo $page['field_fullimg']; ?>);"></div>
                          <!-- /Фото на всю ширину --><?php endif; ?>
                          
                          <?php if($page['field_gps']): ?><!-- Map на всю ширину -->
                          <div class="embed-container map maps"> 
                           <!--Подключение карты Яндекс 2.1-->
                           <script src="http://api-maps.yandex.ru/2.1/?lang=<?php echo strip_tags ( $page['field_maplang'] ); ?>" type="text/javascript">

                            var myMap,
                            myPlacemark;
                            var init =  function(){
                              if(typeof  YMaps != "undefined" ){
                                myMap = new YMaps.Map("y-maps", {
                                  center: [<?php echo $page['field_gps']; ?>],
                                  zoom: 16,
                                  controls: [
                                  'zoomControl',
                                  'fullscreenControl',
                                  'typeSelector',
                                  'rulerControl',
                                  'trafficControl'
                                  ]
                                });
                                // Если картинка загружена, то:
                                <?php if($page['field_point']): ?>
                                myPlacemark = new YMaps.Placemark(myMap.getCenter(), {
                                  hintContent: '<?php echo $page['field_hint']; ?>',
                                  balloonContent: '<?php echo $page['field_pointdesc']; ?>'
                                }, {

                                  iconLayout: 'default#image',
                                  iconImageHref: '<?php echo $page['field_point']; ?>',
                                  iconImageSize: [45, 45],
                                  iconImageOffset: [-30, -30]
                                });
            // Если Pictures OFF, то подгружается Default метка
            <?php else:?>
            myPlacemark = new YMaps.Placemark([<?php echo $page['field_gps']; ?>], {
              hintContent: '<?php echo $page['field_hint']; ?>',
              balloonContent: '<?php echo $page['field_pointdesc']; ?>'
            });
            <?php endif; ?>
            myMap.geoObjects.add(myPlacemark);
          }
        };
        $(document).ready(function() {
          if(typeof YMaps != "undefined"){
            console.log(typeof  YMaps);
            YMaps.ready(init);
          }
        });
      </script>
      
      <div id="y-maps"></div>
    </div>
    <!-- //map --> 
    <script>
  // Disable scroll zooming and bind back the click event
  var onMapMouseleaveHandler = function (event) {
    var that = $(this);

    that.on('click', onMapClickHandler);
    that.off('mouseleave', onMapMouseleaveHandler);
    that.find('ymaps').css("pointer-events", "none");
  }

  var onMapClickHandler = function (event) {
    var that = $(this);

    // Disable the click handler until the user leaves the map area
    that.off('click', onMapClickHandler);

    // Enable scrolling zoom
    that.find('ymaps').css("pointer-events", "auto");

    // Handle the mouse leave event
    that.on('mouseleave', onMapMouseleaveHandler);
  }

  // Enable map zooming with mouse scroll when the user clicks the map
  $('.maps.embed-container').on('click', onMapClickHandler);
</script> 

<!--/field_gps--><?php endif; ?>
<!-- /if field_video --><?php endif; ?>
<?php }} ?><?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531798; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/landing.tpl ?>