<?php

function uploadPhotos($firstname, $lastname, $orderId) {
    // File upload configuration

    $targetDir = "uploads/" . $orderId . '_' . $firstname . "_" . $lastname . "/";

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    $fileNames = array_filter($_FILES['uploadPhotos']['name']);

    if (!empty($fileNames)) {
        foreach ($_FILES['uploadPhotos']['name'] as $key => $val) {
            // File upload path
            $fileName = basename($_FILES['uploadPhotos']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            //echo ("Added");

            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                move_uploaded_file($_FILES["uploadPhotos"]["tmp_name"][$key], $targetFilePath);
            }
        }
    }

    // Upload slip

    $fileNames1 = array_filter($_FILES['transferSlip']['name']);

    if (!empty($fileNames1)) {
        foreach ($_FILES['transferSlip']['name'] as $key => $val) {
            // File upload path
            $fileName1 = basename($_FILES['transferSlip']['name'][$key]);
            $targetFilePath = $targetDir . $fileName1;

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            //echo ("Success");

            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                move_uploaded_file($_FILES["transferSlip"]["tmp_name"][$key], $targetFilePath);
            }
        }
    }
}