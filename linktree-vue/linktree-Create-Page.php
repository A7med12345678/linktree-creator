<?php
// Allow any domain to access the API
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');
// Retrieve the form data
$pageName = $_POST['PageName'];
$personName = $_POST['PersonName'];
$personJob = $_POST['PersonJob'];
$fbLink = $_POST['FBLink'];
$instaLink = $_POST['InstaLink'];
$WsLink = $_POST['WsLink'];
$twitterLink = $_POST['TwitterLink'];
$personAbout = $_POST['PersonAbout'];
$personAbout = $_POST['PersonAbout'];
$photoName =  $_POST['photoName'];
$Portofolio = $_POST['Portofolio'];
// Create an array with the form data
$data = array(
    'PageName' => $pageName,
    'PersonName' => $personName,
    'PersonJob' => $personJob,
    'FBLink' => $fbLink,
    'InstaLink' => $instaLink,
    'TwitterLink' => $twitterLink,
    'PersonAbout' => $personAbout,
    'photoName' => $photoName,
    'WsLink' => $WsLink,
    'Portofolio' => $Portofolio,
);
// Convert the array to JSON format
$json = json_encode($data, JSON_PRETTY_PRINT);
// Save the JSON data to a file
$file = "./json/$pageName.json";
if(file_put_contents($file, $json)){
echo"done";
}
?>