<?php

// sending webserver JSON format
header("Content-type: application/json");

//open server connection to MySQL database
$connection = mysqli_connect(
"localhost"
"melalv1"
"melvinjohn"
"webtech1"
);

//sending command to MySQL database
$results = mysqli_query(
	$connection,
	"SELECT * FROM `Sheet1`")

//loop through each row of place and create array to output as JSON
//create empty array to store final place content to convert to JSON
$Sheet1 = array();

//setup while  loop to work with one data row from database
//to convert to $Name array values
while ( $row = mysqli_fetch_array($results) ) {
	//inside curlies for while loop
	// get one complete row of results

	$Sheet1[] array('Name' => $row);
}

//output all content stored in $Sheet1 as a JSON formatted text chunk

print json_encode( array ('Sheet1' => $Sheet1));

//close connection to free server memory
mysqli_close($connection)

?>