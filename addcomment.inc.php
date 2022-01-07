<?php


$recipeid = $_POST['recipeid'];


$poster = $_POST['poster'];


$comment = htmlspecialchars($_POST['comment']);


$date = date("Y-m-d");

$con = mysqli_connect("localhost", "test", "test", "recipes") or die('Could not connect to server');
// $con = mysql_connect("localhost", "test", "test") or die('Could not connect to server');


// mysql_select_db("recipe", $con) or die('Could not connect to database');


$query = "INSERT INTO comments (recipeid, poster, date, comment) " .


          " VALUES ($recipeid, '$poster', '$date', '$comment')";


$result = mysqli_query($con, $query);


if ($result)


   echo "<h2>Comment posted</h2>\n";


else


   echo "<h2>Sorry, there was a problem posting your comment</h2>\n";


echo "<a href=\"index.php?content=showrecipe&id=$recipeid\">Return to recipe</a>\n";


?>