<?php
require_once "config.php";

if (isset($_POST['r_id'])) {
    $r_id = $_POST['r_id'];

    $sql = "SELECT * FROM reasoning WHERE r_id = $r_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        echo json_encode($data);
    } else {
        echo "No more data found or invalid r_id.";
    }
} else {
    echo "No r_id provided in the request.";
}

$conn->close();
?>
