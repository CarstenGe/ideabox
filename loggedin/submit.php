<?php include '../includes/header-loggedin.php'; ?>
<div class="col-4">
	<h1>Submit an idea</h1>
	<form action="submit2.php" method="post">
		<div class="grey-box submit-loggedin">
			<p>Title:</p>
			<input type="text" name="ideatitle" required="required" autofocus="autofocus" maxlength="40">
			<p>Idea:</p>
			<textarea rows="4" cols="50" name="idea" required="required"></textarea>
			<p>Category:</p>
			<select required="required" name="category">
				<option>---------</option>
				<option value="graphic-design">Graphic Design</option>
				<option value="webdesign">Webdesign</option>
				<option value="app-development">App development</option>
				<option value="other">Other</option>
			</select><br><br>
			<input type="submit" value="Submit idea">
		</div>
	</form>
</div>
<div class="index-content col-4">
	<h1 name="rules">Rules</h1>
	<div class="grey-box">
		<ul>
			<li>Every idea you post here belongs to everyone now.</li>
			<li>You have to make sure your idea doesn't violate copyright laws before posting.</li>
			<li>Don't post any offensive ideas.</li>
			<li>All posts must be written in English.</li>
			<li>You can't charge people money for carrying out an idea. A small compensation (e.g. a thank you card and a box of chocolates) upon completing a project is allowed but completely up to you.</li>
		</ul>
	</div>
</div>
</body>
</html>