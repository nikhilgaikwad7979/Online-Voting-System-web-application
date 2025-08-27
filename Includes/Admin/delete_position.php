<?php
include('../config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // mysqli_query($conn, "DELETE FROM candidates WHERE id='$id'");
    // mysqli_query($conn, "DELETE FROM votes WHERE position_id='$id'");
    // mysqli_query($conn, "DELETE FROM election_voters WHERE id='$id'");
    $position = "DELETE FROM positions WHERE id='$id'";
    $voters = "DELETE FROM users WHERE id='$id' and role='voter'";

    if (mysqli_query($conn, $position)) {
        echo "<script>alert('Position deleted successfully'); 
              window.location.href='index.php#candidates';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
     if (mysqli_query($conn, $voters)) {
        echo "<script>alert('Position deleted successfully'); 
              window.location.href='index.php#voters';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No position ID provided!";
}
?>
