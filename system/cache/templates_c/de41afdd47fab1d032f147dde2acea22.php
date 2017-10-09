
		<form class="row" action="<?php echo site_url ('feedback'); ?>" method="post">
			<?php if($message_sent == 1): ?>
				<div class="been-sent"> 
                <div class="sent-info"><?php echo siteinfo('siteinfo_transl-sent')?></div>
                <a href="<?php echo site_url (); ?>"><button type="button" class="btn btn-primary btn-sm"><?php echo siteinfo('siteinfo_transl-tomain')?></button></a>
                </div>
			<?php endif; ?>
			<?php if(validation_errors()): ?>
			
				<em><?php echo validation_errors ('<p>', '</p>'); ?></em>
			
			<?php endif; ?>
			<div class="col-sm-6 col-md-6">
                                    <div class="form-group">
				
				
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo siteinfo('siteinfo_transl-name')?> *" type="text" name="name" value="<?php echo set_value ('name'); ?>" required>
				</div>
			<div class="form-group">
			
				
					<input class="form-control" id="exampleInputPassword1" placeholder="<?php echo siteinfo('siteinfo_transl-email')?> *" type="email" name="email" value="<?php echo set_value ('email'); ?>" required>
				</div>
			<!--<div class="form-group">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo tlang ('Subject'); ?> *" type="text" name="theme" value="<?php echo set_value ('theme'); ?>" required>
				</div> -->
                
            
             <p class="formtel help-block alignleft hidden-xs"><?php echo siteinfo('siteinfo_mainphone')?></p>
             </div>
             
             <div class="col-sm-6 col-md-6">
			    <div class="form-group">
 			
					<textarea class="form-control" placeholder="<?php echo siteinfo('siteinfo_transl-message')?> *" name="message" required><?php echo set_value ('message'); ?></textarea>
 			
 			<!--<?php if($captcha_type =='captcha'): ?>
 			<?php echo tlang ('Security code'); ?>
 						<input type="text" name="captcha" required>
 						<?php echo tlang ('Type the characters you see in this image.'); ?>
 						<?php if(isset($cap_image)){ echo $cap_image; } ?>
 					<?php if(form_error('captcha')): ?>
 					<?php echo form_error ('captcha'); ?>
 					<?php endif; ?>
 				
			<?php endif; ?> -->
			</div>
            <div class="form-group ">
				<input type="submit" value="<?php echo siteinfo('siteinfo_transl-send')?>" class="btn btn-primary pull-left"></div>
                
			</div>
			<?php echo form_csrf (); ?>
		</form><?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531824; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/feedback/feedback.tpl ?>