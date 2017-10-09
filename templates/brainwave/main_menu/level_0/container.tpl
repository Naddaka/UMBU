<!-- main_menu/level_0/container.tpl -->
{$category = get_category(1)}
{$item = $CI->load->module('cfcm')->connect_fields($category, 'category')}
{if strip_tags($item.field_menu) == 'Centered'}

<div class="navigation light navbar-fixed-top center-menu">
    <nav>
        <button type="button" class="navbar-toggle collapsed"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="title">{echo siteinfo('siteinfo_transl-menu')}</span> </button>

        <ul class="clearfix">
            {$wrapper}
        </ul>
    </nav>
</div>
{/if}
{if strip_tags($item.field_menu) == 'Logo left'}
<div class="navigation default light navbar-fixed-top">
    <nav>
        <a class="navbar-brand" href="{site_url()}"> <img class="logo-img" src="{echo siteinfo('siteinfo_logo')}?v=1.0.0" alt=""> </a>
        <button type="button" class="navbar-toggle collapsed"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="title">{echo siteinfo('siteinfo_transl-menu')}</span> </button>

      
       <ul class="clearfix">
            {$wrapper}
            
 <!--  Сделать включатель корзины для ECWID 
            <li class="divider-vertical hidden-xs"></li>
            <li class="large left"> <a href="/store#!/~/cart" class="page-load" data-title="BrainWave | Cart"><i aria-hidden="true" class="et-icon-basket"></i><i class="visible-xs-inline-block"> Cart</i></a>
           
        </li> -->
    </ul>
</nav>
</div>
{/if}
{if strip_tags($item.field_menu) == 'Button'}
<div class="navigation default style-2 light navbar-fixed-top">
    <nav>
        <button type="button" class="navbar-toggle collapsed"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <!-- <span class="title">{echo siteinfo('siteinfo_transl-menu')}</span>  --></button>
        <div class="full-height-wrapper">
            <div class="table">
                <div class="table-cell">
                  <ul class="clearfix">
                    {$wrapper}
                </ul>
            </div>
        </div>
    </div>
</nav>
</div>
{/if}

{if strip_tags($item.field_menu) == 'Left-Right'}
    <ul class="clearfix">
                {$wrapper}
    </ul>
{/if}