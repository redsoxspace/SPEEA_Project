<!DOCTYPE html>
<html>
<title>Register for the SPEEA</title>
<body>
	<?= $this->session->flashdata('errors') ?>
	<div id = "form-group">
	<form role = "form" method = "post" action = "Users/new_user">
		<fieldset>
			<legend>Join the SPEEA today!</legend>

			<label for = "name">First Name</label>
			<input type = "text" name = "first_name">

			<label>Last name</label>
			<input type = "text" name = "last_name">

			<label>Employer (optional)</label>
			<input type = "text" name = "employer">

			<label>Email</label>
			<input type = "text" name = "email">

			<label>Password</label>
			<input type = "password" name = "password">

			<label>Confirm Password</label>
			<input type = "password" name = "confirm_password">
			<input type = "submit" value = "Join Today">
		</fieldset>
	</form>
	</div>
	<a href="login">Already a member?</a>

	