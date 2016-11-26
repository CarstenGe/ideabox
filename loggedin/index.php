<?php 
	include '../includes/header-loggedin.php';
	include'../includes/slideshow-loggedin.php';
 ?>
<div class="col-4">
	<h3>Projects you're working on</h3>
	<div class="grey-box account">
		<?php $sql = "SELECT ideatitle, url FROM ideas WHERE WorkingOnThis LIKE '%$username%'";
		$result = $db->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<div id=\"account-column-rows\">" . "<a href=\"ideas/" . $row['url']. ".php\">" . $row["ideatitle"]. "</a></div>";
		    }
		} else {
		    echo "You haven't started working on any projects.";
		}?>
	</div>
</div>
<?php include '../includes/index-content.php'; ?>
