
<div class="container">
    <section class="mini-layout">
        <div class="frame_title clearfix">
            <div class="pull-left">
                <span class="help-inline"></span>
                <span class="title"><?php echo lang ('Global settings','admin'); ?></span>
            </div>
            <div class="pull-right">
                <div class="d-i_b">
                    <!--<a href="/admin/dashboard" class="t-d_n m-r_15"><span class="f-s_14">←</span> <span class="t-d_u"><?php echo lang ("Go back","admin"); ?></span></a>-->
                    <button type="button" class="btn btn-small btn-primary action_on formSubmit" data-form="#saveSettings" data-action="edit" data-submit>
                        <i class="icon-ok icon-white"></i><?php echo lang ("Save","admin"); ?></button>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span3 m-t_10">
                <ul class="nav myTab nav-tabs nav-stacked">
                    <li class="active"><a href="#setings"><?php echo lang ('General Settings',"admin"); ?></a></li>
                    <li><a href="#seo"><?php echo lang ('Analysts settings', 'admin'); ?></a></li>
                    <li><a href="#homePage"><?php echo lang ('Main page','admin'); ?></a></li>
                    <li><a href="#metatag"><?php echo lang ('Management of Meta Tags','admin'); ?></a></li>
                    <li><a href="#metatag_edit"><?php echo lang ('Enter Meta Tags','admin'); ?></a></li>
                    <li><a href="#site_info_tab"><?php echo lang ('Site information','admin'); ?></a></li>
                    <li><a href="#users_registration"><?php echo lang ('Users registration','admin'); ?></a></li>
                </ul>
            </div>
            <div class="span9">
                <form action="<?php if(isset($BASE_URL)){ echo $BASE_URL; } ?>admin/settings/save" method="post" id="saveSettings">
                    <div class="tab-content">
                        <div class="tab-pane active" id="setings">
                            <table class="table  table-bordered table-hover table-condensed content_big_td">
                                <thead>
                                <tr>
                                    <th colspan="6">
                                        <?php echo lang ('General Settings',"admin"); ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="6">
                                        <div class="inside_padd">
                                            <div class="form-horizontal">
                                                <div class="row-fluid">
                                                    <div class="control-group">
                                                        <label class="control-label" for="site_offline"><?php echo lang ('Site shutdown', 'admin'); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="site_offline" id="site_offline">
                                                                <?php if(is_true_array($work_values)){ foreach ($work_values as $k => $v){ ?>
                                                                    <option value="<?php if(isset($k)){ echo $k; } ?>" <?php if($site_offline == $k): ?> selected="selected" <?php endif; ?> ><?php if(isset($v)){ echo $v; } ?></option>
                                                                <?php }} ?>
                                                            </select>
                                                                <span class="help-block">
                                                                    <?php echo lang ('The site will be available only to the Administrator', 'admin'); ?>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label" for="lang_sel"><?php echo lang ('Select admin language', "admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="lang_sel" id="lang_sel">
                                                                <?php if(is_true_array($langs)){ foreach ($langs as $language){ ?>
                                                                    <option value="<?php echo $language['locale']?>" <?php if($lang_sel == $language['locale']): ?>selected="selected"<?php endif; ?>> <?php echo $language['lang_name']?></option>
                                                                <?php }} ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php if(!defined('MAINSITE')): ?>
                                                        <div class="control-group">
                                                            <label class="control-label" for="template"><?php echo lang ('Template', 'admin'); ?>
                                                                :</label>

                                                            <div class="controls">
                                                                <select name="template" id="template" onchange="$('#license_agreement_link').attr('href', '/admin/settings/license_agreement?template_name=' + $(this).val())">
                                                                    <?php if(is_true_array($templates)){ foreach ($templates as $k => $v){ ?>
                                                                        <option value="<?php if(isset($k)){ echo $k; } ?>" <?php if($template_selected == $k): ?> selected="selected" <?php endif; ?> ><?php if(isset($k)){ echo $k; } ?></option>
                                                                    <?php }} ?>
                                                                </select>
                                                                    <span class="help-block" id='license_link' style="display: none">
                                                                        <?php echo lang ('Installing the template you agree to the', 'admin'); ?>
                                                                        <a target="_blank" href="/admin/settings/license_agreement?template_name=<?php if(isset($template_selected)){ echo $template_selected; } ?>" id="license_agreement_link">
                                                                            <?php echo lang ('license agreement', 'admin'); ?>
                                                                        </a>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    <?php else:?>
                                                        <input name='template' type='hidden' value="<?php echo $template_selected?>">
                                                    <?php endif; ?>
                                                    <div class="control-group">
                                                        <label class="control-label" for="cat_list"><?php echo lang ('Display category tree in the content','admin'); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="cat_list" id="cat_list">
                                                                <option value="yes" <?php if($cat_list == 'yes'): ?> selected="selected" <?php endif; ?> ><?php echo lang ('Yes','admin'); ?></option>
                                                                <option value="no" <?php if($cat_list == 'no'): ?> selected="selected" <?php endif; ?> ><?php echo lang ('No','admin'); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label" for="www_redirect"><?php echo lang ('Site redirect','admin'); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="www_redirect" id="www_redirect">
                                                                <option value="without" <?php if($www_redirect == 'without'): ?> selected="selected" <?php endif; ?> >
                                                                    <?php echo lang ('Without redirect', 'admin'); ?>
                                                                </option>
                                                                <option value="from_www" <?php if($www_redirect == 'from_www'): ?> selected="selected" <?php endif; ?> >
                                                                    <?php echo langf ('From www.|site| to |site|', 'admin', ['site' => $CI->uri->getHost(true)]); ?>
                                                                </option>
                                                                <option value="to_www" <?php if($www_redirect == 'to_www'): ?> selected="selected" <?php endif; ?> >
                                                                    <?php echo langf ('From |site| to www.|site|', 'admin', ['site' => $CI->uri->getHost(true)]); ?>
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="control-group">
                                                        <label class="control-label" for="textEditor"><?php echo lang ('Text editor','admin'); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="text_editor" id="textEditor">
                                                                <option value="tinymce" <?php if($text_editor == 'tinymce'): ?> selected="selected" <?php endif; ?> >
                                                                    TinyMCE
                                                                </option>
                                                                <option value="none" <?php if($text_editor == 'none'): ?> selected="selected" <?php endif; ?> >
                                                                    Native textarea
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label" for="comcount"><?php echo lang ("Open the site for indexing robots", 'admin'); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <div class="robotsChecker frame_prod-on_off">
                                                                <span onclick="visualSettingMenu('robots_settings_status', 'robots_status', false)" class="prod-on_off<?php if(!$robots_status): ?> disable_tovar<?php endif; ?>"></span>
                                                                <input type="checkbox" name="robots_status" value="1" data-val-on="1" data-val-off="0" <?php if($robots_status): ?>checked="checked"<?php endif; ?>>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div id="robots_settings_status" class="control-group" <?php if(!$robots_status): ?> style="display:none"<?php endif; ?>>
                                                        <div class="controls">
                                                            <div>
                                                                <label><input onclick="visualSettingMenu('robots_settings', 'robots_settings_status', true)" type="checkbox" name="robots_settings_status" value="1" <?php if($robots_settings_status): ?>checked="checked"<?php endif; ?>>
                                                                    - <?php echo lang ('Configuring robots file manually','admin'); ?>
                                                                </label>
                                                                <textarea id="robots_settings" name="robots_settings" <?php if(!$robots_settings_status): ?> style="display:none"<?php endif; ?>><?php echo $robots_settings?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                            <script type="text/javascript">
                                function visualSettingMenu(idEditedEl, name, invert) {
                                    var check = $('input[name="' + name + '"]').attr('checked');
                                    if (check == 'checked' && !invert) {
                                        $('#' + idEditedEl).hide(400);
                                    } else if (check == 'checked' && invert) {
                                        $('#' + idEditedEl).show(400);
                                    } else if (check != 'checked' && invert) {
                                        $('#' + idEditedEl).hide(400);
                                    } else {
                                        $('#' + idEditedEl).show(400);
                                    }
                                }
                            </script>
                        
                        <div class="tab-pane" id="seo">
                            <table class="table  table-bordered table-hover table-condensed content_big_td">
                                <thead>
                                <tr>
                                    <th colspan="6">
                                        <?php echo lang ('Analysts settings', 'admin'); ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="6">
                                        <div class="inside_padd">
                                            <div class="form-horizontal">
                                                <div class="row-fluid">
                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="google_analytics_id"><?php echo lang ('ID Google Analytics', "admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <input type="text" id="google_analytics_id" name="google_analytics_id" value="<?php if(isset($google_analytics_id)){ echo $google_analytics_id; } ?>"/>
                                                                <span class="help-block">
                                                                    <?php echo lang ('The code should be in the format ua-54545845', 'admin'); ?>
                                                                </span>
                                                            <input type="checkbox" name="google_analytics_ee" <?php if($google_analytics_ee == 1): ?>checked="checked"<?php endif; ?>/>
                                                            <?php echo lang ('Use Enhanced Ecommerce - Web Tracking', "admin"); ?>
                                                            (beta)
                                                        </div>
                                                    </div>
                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="google_webmaster"><?php echo lang ("G.Webmaster"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <input type="text" id="google_webmaster" name="google_webmaster" value="<?php if(isset($google_webmaster)){ echo $google_webmaster; } ?>"/>
                                                        </div>
                                                    </div>

                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="yandex_webmaster"><?php echo lang ('Ya.Webmaster'); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <input type="text" id="yandex_webmaster" name="yandex_webmaster" value="<?php if(isset($yandex_webmaster)){ echo $yandex_webmaster; } ?>"/>
                                                        </div>
                                                    </div>

                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="yandex_metric"><?php echo lang ('ID for yandex metric',"admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <input type="text" id="yandex_webmaster" name="yandex_metric" value="<?php if(isset($yandex_metric)){ echo $yandex_metric; } ?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="homePage">
                            <table class="table  table-bordered table-hover table-condensed content_big_td">
                                <thead>
                                <tr>
                                    <th colspan="6">
                                        <?php echo lang ('Main page',"admin"); ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="6">
                                        <div class="inside_padd">
                                            <div class="form-horizontal">
                                                <div class="row-fluid">

                                                    <div class="control-group m-t_10 frame_label no_connection">
                                                        <label class="control-label" for="main_typesq"><?php echo lang ('Categories',"admin"); ?>
                                                            :</label>

                                                        <div class="controls ctext">
                                                                <span class="niceRadio b_n">
                                                                    <input type="radio" id="main_typesq" name="main_type" value="category" <?php if($main_type == "category"): ?> checked="checked" <?php endif; ?> />
                                                                </span>

                                                            <select name="main_page_cat" class="input-large">
                                                                <?php $this->view("cats_select.tpl", $this->template_vars);
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group m-t_10 frame_label no_connection">
                                                        <label class="control-label" for="main_types"><?php echo lang ('Page',"admin"); ?>
                                                            :</label>

                                                        <div class="controls ctext">
                                                                <span class="niceRadio b_n">
                                                                    <input type="radio" id="main_types" name="main_type" value="page" <?php if($main_type == "page"): ?> checked="checked" <?php endif; ?> />
                                                                </span>
                                                            <select name="main_page_pid" class="input-large">
                                                                <?php if(is_true_array($pages)){ foreach ($pages as $p){ ?>
                                                                    <option  <?php if($p['id'] == $pageSetting): ?>selected="selected"<?php endif; ?> value="<?php echo $p['id']; ?>"><?php echo $p['title']?></option>
                                                                <?php }} ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group m-t_10 frame_label no_connection">
                                                        <label class="control-label" for="main_type"><?php echo lang ('Module',"admin"); ?>
                                                            :</label>

                                                        <div class="controls ctext">
                                                                <span class="niceRadio b_n">
                                                                    <input type="radio" id="main_type" name="main_type" value="module" <?php if($main_type == "module"): ?> checked="checked" <?php endif; ?> />
                                                                </span>
                                                            <select name="main_page_module" class="input-large">
                                                                <?php if(is_true_array($modules)){ foreach ($modules as $m){ ?>
                                                                    <?php $mData = modules::run('admin/components/get_module_info',$m['name'])?>
                                                                    <option <?php if($m['name'] == $main_page_module): ?>selected="selected"<?php endif; ?> value="<?php echo $m['name']; ?>"><?php echo $mData['menu_name']?></option>
                                                                <?php }} ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="metatag">
                            <table class="table  table-bordered table-hover table-condensed content_big_td">
                                <thead>
                                <tr>
                                    <th colspan="6">
                                        <?php echo lang ('Meta tags',"admin"); ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="6">
                                        <div class="inside_padd">
                                            <div class="form-horizontal">
                                                <div class="row-fluid">

                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="add_site_name"><?php echo lang ('Site name',"admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="add_site_name" id="add_site_name">
                                                                <option value="1" <?php if($add_site_name == "1"): ?>selected="selected"<?php endif; ?>><?php echo lang ('Yes',"admin"); ?></option>
                                                                <option value="0" <?php if($add_site_name == "0"): ?>selected="selected"<?php endif; ?> ><?php echo lang ('No',"admin"); ?></option>
                                                            </select>
                                                                <span class="help-block">
                                                                    <?php echo lang ('Whether to display the site name in the title page','admin'); ?>
                                                                </span>
                                                        </div>
                                                    </div>

                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="add_site_name_to_cat"><?php echo lang ('Category name',"admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="add_site_name_to_cat" id="add_site_name_to_cat">
                                                                <option value="1" <?php if($add_site_name_to_cat == "1"): ?>selected="selected"<?php endif; ?>><?php echo lang ("Yes","admin"); ?></option>
                                                                <option value="0" <?php if($add_site_name_to_cat == "0"): ?>selected="selected"<?php endif; ?>><?php echo lang ("No","admin"); ?></option>
                                                            </select>
                                                                <span class="help-block">
                                                                    <?php echo lang ('Whether to display the category name in the title page','admin'); ?>
                                                                </span>
                                                        </div>
                                                    </div>

                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="delimiter"><?php echo lang ('Separator',"admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <input type="text" id="delimiter" value="<?php if(isset($delimiter)){ echo $delimiter; } ?>" name="delimiter" class="textbox_long" style="width:80px;"/>
                                                        </div>
                                                    </div>

                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="create_keywords"><?php echo lang ('Meta Keywords',"admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="create_keywords" id="create_keywords">
                                                                <option value="auto" <?php if($create_keywords == "auto"): ?>selected="selected"<?php endif; ?>><?php echo lang ('Auto formation',"admin"); ?></option>
                                                                <option value="empty" <?php if($create_keywords == "empty"): ?>selected="selected"<?php endif; ?>><?php echo lang ('Leave empty',"admin"); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="control-group m-t_10">
                                                        <label class="control-label" for="create_description"><?php echo lang ('Meta Description',"admin"); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="create_description" id="create_description">
                                                                <option value="auto" <?php if($create_description == "auto"): ?>selected="selected"<?php endif; ?>><?php echo lang ('Auto formation',"admin"); ?></option>
                                                                <option value="empty" <?php if($create_description == "empty"): ?>selected="selected"<?php endif; ?>><?php echo lang ('Leave empty',"admin"); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="metatag_edit">
                            <table class="table  table-bordered table-hover table-condensed content_big_td">
                                <thead>
                                <tr>
                                    <th colspan="6">
                                        <?php echo lang ('Enter Meta Tags','admin'); ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="6">
                                        <div class="inside_padd">
                                            <div class="form-horizontal">
                                                <div class="row-fluid">
                                                    <div class="control-group">
                                                        <label class="control-label" for="site_offline"><?php echo lang ('Choose language','admin'); ?>
                                                            :</label>

                                                        <div class="controls">
                                                            <select name="site_langs" onchange="ch_lan(this)">
                                                                <?php $i = 1?>
                                                                <?php if(is_true_array($langs)){ foreach ($langs as $lan){ ?>
                                                                    <option value="<?php echo $lan['id']?>" <?php if($i == 1): ?> selected="selected" <?php endif; ?> ><?php echo $lan['lang_name']?></option>
                                                                    <?php $i++?>
                                                                <?php }} ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php $i = 1?>
                                                    <?php if(is_true_array($meta_langs)){ foreach ($meta_langs as $lan => $meta){ ?>
                                                        <div class="lan <?php if($i!= 1): ?>d_n<?php endif; ?>" id="lang_form<?php echo $lan?>">
                                                            <input <?php if($i!= 1): ?>disabled="disabled" <?php endif; ?>type="hidden" name="lang_ident" value="<?php echo $lan?>">

                                                            <div class="control-group m-t_10">
                                                                <label class="control-label" for="titleNa"><?php echo lang ('Site name', 'admin'); ?>
                                                                    :</label>

                                                                <div class="controls">
                                                                    <input <?php if($i!= 1): ?>disabled="disabled"<?php endif; ?> type="text" id="titleNa" name="name" value="<?php echo  $meta['name']  ?>"/>
                                                                </div>
                                                            </div>

                                                            <div class="control-group m-t_10">
                                                                <label class="control-label" for="short_titleS"><?php echo lang ('Short site name', 'admin'); ?>
                                                                    :</label>

                                                                <div class="controls">
                                                                    <input <?php if($i!= 1): ?>disabled="disabled"<?php endif; ?> type="text" id="short_titleS" name="short_name" value="<?php echo  $meta['short_name']  ?>"/>
                                                                </div>
                                                            </div>

                                                            <div class="control-group m-t_10">
                                                                <label class="control-label" for="descriptionN"><?php echo lang ('Description', 'admin'); ?>
                                                                    :</label>

                                                                <div class="controls">
                                                                    <input <?php if($i!= 1): ?>disabled="disabled"<?php endif; ?> type="text" id="descriptionN" name="description" value="<?php echo  $meta['description']  ?>"/>
                                                                </div>
                                                            </div>

                                                            <div class="control-group m-t_10">
                                                                <label class="control-label" for="keywordsss"><?php echo lang ('Keywords', 'admin'); ?>
                                                                    :</label>

                                                                <div class="controls">
                                                                    <input <?php if($i!= 1): ?>disabled="disabled"<?php endif; ?> type="text" id="keywordsss" name="keywords" value="<?php echo  $meta['keywords']  ?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php $i++?>
                                                    <?php }} ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <?php echo form_csrf (); ?>

                        </div>

                        <div class="tab-pane" id="site_info_tab"> <!-- Інформація про сайт -->
                            <?php $tooltipText = lang('Please use function siteinfo() with the parameter', 'admin')?>
                            <table class="table  table-bordered table-hover table-condensed content_big_td">
                                <thead>
                                <tr>
                                    <th colspan="6">
                                        <?php echo lang ('Site information','admin'); ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="6">
                                        <div class="inside_padd">
                                            <div class="form-horizontal">
                                                <input type="hidden" name="default_locale_hidden" value="<?php echo MY_Controller::getCurrentLocale()?>">

                                                <div class="row-fluid">
                                                    <div class="control-group">
                                                        <label class="control-label" data-toggle="ttip" for="siteinfo_companytype">
                                                            <?php echo lang ('For language', 'admin'); ?>
                                                        </label>

                                                        <div class="controls">
                                                            <select name="siteinfo_locale" id="siteinfo_locale">
                                                                <?php if(is_true_array($langs)){ foreach ($langs as $lan){ ?>
                                                                    <option value="<?php echo $lan['identif']?>" <?php if($lan['default']): ?> selected="selected" <?php endif; ?> ><?php echo $lan['lang_name']?></option>
                                                                <?php }} ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                    <div class="control-group">
                                                        <label class="control-label" for="siteinfo_companytype">
                                                            <?php echo lang ('Company type', 'admin'); ?>
                                                            <i class="icon-info-sign" data-toggle="ttip" data-title="<?php if(isset($tooltipText)){ echo $tooltipText; } ?> 'siteinfo_companytype'"></i>
                                                        </label>

                                                        <div class="controls">
                                                            <textarea rows="1" id="siteinfo_companytype" name="siteinfo_companytype"><?php if(isset($siteinfo_companytype)){ echo $siteinfo_companytype; } ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="siteinfo_address"><?php echo lang ('Address', 'admin'); ?>
                                                            <i class="icon-info-sign" data-toggle="ttip" data-title="<?php if(isset($tooltipText)){ echo $tooltipText; } ?> 'siteinfo_address'"></i>
                                                        </label>

                                                        <div class="controls">
                                                            <textarea rows="1" id="siteinfo_address" name="siteinfo_address"><?php if(isset($siteinfo_address)){ echo $siteinfo_address; } ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="siteinfo_mainphone"><?php echo lang ('Main phone', 'admin'); ?>
                                                            <i class="icon-info-sign" data-toggle="ttip" data-title="<?php if(isset($tooltipText)){ echo $tooltipText; } ?> 'siteinfo_mainphone'"></i>
                                                        </label>

                                                        <div class="controls">
                                                            <textarea rows="1" id="siteinfo_mainphone" name="siteinfo_mainphone"><?php if(isset($siteinfo_mainphone)){ echo $siteinfo_mainphone; } ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="siteinfo_adminemail"><?php echo lang ('Admin email', 'admin'); ?>
                                                            <i class="icon-info-sign" data-toggle="ttip" data-title="<?php if(isset($tooltipText)){ echo $tooltipText; } ?> 'siteinfo_adminemail'"></i>
                                                        </label>

                                                        <div class="controls">
                                                            <textarea rows="1" id="siteinfo_adminemail" name="siteinfo_adminemail"><?php if(isset($siteinfo_adminemail)){ echo $siteinfo_adminemail; } ?></textarea>
                                                        </div>
                                                    </div>

                                                    <hr/>
                                                    <div class="control-group">
                                                        <label class="control-label" for=""><?php echo lang ('Contacts', 'admin'); ?>
                                                            <i class="icon-info-sign" data-toggle="ttip" data-title="<?php if(isset($tooltipText)){ echo $tooltipText; } ?>, <?php echo lang ('that you entered as a contact type', 'admin'); ?>"></i>
                                                        </label>

                                                        <div class="controls">
                                                            <table id="siteinfo_contacts_table" class="content_small_td">
                                                                <?php if(count($contacts) > 0): ?>
                                                                    <?php if(is_true_array($contacts)){ foreach ($contacts as $contact_name => $contact_value){ ?>
                                                                        <tr class="siteinfo_contact_row">
                                                                            <td>
                                                                                <input type='text' placeholder="<?php echo lang ('Contact type',  'admin'); ?>" class="siteinfo_contactkey" name="siteinfo_contactkey[]" value="<?php if(isset($contact_name)){ echo $contact_name; } ?>">
                                                                            </td>
                                                                            <td>
                                                                                <textarea rows="1" placeholder="<?php echo lang ('Value', 'admin'); ?>" class="siteinfo_contactvalue" name="siteinfo_contactvalue[]"><?php if(isset($contact_value)){ echo $contact_value; } ?></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn btn-small si_remove_contact_row" data-rel="tooltip" data-title="<?php echo lang ('Remove', 'admin'); ?>">
                                                                                    <i class="icon-trash"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php }} ?>
                                                                <?php else:?>
                                                                    <tr class="siteinfo_contact_row" data-original-title="<?php if(isset($tooltipText)){ echo $tooltipText; } ?> <?php echo lang ('you entered as a contact type', 'admin'); ?>">
                                                                        <td>
                                                                            <input type='text' placeholder="<?php echo lang ('Contact type', 'admin'); ?>" class="siteinfo_contactkey" name="siteinfo_contactkey[]" value="">
                                                                        </td>
                                                                        <td>
                                                                            <textarea rows="1" placeholder="<?php echo lang ('Value', 'admin'); ?>" class="siteinfo_contactvalue" value="" name="siteinfo_contactvalue[]"></textarea>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-small si_remove_contact_row" data-rel="tooltip" data-title="<?php echo lang ('Remove', 'admin'); ?>">
                                                                                <i class="icon-trash"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>

                                                            </table>
                                                            <p id="siteinfo_contacts_controls" style='padding-top:7px;margin-left: 152px;'>
                                                                <a class="btn" id="siteinfo_addcontact">
                                                                    <span class="icon-plus-sign"></span>
                                                                    <?php echo lang ('Add contact', 'admin'); ?>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="users_registration"> <!-- Інформація про сайт -->
                            <?php $tooltipText = lang('Please use function siteinfo() with the parameter', 'admin')?>
                            <table class="table  table-bordered table-hover table-condensed content_big_td">
                                <thead>
                                <tr>
                                    <th colspan="6">
                                        <?php echo lang ('Users registration','admin'); ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="6">
                                        <div class="inside_padd">
                                            <div class="form-horizontal">
                                                <input type="hidden" name="default_locale_hidden" value="<?php echo MY_Controller::getCurrentLocale()?>">

                                                <div class="row-fluid">
                                                    <div class="control-group">
                                                        <label class="control-label" data-toggle="ttip" for="users_registration_role_id">
                                                            <?php echo lang ('Users registration role', 'admin'); ?>:
                                                        </label>

                                                        <div class="controls">
                                                            <select name="users_registration_role_id" id="users_registration_role_id">
                                                                <option <?php if(!$users_registration_role_id): ?> selected="selected" <?php endif; ?>value="0"><?php echo lang ('Without role', 'admin'); ?></option>
                                                                <?php if(is_true_array($users_roles)){ foreach ($users_roles as $role){ ?>
                                                                    <option value="<?php echo $role->id?>" <?php if($users_registration_role_id === $role->id): ?> selected="selected" <?php endif; ?> ><?php echo $role->alt_name?></option>
                                                                <?php }} ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Інформація про сайт - Завершення -->
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php $mabilis_ttl=1507655565; $mabilis_last_modified=1499698865; ///var/www/admin/data/www/platforme411.naddaka.com/templates/administrator/settings_site.tpl ?>