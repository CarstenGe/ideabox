<?php include '../includes/header-loggedin.php'; ?>
<div class="col-8 grey-box" style="height: 174px;">
<?php
	$prof = mysqli_query($db,"SELECT profilepic FROM users WHERE name='$username' ");
	$profile_pic = mysqli_fetch_row($prof);
	$profile_pic = $profile_pic['0'];
?>
	<img src="<?php echo $profile_pic ?>" class="profile-pic">
	<div>
		<h3><?php echo $username ?></h3>
		<?php
			$bio = mysqli_query($db,"SELECT biography FROM users WHERE name='$username' ");
			$biography = mysqli_fetch_row($bio);
			$biography = $biography['0'];
			echo $biography;
		?>
	</div>
</div>
<div class="col-3">
	<a href="upload-profile-pic.php"><input type="button" value="Upload profile pic" class="button-full button-1"></a><br>
	<a href="biography.php"><input type="button" value="Add biography" class="button-full button-1"></a><br>
	<a href="new-password.php"><input type="button" value="Change password" class="button-full button-1"></a><br>
	<a href=delete-account.php><input type="button" value="Delete account" class="button-full button-1"></a><br>
</div>
<div class="col-4">
	<h3>Your notifications</h3>
	<div class="grey-box account notification">
		<?php 
			$notif = "SELECT notifications FROM users WHERE name = '$username'";
			$notific = $db->query($notif);

			if ($notific->num_rows > 0) {
			    // output data of each row
			    while($row = $notific->fetch_assoc()) {
			        echo $row["notifications"];
			    }
			} else {
			    echo "No notifications yet.";
			}
		?>
	</div>
</div>
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
<div class="col-4">
	<h3>Ideas you've posted</h3>
	<div class="grey-box account">
		<?php $sql2 = "SELECT ideatitle, url, date FROM ideas WHERE PostedBy='$username' ";
			$result2 = $db->query($sql2);

			if ($result2->num_rows > 0) {
			    // output data of each row
			    while($row = $result2->fetch_assoc()) {
			        echo "<div id=\"account-column-rows\">" . "You've posted " . "<a href=\"ideas/" . $row['url']. ".php\">" . $row["ideatitle"]. "</a> on ". $row['date'] . "</div>";
			    }
			} 
			else {
			    echo "You haven't posted any ideas yet.";
			}
		?>	
	</div>
</div>
</body>
</html>