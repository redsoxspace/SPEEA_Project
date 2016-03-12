<!DOCTYPE html>
<html>
	<body>
	<div>
	<?= $this->session->flashdata('errors') ?>
		<form method = "post" action = "Sessions/log_in">
			<fieldset>
				<legend>Log In</legend>

				<label>Email</label>
				<input type = "text" name = "email">

				<label>Password</label>
				<input type = "password" name = "password">
				<input type = "submit" value = "Log In">
			</fieldset>
		</form>
	</div>
	</body>
</html>
