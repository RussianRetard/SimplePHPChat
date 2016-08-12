<?php
$header = 'This is web chat v0.1';
$author = "Nickolas('RussianRetard')";

$form_header = "Login to our Chat";


?>

<form action='login.php' method='post'>
	<div class='form_header'>
		<?php echo "<h1>$form_header</h1>"?>
	</div>

	<div class='form_content'>
		<input name='username' type='text' placeholder='Username'  required>
		<input name='password' type='password' placeholder='Password'  required>
	</div>

	<div class='form_footer'>
		<input type='submit' value='Login'>
	</div>
</form>