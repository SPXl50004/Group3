<?php
    $imgData = $_POST["imgData"];
    $imgData = str_replace("data:image/jpeg;base64,", "", $imgData);
    $imgData = str_replace(" ", "+", $imgData);
    $data = base64_decode($imgData);
    $file = "photos/picture-" . time() . ".jpg";
    $success = file_put_contents($file, $data);
    if ($success) {
        echo "Picture saved successfully.";
    } else {
        echo "Failed to save picture.";
    }
?>
