<form method="get">
<input name="q" placeholder="Enter Text">
<br/>
<input type="submit" value="Go">
</form>

<?php
//Apply the necessary changes by either stripping tags or displaying
//the html entity value of any user input
$chars = array('(',')','alert','%27');
$newChars = array('');

$input = isset($_GET['q']) ? $_GET['q'] : '';

$strippedInput = strip_tags($input);
$output = str_replace($chars, $newChars, $strippedInput);

echo '<p>Stripped Query:</p>';
echo $output;
echo '<br>';
//For html entities test
echo '<p>User input html query:</p>';
echo htmlentities($input);
?>
