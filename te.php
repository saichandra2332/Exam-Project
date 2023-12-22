<?php
require_once "config.php";

if (isset($_POST['te_id'])) {
    $te_id = $_POST['te_id'];

    $sql = "SELECT * FROM tech WHERE te_id = $te_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        echo json_encode($data);
    } else {
        echo "No more data found or invalid te_id.";
    }
} else {
    echo "No te_id provided in the request.";
}

$conn->close();
?>
