<?php
require_once "config.php";

if (isset($_POST['ap_id'])) {
    $ap_id = $_POST['ap_id'];

    $sql = "SELECT * FROM apptitude WHERE ap_id = $ap_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        echo json_encode($data);
    } else {
        echo "No more data found or invalid ap_id.";
    }
} else {
    echo "No ap_id provided in the request.";
}

$conn->close();
?>
