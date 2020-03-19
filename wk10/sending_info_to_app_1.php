<form method="get">
<input name="q" placeholder="Enter Text">
<br/>
<input type="submit" value="Go">
</form>

<?php
$input = isset($_GET['q']) ? $_GET['q'] : '';

echo $input;
?>

