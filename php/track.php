<?php

if (isset($_POST['tracking_number'])) {
    $tracking_number = $_POST['tracking_number'];
    $url = 'http://trackingapi.com/track?number=' . $tracking_number;
    $data = file_get_contents($url);
    $parcel_data = json_decode($data);
    if ($parcel_data->status == 'success') {
        echo '<p>Parcel Status: ' . $parcel_data->status . '</p>';
        echo '<p>Current Location: ' . $parcel_data->location . '</p>';
    } else {
        echo '<p>Invalid tracking number</p>';
    }
}
?>