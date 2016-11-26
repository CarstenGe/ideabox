<?php session_start();
include '../includes/connect.php';

	$ideatitle = $_POST["ideatitle"];
	$idea = $_POST["idea"];
	$category = $_POST["category"];
	$date = date("Y/m/d") . " at " . date('H:i');
	$url = preg_replace('~[^\pL\d]+~u', '-', $ideatitle);
	$ideatitle = mysqli_real_escape_string($db, $ideatitle);
	$idea = mysqli_real_escape_string($db, $idea);
	$category = mysqli_real_escape_string($db, $category);

	
	$username = $_SESSION["username"];

$query = mysqli_query($db, "INSERT INTO ideas (ideatitle, idea, category, PostedBy, date, url) VALUES ('$ideatitle', '$idea', '$category','$username', '$date', '$url')");
 


$uid = mysqli_query($db,"SELECT uid FROM ideas WHERE ideatitle='$ideatitle'");

$file = "ideas/".$url.".php";
$myfile = fopen($file, "w") or die("Unable to open file!");
$txt = "<?php include'../../includes/header-ideas.php';\$url=\"$url\";include'../../includes/idea.php';?></body></html>";
fwrite($myfile, $txt);
fclose($myfile);


	if($query){
		header("Location:ideas/$url.php");
	}

?>