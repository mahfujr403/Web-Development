<?php

$id = $_POST['id'];

$conn = new mysqli('localhost', 'root', '', 'product');
$sql = "DELETE FROM all_products WHERE `all_products`.`id` = $id";

if ($conn->query($sql) === TRUE) {
    echo "$name is removed from Database";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>