<?php
require "credentials.php";
require "phonepe_server.php";

$c = new Credentials("NIROGSTREET_2006221120_PP_EXTERNAL", "00e20160-02f3-453b-b7f5-12f6965a08e8", 1, null, null);

$phonepe = new PhonePeServer($c);
$token = "GRTd6cc36592817cc2aacb80e56c30e3366d08c3d43c44731f53b79d9c56d794a68";
$authToken = $phonepe->fetch_auth_token($token);

$user = $phonepe->get_user_info($authToken);
print_r($user);
?>