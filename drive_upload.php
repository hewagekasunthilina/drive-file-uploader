<?php

require_once(realpath(dirname(__FILE__) .'/google-api-php-client-2.2.2/vendor/autoload.php'));

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_id.json');
$client->addScope(Google_Service_Drive::DRIVE_FILE);

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {

	if (is_uploaded_file($_FILES['uploadfile']['tmp_name'])) {

		$client->setAccessToken($_SESSION['access_token']);
  		$drive = new Google_Service_Drive($client);

  		
  		$file_name = $_FILES['uploadfile']['name'];


?>
