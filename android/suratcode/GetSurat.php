<?php

include 'DatabaseConfig.php';

// query the application data
$sql = "SELECT * FROM jenis_surat";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) {
        $json_response[] = $row;
    }
    echo json_encode(array('jenis_surat' => $json_response));
}
mysqli_close($con);
