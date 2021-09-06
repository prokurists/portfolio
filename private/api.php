<?php
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
    $output = $DBdata->addReview($_POST['e-mail'], $_POST['message']);
}

echo json_encode($output, JSON_PRETTY_PRINT);
