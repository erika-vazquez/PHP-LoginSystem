<?php
$result = mysqli_query($conn, 'SELECT * FROM users');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$fp = fopen('file.csv', 'w');

foreach ($row as $val) {
    fputcsv($fp, $val);
}

fclose($fp);