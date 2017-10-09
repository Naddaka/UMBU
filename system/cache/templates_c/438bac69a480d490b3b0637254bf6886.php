<!-- slider.tpl -->

<!-- Header with slider -->
<header id="home">
    <div id="slides" class="home-slider">
        <?php $category = get_category(1)?>
        <?php $item = $CI->load->module('cfcm')->connect_fields($category, 'category')?>
        <?php if(strip_tags( $item['field_menu'] ) == 'Button'): ?>
        <a class="logo" href="<?php echo site_url (); ?>"> <img class="logo-img" src="<?php echo siteinfo('siteinfo_logo')?>?v=1.0.0" alt=""> </a>
        <?php endif; ?>
        <div class="slides-container">
            <?php $pages = category_pages('3')?>
            <?php if(is_true_array($pages)){ foreach ($pages as $item){ ?>
            <?php $item = $CI->load->module('cfcm')->connect_fields($item, 'page')?>
            <?php if(strip_tags( $item['field_slideStyle'] ) == 'Default'): ?>
            <div class="slide<?php if(strip_tags( $item['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?>" data-overlay-color="<?php if($item['field_bgcolor']): ?><?php echo strip_tags ( $item['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>" data-overlay-opacity="<?php if(strip_tags( $item['field_overlay'] ) == 'OFF'): ?>0<?php else:?><?php echo strip_tags ( $item['field_overlay'] ); ?><?php endif; ?>"> <img src="<?php echo $item['field_pagephoto']; ?>?v=1.0.0" alt="">
                <div class="content">
                    <div class="display-tc">
                        <div class="text-center<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.45s"<?php endif; ?>>
                         <!--Предварительное содержание -->
                         <?php if($item['prev_text']): ?>
                         <div class="h5 text-uppercase <?php if(strip_tags( $item['field_lineoff'] ) == ''): ?>underline-large<?php endif; ?> display-ib mb-xs5 mb-md15"><?php echo strip_tags ( $item['prev_text'] ); ?></div>
                         <?php endif; ?>
                     </div>
                     <!-- Заголовок -->
                     <?php if(strip_tags( $item['field_titleoff'] ) == ''): ?>
                     <h1 class="text-uppercase text-center mb-md20 mb-md40<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.55s"<?php endif; ?>><?php echo $item['title']; ?></h1>
                     <?php endif; ?>
                     <!-- Полное содержание -->
                     <?php if($item['full_text']): ?>
                     <div class="text-center">
                        <div class="container<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.55s"<?php endif; ?>>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="text-center mb-md20 mb-md40 mt15"><?php echo strip_tags ( $item['full_text'] ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="text-center"> 
                        <?php if($item['field_link']): ?>
                        <a href="<?php echo $item['field_link']; ?>" class="btn btn-primary btn-inverted scrollTo<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.65s"<?php endif; ?>><?php echo strip_tags ( $item['field_btname'] ); ?></a>
                        <?php endif; ?> 
                        <?php if($item['field_getlink']): ?>
                        <a href="<?php echo $item['field_getlink']; ?>" class="btn btn-default btn-inverted<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?>><?php echo strip_tags ( $item['field_gettext'] ); ?></a>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if(strip_tags( $item['field_slideStyle'] ) == 'Middle'): ?>
        <div class="slide<?php if(strip_tags( $item['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?>" data-overlay-color="<?php if($item['field_bgcolor']): ?><?php echo strip_tags ( $item['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>" data-overlay-opacity="<?php if(strip_tags( $item['field_overlay'] ) == 'OFF'): ?>0<?php else:?><?php echo strip_tags ( $item['field_overlay'] ); ?><?php endif; ?>"> <img src="<?php echo $item['field_pagephoto']; ?>?v=1.0.0" alt="">
            <div class="content">
                <div class="display-tc">
                    <div class="text-center">
                        <!-- Заголовок -->
                        <?php if(strip_tags( $item['field_titleoff'] ) == ''): ?>
                        <div class="text-uppercase <?php if(strip_tags( $item['field_lineoff'] ) == ''): ?>underline-large<?php endif; ?> display-ib mb-xs5 mb-md15"><?php echo $item['title']; ?></div>
                        <?php endif; ?>
                    </div>
                    <!-- Полное содержание -->
                    <?php if($item['full_text']): ?>
                    <div class="text-center">
                        <div class="container<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.55s"<?php endif; ?>>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="text-center mb-md20 mb-md40 mt15"><?php echo strip_tags ( $item['full_text'] ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!--Предварительное содержание -->
                    <?php if($item['prev_text']): ?>
                    <div class="middle-header text-uppercase text-center mt-md30 mb-md20 mb-md40<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.55s"<?php endif; ?>><?php echo $item['prev_text']; ?></div>
                    <?php endif; ?>
                    <div class="text-center"> 
                        <?php if($item['field_link']): ?>
                        <a href="<?php echo $item['field_link']; ?>" class="btn btn-primary btn-inverted scrollTo<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.65s"<?php endif; ?>><?php echo strip_tags ( $item['field_btname'] ); ?></a>
                        <?php endif; ?> 
                        <?php if($item['field_getlink']): ?>
                        <a href="<?php echo $item['field_getlink']; ?>" class="btn btn-default btn-inverted<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?>><?php echo strip_tags ( $item['field_gettext'] ); ?></a>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if(strip_tags( $item['field_slideStyle'] ) == 'Large'): ?>
        <div class="slide<?php if(strip_tags( $item['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?>" data-overlay-color="<?php if($item['field_bgcolor']): ?><?php echo strip_tags ( $item['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>" data-overlay-opacity="<?php if(strip_tags( $item['field_overlay'] ) == 'OFF'): ?>0<?php else:?><?php echo strip_tags ( $item['field_overlay'] ); ?><?php endif; ?>"> <img src="<?php echo $item['field_pagephoto']; ?>?v=1.0.0" alt="">
            <div class="content">
                <div class="display-tc">
                    <div class="text-center">
                       <!--  <a class="logo-in-slide" href="<?php echo site_url (); ?>"> <img class="logo-img" src="<?php echo siteinfo('siteinfo_logo')?>?v=1.0.0" alt=""> </a> -->
                       <!-- Заголовок -->
                       <?php if(strip_tags( $item['field_titleoff'] ) == ''): ?>
                       <div class="large-header text-uppercase <?php if(strip_tags( $item['field_lineoff'] ) == ''): ?>underline-large<?php endif; ?> display-ib mb-xs5 mb-md15<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.5s"<?php endif; ?>><?php echo $item['title']; ?></div>
                       <?php endif; ?>
                   </div>
                   <!-- Полное содержание -->
                   <?php if($item['full_text']): ?>
                   <div class="text-center">
                    <div class="container<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeIn<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.5s"<?php endif; ?>>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <p class="text-center mb-md20 mb-md40 mt15"><?php echo strip_tags ( $item['full_text'] ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <!--Предварительное содержание -->
                <?php if($item['prev_text']): ?>
                <div class="h5 text-uppercase text-center mt-md15 mb-md20 mb-md40<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?>><?php echo strip_tags ( $item['prev_text'] ); ?></div>
                <?php endif; ?>
                <div class="text-center"> 
                    <?php if($item['field_link']): ?>
                    <a href="<?php echo $item['field_link']; ?>" class="btn btn-primary btn-inverted scrollTo<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?>><?php echo strip_tags ( $item['field_btname'] ); ?></a>
                    <?php endif; ?> 
                    <?php if($item['field_getlink']): ?>
                    <a href="<?php echo $item['field_getlink']; ?>" class="btn btn-default btn-inverted<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?>><?php echo strip_tags ( $item['field_gettext'] ); ?></a>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if(strip_tags( $item['field_slideStyle'] ) == 'Text rotator'): ?>
    <div class="home-text-rotate image<?php if(strip_tags( $item['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?>" data-background="<?php echo $item['field_pagephoto']; ?>?v=1.0.0" data-overlay-color="<?php if($item['field_bgcolor']): ?><?php echo strip_tags ( $item['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>" data-overlay-opacity="<?php if(strip_tags( $item['field_overlay'] ) == 'OFF'): ?>0<?php else:?><?php echo strip_tags ( $item['field_overlay'] ); ?><?php endif; ?>">
        <div class="slide">
            <div class="content">
                <div class="display-tc">
                    <div class="text-center <?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.35s"<?php endif; ?>>
                        <?php if(strip_tags( $item['field_titleoff'] ) == ''): ?>
                        <div class="h5 white text-uppercase underline-large display-ib mb-xs5 mb-md5"><?php echo $item['title']; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="h1 white text-uppercase text-center mb-xs5 mb-md30 fadeInUp wow" data-wow-delay=".55s"><?php echo strip_tags ( $item['prev_text'] ); ?><span class="js-rotating" data-animation="flipInX"><?php echo strip_tags ( $item['full_text'] ); ?></span></div>
                    <div class="text-center"> 
                       <?php if($item['field_link']): ?>
                       <a href="<?php echo $item['field_link']; ?>" class="btn btn-primary<?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> btn-inverted<?php endif; ?> scrollTo<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.85s"<?php endif; ?>><?php echo strip_tags ( $item['field_btname'] ); ?></a>
                       <?php endif; ?> 
                       <?php if($item['field_getlink']): ?>
                       <a href="<?php echo $item['field_getlink']; ?>" class="btn btn-default <?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> btn-inverted<?php endif; ?><?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.90s"<?php endif; ?>><?php echo strip_tags ( $item['field_gettext'] ); ?></a>
                       <?php endif; ?>  
                   </div>
               </div>
           </div>
       </div>
   </div>
   <?php endif; ?>
        
        <?php if(strip_tags( $item['field_slideStyle'] ) == 'Block left' or strip_tags( $item['field_slideStyle'] ) == 'Block right'): ?>
       
        <div class="slide<?php if(strip_tags( $item['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?>"> <img src="<?php echo $item['field_pagephoto']; ?>?v=1.0.0" alt="">
            <div class="content">
                <div id="slide-block-lr" class="display-tc">
                         <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                    <div class="slider-block-r<?php if(strip_tags( $item['field_slideStyle'] ) == 'Block right'): ?> alignright<?php endif; ?><?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.35s"<?php endif; ?> data-overlay-color="<?php if($item['field_bgcolor']): ?><?php echo strip_tags ( $item['field_bgcolor'] ); ?><?php else:?>#000<?php endif; ?>" data-overlay-opacity="<?php if(strip_tags( $item['field_overlay'] ) == 'OFF'): ?>0<?php else:?><?php echo strip_tags ( $item['field_overlay'] ); ?><?php endif; ?>">

                            <!-- Заголовок -->
                            <?php if(strip_tags( $item['field_titleoff'] ) == ''): ?>
                            <div class="slide-title <?php if(strip_tags( $item['field_lineoff'] ) == ''): ?>underline-large<?php endif; ?><?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.55s"<?php endif; ?>><?php echo $item['title']; ?></div>
                            <?php endif; ?>

                            <!--Предварительное содержание -->
                            <?php if($item['prev_text']): ?>
                            <div class="slide-prevtext<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.65s"<?php endif; ?>><?php echo $item['prev_text']; ?></div>
                            <?php endif; ?>

                            <!-- Полное содержание -->
                            <?php if($item['full_text']): ?>
                            <div class="slide-fulltext<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.75s"<?php endif; ?>>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p class="text-center mb-md20 mb-md40 mt15"><?php echo strip_tags ( $item['full_text'] ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <!-- Кнопки -->
                            <?php if($item['field_link']): ?>
                            <a href="<?php echo $item['field_link']; ?>" class="btn btn-primary<?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> btn-inverted<?php endif; ?> scrollTo<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.85s"<?php endif; ?>><?php echo strip_tags ( $item['field_btname'] ); ?></a>
                            <?php endif; ?> 
                            <?php if($item['field_getlink']): ?>
                            <a href="<?php echo $item['field_getlink']; ?>" class="btn btn-default <?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> btn-inverted<?php endif; ?><?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?><?php if(strip_tags( $item['field_animation'] ) == 'Default'): ?> fadeInUp<?php else:?> <?php echo strip_tags ( $item['field_animation'] ); ?><?php endif; ?> wow<?php endif; ?>"<?php if(strip_tags( $item['field_animation'] ) == 'OFF'): ?><?php else:?> data-wow-delay="0.90s"<?php endif; ?>><?php echo strip_tags ( $item['field_gettext'] ); ?></a>
                            <?php endif; ?> 

                        </div>          
                    </div>

                </div>
            </div>
               </div>
           </div>
       </div>
    <?php endif; ?>
    <?php }} ?>

</div>

<nav class="slides-navigation"> <a href="#" class="next"><i class="fa fa-angle-right"></i></a> <a href="#" class="prev"><i class="fa fa-angle-left"></i></a> </nav>
</div>
<?php $category = get_category(1)?>
<?php $item = $CI->load->module('cfcm')->connect_fields($category, 'category')?>
<div class="scroll-btn-wrapper">
    <a href="#block-center" class="scroll-down scrollTo<?php if(strip_tags( $item['field_mouseColor'] ) == 'Black'): ?> inverted<?php endif; ?><?php if(strip_tags( $item['field_mouseColor'] ) == 'Gray'): ?> inverted2<?php endif; ?>"><img class="scroll-down-img" src="<?php if(isset($THEME)){ echo $THEME; } ?>img/mouse.png?v=1.0.0" alt=""><?php echo siteinfo('siteinfo_transl-scroll')?></a>
</div>
</header><?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531799; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/slider.tpl ?>