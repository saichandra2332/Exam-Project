<?php
require_once "config.php";

if (isset($_POST['ve_id'])) {
    $ve_id = $_POST['ve_id'];

    $sql = "SELECT * FROM verbal WHERE ve_id = $ve_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        echo json_encode($data);
    } else {
        echo "No more data found or invalid ve_id.";
    }
} else {
    echo "No ve_id provided in the request.";
}

$conn->close();
?>
