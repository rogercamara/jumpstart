	<?php echo form_open('contact_us/process_form', $form_open); ?>
		<ul>
			<!-- If messages have been reported show them -->
			<?php if (isset($error_message)) { ?>
				<li class="alert-message danger">
					<?php echo '<p>The following errors were reported:<br class="line-and-a-half" />';
						  echo $error_message;
						  echo '</p>'; ?>
				</li>
			<?php } elseif (isset($success_message)) { ?>
				<li class="alert-message success">
					<?php echo '<p>';
						  echo $success_message;
						  echo '</p>'; ?>
				</li>
			<?php } ?>
			<!-- end of message block -->
			<li>
				<?php echo form_label('Name:', 'name'); echo form_input($name_attr); ?>
			</li>
			<li>
				<?php echo form_label('Email Address:', 'email');	echo form_input($email_attr); ?>
			</li>
			<li>
				<?php echo form_label('Message / Questions:', 'message'); echo form_textarea($message_attr); ?>
			</li>
			<li>
				<?php echo form_hidden('uri', $this->uri->uri_string()); ?>
				<?php echo form_submit($submit_attr); ?>
			</li>
		</ul>
		<?php echo form_close(); ?>
		