<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

// check for required fields
if (/*isset($_POST['id_event'])
    &&*/ isset($_POST['id_person'])
    && isset($_POST['enter_or_exit'])
    && isset($_POST['date'])
    && isset($_POST['img'])) {

    $id_event=$_POST['id_event'];
    $id_person = $_POST['id_person'];
    $enter_or_exit = $_POST['enter_or_exit'];
    $date = $_POST['date'];
    $img=$_POST['img'];
    //$img = fbsql_create_blob(base64_decode($_POST['img']));

    // include db connect class
    require_once __DIR__ . '/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
    $result = mysql_query("INSERT INTO evenement( id_person, enter_or_exit,date,img)
VALUES('$id_person', '$enter_or_exit','$date','$img')");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Event successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";

        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>