<h3><?php 
	$ideat = mysqli_query($db, "SELECT ideatitle FROM ideas WHERE url='$url'");
	$ideatitle = mysqli_fetch_row($ideat);
	echo $ideatitle['0']; 
?></h3>
<div class="col-9 grey-box">
<?php 
	$result = mysqli_query($db, "SELECT idea FROM ideas WHERE url='$url'");
	$idea = mysqli_fetch_row($result);
	?><p><?php echo $idea['0'] ?></p><?php ;
	echo "<p> in ";
	$query = mysqli_query($db, "SELECT category FROM ideas WHERE url='$url'");
	$category = mysqli_fetch_row($query);
?>
<a href="../list-of-ideas-<?php echo $category['0']?>.php"><?php echo $category['0'];?></a>
<?php
$posted = mysqli_query($db,"SELECT PostedBy FROM ideas WHERE url='$url'");
$postedBy = mysqli_fetch_row($posted);
echo "by ".$postedBy['0']."</p>";
?>	
</div>
<div>
<?php
if ($username == $postedBy['0']) {
		?>
			<div class="idea-edit-delete">
				<a href="../edit-idea.php?url=<?php echo $url ?>"><input type="button" name="edit-idea" value="Edit idea" class="button-full button-2"></a>
				<a href="../delete-idea.php?url=<?php echo $url?> "><input type="button" name="delete-idea" value="Delete idea" class="button-full button-2"></a>
				<a href="../view-files.php?url=<?php echo $url?>"><input type="button" name="view-files" value="View files" class="button-full button-2"></a>
				<a href="../upload.php?url=<?php echo $url ?>"><input type="button" name="upload-files" value="Upload files" class="button-full button-2"></a>
			</div>
		<?php
	}
	else {
		?>
			<div class="idea-edit-delete">
				<a href="../make-this.php?url=<?php echo $url ?>"><input type="button" name="make-this" value="Make this" class="button-full button-2"></a>
				<a href="../view-files.php?url=<?php echo $url?>"><input type="button" name="view-files" value="View files" class="button-full button-2"></a>
				<a href="../upload.php?url=<?php echo $url ?>"><input type="button" name="upload-files" value="Upload files" class="button-full button-2"></a>
			</div>
		<?php
	}
?>
</div>
	<div id="idea-action" class="col-5">
		<h3>Comments</h3>
			<div class="idea-action-fields grey-box">
				<?php
					$sql = "SELECT comment FROM ideas WHERE url='$url'";
					$result = $db->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
						        echo "<p>" . $row['comment']."</p>";
						    }
						   }
					else {
					    echo "Be the first to comment";
					}	    
				?>
				<form method="post" action="../comment.php?url=<?php echo $url ?>">
					<textarea rows="3" name="comment" placeholder="place a comment" required="required"></textarea>
					<br>
					<input type="submit" value="comment">
				</form>
			</div>
	</div>
	<div id="idea-action" class="col-4">
		<h3>People working on this:</h3>
			<div class="idea-action-fields grey-box">
				<?php
					$sql = "SELECT workingOnThis FROM ideas WHERE url='$url'";
					$result = $db->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
						        echo "<p>" . $row['workingOnThis']."</p>";
						    }
						   }
					else {
					    echo "No one is working on this yet.";
					}	    
				?>
		</div>
	</div>

	<div class="col-9">
		<h3>Issues</h3>
		<div class="idea-action-fields grey-box">
				<?php
					$sql = "SELECT issues FROM ideas WHERE url='$url'";
					$result = $db->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
						        echo "<p>" . $row['issues']."</p>";
						    }
						   }
					else {
					    echo "Be the first to post an issue";
					}	    
				?>
				<form method="post" action="../issue.php?url=<?php echo $url ?>">
					<textarea rows="3" name="issue" placeholder="Report an issue" required="required"></textarea>
					<br>
					<input type="submit" value="Post">
				</form>
		</div>
	</div>
</div>