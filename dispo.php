 <?php
 session_start();
include 'database.php';

$id = $_GET['id'];

$sql = "UPDATE info_maison SET sold = 'vendu'  WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        error_log("New record created successfully");
        $_SESSION['success'] = 'vendu';
        header('Location: index.php');
        
    } else {
        error_log( "Error: " . $sql . "<br>" . $conn->error);
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Something went wrong :( (Info)";
    }
?>