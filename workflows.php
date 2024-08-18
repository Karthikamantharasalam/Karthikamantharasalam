<?php
include 'db.php';

// Example to get workflows
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM workflows";
    $result = $conn->query($sql);
    
    $workflows = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $workflows[] = $row;
        }
    }
    echo json_encode($workflows);
}
?>
