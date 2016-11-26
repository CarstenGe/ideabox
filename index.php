<?php 
	include 'includes/header.php';
	include'includes/slideshow.php'; 
?>
<div class="col-4">
	<h3>Newest ideas</h3>
	<?php
		$query = mysqli_query($db, "SELECT * FROM ideas ");

		$sql = "SELECT ideatitle, idea, category, date, PostedBy FROM ideas WHERE uid <= '99'";
		$result = $db->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<div id=\"list-fields-home\" class=\"grey-box\">" . $row["ideatitle"] ."<br> in <a href=\"list-of-ideas-" . $row['category']. ".php\"> " . $row["category"]. "</a>. <br>Posted on " . $row["date"] . " by ". $row["PostedBy"] . "</div>";
		    }
		} else {
		    echo "0 results";
		}
	?>
</div>
<?php include 'includes/index-content.php'; ?>