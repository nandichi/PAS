<?php

if (isset($_POST['tracking_number'])) {
    // Get the tracking number from the form
    $tracking_number = $_POST['tracking_number'];
    // Use the tracking number to make a request to the tracking API
    $url = 'http://trackingapi.com/track?number=' . $tracking_number;
    $data = file_get_contents($url);
    $parcel_data = json_decode($data);
    // Check if the tracking number is valid
    if ($parcel_data->status == 'success') {
        // Display the parcel's current status
        echo '<p>Parcel Status: ' . $parcel_data->status . '</p>';
        echo '<p>Current Location: ' . $parcel_data->location . '</p>';
    } else {
        // Display an error message if the tracking number is invalid
        echo '<p>Invalid tracking number</p>';
    }
}

?>