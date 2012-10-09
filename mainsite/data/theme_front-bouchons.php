<?php 

/**
 * theme_front-bouchons.php
 */

$ok = (boolean) $_GET['ok'];

$response = '{ "response" : "%s" }'."\n";

if ($ok) {
  $response = sprintf($response, 'ok');
} else {
  $response = sprintf($response, 'ko');
}

header('application/json');
echo $response;
