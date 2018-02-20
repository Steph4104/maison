 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maison_sort";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET['id'];

$sql = "UPDATE info_maison SET sold = 'vendu'  WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        error_log("New record created successfully");
        header('Location: add.php');
        
    } else {
        error_log( "Error: " . $sql . "<br>" . $conn->error);
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Something went wrong :( (Info)";
    }
?>