<?php
$passwords = array("123456","123456789","qwerty","password","111111","12345678","abc123","1234567","password1","12345");

if (in_array($_POST['password'],$passwords)) {
        echo "Successfully authenticated";
} else {

echo "<h1>Weak Password</h1>";
echo "<form method='post'>";
echo "<label>Password</label>";
echo "<input type='password' name='password'>";
echo "<br />";
echo "<input type='submit'>";
echo "</form>";
};

?>