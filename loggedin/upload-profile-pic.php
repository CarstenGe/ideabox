<?php include '../includes/header-loggedin.php'; ?>
<h3>Upload profile picture</h3>

<div class="grey-box col-4">
	<form method="get" action="profile-pic-uploaded.php">
		<p>Post url here</p>
		<input type="text" name="url-profile-pic" required="required"><br><br>
		<input type="submit" value="upload picture">
		<a href="javascript:javascript:history.go(-1)"><input type="button" value="Go back" class="button-full"></a>
	</form>
	<br>
</div>

<div class="grey-box col-4">
<p>Since Ideabox isn't a file host, we recommend you to upload your files to a cloud host (e.g. Dropbox, Google Drive) and post a link to the url below. Make sure the link starts with http://</p>
<p>Do not post inappropriate material. Anything other than files for ideas will be deleted and users might be banned.</p>
</div>
