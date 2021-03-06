<!-- Шаблон media.tpl -->

<!-- header.tpl -->{include_tpl('header')}

<div class="container">

	<section class="row name-filters">
		<article class="col-sm-12">
			<div id="filters" class="filters">

				<a href="{$category.url}">{echo siteinfo('siteinfo_transl-all')}</a>

				{$sub_cats = get_sub_categories($category.id)}
				{foreach $sub_cats as $sub_cat}
				<a data-filter="{$sub_cat.url}" >{$sub_cat.name}</a>
				{/foreach}

			</div>
		</article>
	</section>
	<section class="row publes">
		<article id="main" role="main">
			<ol id="tiles">
				{foreach $pages as $page}
				{$item = $CI->load->module('cfcm')->connect_fields($page, 'page')}
				{$c = explode("/", rtrim($page.cat_url, "/"))}

				<li data-filter-class='["{if $c[1]}{$c[1]}{else:}{$c[0]}{/if}"]'> 
					{if $item.field_video} <!--подгрузиться видео, если оно есть -->
					<div class="media-video text-center" style="height: 235px; width: 340px; margin-left: 10px;" data-background="{$page.field_pagephoto}?v=1.0.0" data-overlay-color="#000" data-overlay-opacity="0.5">
						<a href="{$page.field_video}" class="popup-youtube big-icon white">
							<div class="circle pulse"></div>
							<i class="fa fa-play"></i>
						</a>
					</div>
					<div class="short">
          		<hgroup>
          			<h2 class="media-video-text">{$page.title}</h2>
          		</hgroup>
          		<span class="date media-video-text"> {date('m.Y', $page.publish_date)} </span>
          		<span class="media-video-p">{$page.prev_text}</span> 
          	</div>
          		<div class="clearing"></div>
          <!-- div class="smvideo">
          	<iframe width="560" height="315" src="https://www.youtube.com/embed/{$page.field_video}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div> -->
          {else:}
          {if $item.field_pagephoto} <!--Если есть большая картинка, то подгрузится только она -->
          <a href="{site_url($page.full_url)}"> 
          	<div class="imgbig" style="background-image:url({$item.field_pagephoto})"></div>
          	<div class="short">
          		<hgroup>
          			<h2>{$page.title}</h2>
          		</hgroup>
          		<span class="date"> {date('m.Y', $page.publish_date)} </span> {$page.prev_text} </div>
          		<div class="clearing"></div>
          	</a> 
          	{/if} 
          	{/if} 
          </li>
          
          {/foreach}
      </ol>
  </article>
</section>

<div class="row">
	<div class="col-sm-12">
		{$pagination}
	</div>
</div>
</div>

<link rel="stylesheet" href="{$THEME}css/wookmark.css" />
<!-- include jQuery --> 
<script src="{$THEME}js/jquery.min.js"></script> 

<!-- Include the imagesLoaded plug-in --> 
<script src="{$THEME}js/jquery.imagesloaded.js"></script> 

<!-- Include the plug-in --> 
<script src="{$THEME}js/jquery.wookmark.js"></script> 

<!-- Once the page is loaded, initalize the plug-in. --> 
{literal} 

<script type="text/javascript">
	(function ($){
		$('#tiles').imagesLoaded(function() {
        // Prepare layout options.

        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 5, // Optional, the distance between grid items
          itemWidth: 380, // Optional, the width of a grid item
          fillEmptySpace: true // Optional, fill the bottom of each column with widths of flexible height

      };

        // Get a reference to your grid items.
        var handler = $('#tiles li'),
        filters = $('#filters a');

        // Call the layout function.
        handler.wookmark(options);

        /**
         * When a filter is clicked, toggle it's active state and refresh.
         */
         var onClickFilter = function(event) {
         	var item = $(event.currentTarget),
         	activeFilters = [];

         	if (!item.hasClass('active')) {
         		filters.removeClass('active');
         	}
         	item.toggleClass('active');

          // Filter by the currently selected filter
          if (item.hasClass('active')) {
          	activeFilters.push(item.data('filter'));
          }

          handler.wookmarkInstance.filter(activeFilters);
      }

        // Capture filter click events.
        filters.click(onClickFilter);
    });
	})(jQuery);
</script>
{/literal}