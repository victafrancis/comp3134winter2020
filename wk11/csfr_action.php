
<?php
session_start();
//get session variable
$sessionVar = $_SESSION["confirmation"];
//get post value
if(isset($_POST['confirmation'])) {
	$postVar = $_POST['confirmation'];
};

if($sessionVar == $postVar) {
	if(isset($_POST['username'])) {
		if($_POST['username']=='host' and $_POST['password']=='pass') { ?>
			<div>Successfully logged in!</div><br />
<?php } elseif ($_POST['username']!='host' and $_POST['password']!='pass') { ?>
	<div>login attempt was unsuccessful!</div><br />
<?php }}} ?>

<form method='post'>
<label>username</label>
<input type='text' name='username'><br />
<label>password</label>
<input type='password' name='password'>
<br />
<input type='submit'>
</form>
