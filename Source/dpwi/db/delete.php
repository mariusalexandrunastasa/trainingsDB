<?php
require 'db.php';
$id = $_GET['Id'];
if (is_numeric($id)) {
    $deleted = deleteTraining($id);
    if ($deleted != 1) {
        header("Location: error.php");
        die();
    }
} else {
    header("Location: error.php");
    die();
}

header("Location: index.php");
die();
