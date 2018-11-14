<h1>Sign up</h1>
<?php if($signed_up){
	echo '<p class="lead">You successfully signed up</p>';
	die();
}
?>
<form method="POST">
First name: 
<input type="text" /><br />
Last name: 
<input type="text" /><br />
Email: 
<input type="text" name="email" /><br />
Password: 
<input type="text" /><br />
<button type="submit">Submit</button>
</form>