<?php 
	include '../includes/header-loggedin.php';
	$url = $_GET['url']; 
?>
<h3>Upload files</h3>

<div class="grey-box col-3">
	<form method="get" action="files-uploaded.php?url=<?php echo $url ?>">
		<p>Description</p>
		<textarea required="required" name="description"></textarea>
		<p>Post url here</p>
		<input type="text" name="url-files" required="required" width="450px">
		<input type="hidden" name="url" value="<?php echo $url; ?>"><br><br>
		<input type="submit" value="Upload">
		<div class="button-full button-2 cancel-button">
			<a href="javascript:history.go(-1)">Cancel</a>
		</div>
	</form>
	<br>
</div>

<div class="grey-box col-4">
<p>Since Ideabox isn't a file host, we recommend you to upload your files to a cloud host (e.g. Dropbox, Google Drive) and post a link to the url below. Make sure the link starts with http://</p>
<p>Do not post inappropriate material. Anything other than files for ideas will be deleted and users might be banned.</p>
</div>
