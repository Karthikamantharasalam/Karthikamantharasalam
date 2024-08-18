<?php
include 'db.php';

// Example to get audits
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM audits";
    $result = $conn->query($sql);
    
    $audits = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $audits[] = $row;
        }
    }
    echo json_encode($audits);
}
?>
