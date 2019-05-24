<?
$route = $_GET['route'];

function someFunction($firstName, $lastName, $password){
  return "I'm $firstName $lastName";
}

$hash = md5($_GET['password']);

if ($_GET['route'] == 'someFunction' && $hash == '202cb962ac59075b964b07152d234b70') {
  $result = someFunction($_GET['firstName'],$_GET['lastName'],$_GET['password']);
}

echo json_encode($result);
