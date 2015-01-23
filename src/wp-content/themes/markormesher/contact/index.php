<div class="page">
	<div class="container column-container">
		<h1>Contact Me</h1>
		<div class="eight column">
			<?php

			/*
			 *
			 * THIS IS TERRIBLY INSECURE, BECAUSE IT IS NOT FINISHED,
			 * AND IT IS NOT PUBLICLY ACCESSIBLE.
			 *
			 * DO NOT USE THIS ON A PUBLIC SITE.
			 *
			 * HAPPY NOW, MUS?
			 *
			 */

			if (isset($_POST['sent'])) {
				$name = $_POST['user_name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$message = $_POST['message'];

				$errors = array();
				if (!preg_match('/[a-z0-9\-\' ]+/isx', $name)) $errors[] = 'Please supply a valid name, with no special characters';
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please supply a valid email address';
				if (!strlen($message)) $errors[] = 'Please write something in the message field';

				if (empty($errors)) {
					$emailMsg = 'Name: ' . $name . "\n";
					$emailMsg .= 'Email: ' . $email . "\n";
					$emailMsg .= 'Phone: ' . (strlen($phone) ? $phone : 'None') . "\n";
					$emailMsg .= "---------\n";
					$emailMsg .= $message . "\n\n";
					$emailMsg .= 'Sent on ' . date('j M Y \a\t H:i');
					require('/usr/share/php/Mail.php');
					$factory =& Mail::factory('smtp',array('port'=>25,'auth'=>false));
					$headers['From'] = $name . '<' . $email . '>';
					$headers['To'] = 'me@markormesher.co.uk';
					$headers['Subject'] = 'From MarkOrmesher.co.uk';
					$sending = $factory->send($headers['To'], $headers, $emailMsg);
					if ($sending) {
						echo('<p><em>Thank You!</em> Your message was sent, and will be landing in my inbox in a couple of minutes.</p>');
						echo('<p><strong>I\'ll get back to you as soon as possible.</strong></p>');
						echo('</div><div class="three column"><h3>Where Now?</h3><ul class="inside"><li><a href="/" title="Mark Ormesher">Start at the home page</a></li><li><a href="/blog" title="Mark Ormesher\'s programming blog">Check out my blog</a></li><li><a href="/about" title="Mark Ormesher technical profile">Read my profile</a></li><li><a href="/skills" title="Mark Ormesher\'s programming skills">Read my skills summary</a></li></ul></div><div class="column-fix"></div></div>');
						return;
					} else {
						echo('<p class="error">There was an error whilst sending the email; please try again, or contact me directly on <a href="mailto:mark@ormo.me" title="Email Mark Ormesher">mark@ormo.me</a>.</p>');
					}
				} else {
					echo('<p class="error">There were some errors with your message:</p>');
					echo('<ul class="error inside">');
					foreach ($errors as $e) echo('<li>' . $e . '</li>');
					echo('</ul>');
				}
			}
			?>
			<p>If you'd like to get in touch with me, please feel free to <strong>send me an email</strong> with the form below, or use any of the other channels listed on this page. I'd love to hear from you, and I will get back to you as soon as possible - at most in a day or two.</p>
			<form action="/contact" method="post">
				<div class="form-field">
					<label for="ff-name">Name</label>
					<input type="text" name="user_name" id="ff-name" value="<?=(isset($_POST['user_name'])?$_POST['user_name']:'');?>"/>
				</div>
				<div class="form-field">
					<label for="ff-email">Email Address</label>
					<input type="email" name="email" id="ff-email" value="<?=(isset($_POST['email'])?$_POST['email']:'');?>"/>
				</div>
				<div class="form-field">
					<label for="ff-phone">Phone Number (optional)</label>
					<input type="tel" name="phone" id="ff-phone" value="<?=(isset($_POST['phone'])?$_POST['phone']:'');?>"/>
				</div>
				<div class="form-field">
					<label for="ff-message">Message</label>
					<textarea name="message" id="ff-message"><?=(isset($_POST['message'])?$_POST['message']:'');?></textarea>
				</div>
				<div class="form-button">
					<input type="hidden" name="sent" value="1"/>
					<input type="submit" value="Send"/>
				</div>
			</form>
		</div>
		<div class="one column column-spacer">
			&nbsp; <!-- blank -->
		</div>
		<div class="three column">
			<p><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;+44 (0) 7775 932063</p>
			<p><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:mark@ormo.me" class="nonlink">mark@ormo.me</a></p>
			<p><i class="fa fa-skype"></i>&nbsp;&nbsp;&nbsp;&nbsp;mark.ormo</p>
			<p><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.twitter.com/m_s_ormo" rel="external" class="nonlink">@m_s_ormo</a></p>
		</div>
		<div class="column-fix"></div>
	</div>
</div>