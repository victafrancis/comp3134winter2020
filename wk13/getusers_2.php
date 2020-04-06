<form method="GET">
  <input type=text name=query><br />
  <input type='submit'>
</form>

<?php

$servername = "localhost";
$username = "francis";
$password = "password";
$myDB = "cybersecurity";

// Create connection
$conn = new mysqli($servername, $username, $password, $myDB);
$result;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//query
if(isset($_GET['query']))
{
    $valueToSearch = $_GET['query'];
    $query = "SELECT * FROM users WHERE firstname=? AND active='1'";
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("s", $valueToSearch);
    $stmt->execute();
    $result = $stmt->get_result();
}
 else {
	// $sql = "SELECT * FROM users";
	// $result = $conn->query($sql);
}

if ($result->num_rows > 0) { ?>

	<table>
		<tr>
		    <th>ID</th>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Active</th>
		</tr>

<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {?>

	<tr>
        <td><?php echo $row['id'];?></td>
        <td> | <?php echo $row['firstname']." ".$row['lastname'];?></td>
        <td> | <?php echo $row['email'];?></td>
        <td> | <?php echo $row['active'];?></td>
	</tr>
<?php    }
} else {
    echo "0 results";
}
$conn->close();

?>