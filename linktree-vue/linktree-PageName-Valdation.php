<?php
// Allow any domain to access the API
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');

$folder_path = './json';
$files = scandir($folder_path);
$file_names = array();
foreach ($files as $file) {
  if ($file != '.' && $file != '..') {
    $file_name = pathinfo($file, PATHINFO_FILENAME);
    array_push($file_names, $file_name);
  }
}
// print_r($file_names);

$pageName = $_POST['input'];

// Process the data and return a response
if (in_array($pageName, $file_names)) {
  $response="Yes";
echo json_encode($response);
} else {
  $response="No";
  echo json_encode($response);
}
?>

