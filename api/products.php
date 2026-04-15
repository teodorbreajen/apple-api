<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM products WHERE id=$id LIMIT 1";
} else {
    $sql = "SELECT * FROM products";
}

$result = $connection->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
