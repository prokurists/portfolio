<?php
include_once __DIR__ . "/../classes/DBadmin.php";
$DBadmin = new DBadmin();


$output = [
    'status' => false
];
if (
    isset($_POST['password']) &&
    is_string($_POST['password']) &&
    !empty($_POST['password'])
) {
    $output = $DBadmin->adminLogin($_POST['email'], $_POST['password']);
}
echo json_encode($output, JSON_PRETTY_PRINT);
