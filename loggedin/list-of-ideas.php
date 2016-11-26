<?php include '../includes/header-loggedin.php'; ?>
<h1>List of ideas</h1>
<?php include '../includes/category-menu.php'; ?>
<?php
#$query = mysqli_query($db, "SELECT * FROM ideas");

$sql = "SELECT ideatitle, idea, category, uid, date, PostedBy, url FROM ideas";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div id=\"list-fields\" class=\"grey-box\">" . "<a href=\"ideas/" . $row['url']. ".php\">" . $row["ideatitle"] ."</a><br> in <a href=\"list-of-ideas-" . $row['category']. ".php\"> " . $row["category"]. "</a>. <br>Posted on " . $row["date"] . " by ". $row["PostedBy"] . "</div>";
    }
} else {
    echo "0 results";
}

?>
</body>
</html>