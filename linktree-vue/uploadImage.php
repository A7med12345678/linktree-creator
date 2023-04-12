<?php
session_start();

// Allow any domain to access the API
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = $file['name'];
    $tmp_path = $file['tmp_name'];
    $error = $file['error'];

    if ($error === UPLOAD_ERR_OK) {
      // Create the "uploads" directory if it doesn't exist
      if (!is_dir('uploads')) {
        mkdir('uploads');
      }

      // Set the full path to the uploaded file
      $upload_path = __DIR__ . '/uploads/' . $filename;

      // Move the uploaded file to the "uploads" directory
      if (move_uploaded_file($tmp_path, $upload_path)) {
        echo 'File uploaded successfully!';
        $_SESSION['photo'] = $_FILES["file"]["name"];
      } else {
        echo 'An error occurred while moving the file.';
      }
    } else {
      echo 'An error occurred while uploading the file.';
    }
  } else {
    echo 'No file was uploaded.';
  }
}
?>