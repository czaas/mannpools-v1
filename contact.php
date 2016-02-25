<?php include('header.php'); ?>
	<div class="main">
		<h3 class="important">Contact us with any questions you have and we will get back to you as soon as posible.</h3>
		<form action="mail.php" method="POST">
			<input type="text" placeholder="Your name" name="name">
			<input type="tel", placeholder="Your phone number" name="number">
			<input type="email" placeholder="Your email" name="email">
			<textarea placeholder="Your message" name="message"></textarea>
			<input id="submit" type="submit" value="Send Message">
		</form>
	</div>

<?php include('footer.php'); ?>