<?php
include_once __DIR__ . "/../classes/DBdata.php";
$DBdata = new DBdata();


$output = [
    'status' => false
];

// Add funkcionalitāte
if (
    isset($_POST['review']) &&
    is_string($_POST['review']) &&
    !empty($_POST['review'])
) {
    $output = $DBdata->addReview($_POST['name'], $_POST['review']);
} elseif (
    isset($_POST['message']) &&
    is_string($_POST['message']) &&
    !empty($_POST['message'])
) {
    $output = $DBdata->addMessage($_POST['e-mail'], $_POST['message']);
}

if ($_REQUEST['api'] === 'getreviews') {
    $output = $DBdata->getAll();
}

echo json_encode($output, JSON_PRETTY_PRINT);
