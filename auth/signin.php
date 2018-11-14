<h1>Sign in</h1>
<?php if($signed_in){
	echo '<p class="lead">You successfully signed in</p>';
	die();
}
?>
<p class="lead">Enter your credentials</p>
<form method="POST">
Email: 
<input type="text" name="email" /><br />
Password: 
<input type="password" /><br />
<button type="submit">Submit</button>
</form>
<a href="signup">Don't have an account? Sign in</a>