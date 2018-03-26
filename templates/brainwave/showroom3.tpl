<!-- showroom2.tpl -->
<!-- header.tpl -->{include_tpl('header')}

<div id="showroom">
	<div class="container">
	<div class="row">
			<div class="col-sm-12">
				<ul class="portfolio-list four-column list-unstyled">
					<li class="grid-sizer"></li>
					       {foreach $pages as $page}
        {$item = $CI->load->module('cfcm')->connect_fields($page, 'page')}
        {$c = explode("/", rtrim($page.cat_url, "/"))}

					<li class="portfolio-item {if $c[2]}{$c[2]}{else:}{$c[1]}{/if} work-ajax-link">
						<a href="{site_url($page.full_url)}" class="page-load" data-title="{$page.title}"> 
						<img src="{$item.field_pagephoto}" alt="" width="400" height="320">
							<div class="info-container">
								<div class="title">{$page.title}</div>
								<div class="category">{$page.prev_text}</div>
							</div>
						</a>
					</li>
					<!-- .portfolio-item -->
		{/foreach}
				</ul>
			</div>
		</div>
		
		<div class="row mt100">
			<div class="col-sm-12 text-center">{$pagination}</div>
		</div>
	</div>
</div>

 <!--  include follow_soc -->{include_tpl('follow_soc')}
{if strip_tags($category.field_contactform) == 'ON'}
 <!--  include contact_order -->{include_tpl('contact_order')}
{/if} 