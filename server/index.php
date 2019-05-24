<?
$route = $_GET['route'];

$var = $route*$route;

echo json_encode($var);
