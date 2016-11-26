<?php include 'includes/header.php'; ?>
<h1>List of ideas: Graphic design</h1>
<?php 
include 'includes/category-menu.php'; 
include 'includes/list-disclaimer.php';
#$query = mysqli_query($db, "SELECT * FROM ideas");

$sql = "SELECT ideatitle, idea, category, uid, date, url, PostedBy FROM ideas WHERE category='graphic-design'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div id=\"list-fields\" class=\"grey-box\">" . $row["ideatitle"]. "<br>Posted on " . $row["date"] ." by ". $row["PostedBy"] ."</div>";
    }
} else {
    echo "0 results";
}

?>
</body>
</html>