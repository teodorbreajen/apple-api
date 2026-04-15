<?php
include "config.php";

$sql = "SELECT * FROM links";
$result = $connection->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
