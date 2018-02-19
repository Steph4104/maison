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

    $lien = ($_POST['lien']) ? $_POST['lien'] : 'N/A';
    $prix = ($_POST['prix']) ? $_POST['prix'] : 0;
    $chambre = ($_POST['chambre']) ? $_POST['chambre'] : 0;
    $bain = ($_POST['bain']) ? $_POST['bain'] : 0;
    $autobus = ($_POST['autobus']) ? $_POST['autobus'] : 0;
    $habitable = ($_POST['habitable']) ? $_POST['habitable'] : 0;
    $adresse = ($_POST['adresse']) ? $_POST['adresse'] : 'N/A';
    $year = ($_POST['year']) ? $_POST['year'] : 'N/A';    
    $taxe_m = ($_POST['taxe_m']) ? $_POST['taxe_m'] : 0;    
    $taxe_s = ($_POST['taxe_s']) ? $_POST['taxe_s'] : 0;
    $inclusion = ($_POST['inclusion']) ? $_POST['inclusion'] : 'N/A';    
    $exclusion = ($_POST['exclusion']) ? $_POST['exclusion'] : 'N/A';
    $pour = ($_POST['pour']) ? $_POST['pour'] : 'N/A';
    $contre = ($_POST['contre']) ? $_POST['contre'] : 'N/A';
    $comment = ($_POST['commentaire']) ? $_POST['commentaire'] : 'N/A';
    $id = ($_POST['id']) ? $_POST['id'] : '';
    
if($_FILES["fileToUpload"]['error'] != 4){ // File should always exit but error 4 mean nothing was uplaod
    $target_dir = "image_house/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {

        if ($_FILES["fileToUpload"]["size"] == 0) {
            echo "Sorry, your file is too large.";
            error_log("Sorry, your file is too large.");
            $uploadOk = 0;
        }
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        
        if ($uploadOk == 0) {
            error_log("Error, can't upload");
            header('Location: add.php');
            exit;
    
        }else{
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $sql_img = "UPDATE info_maison SET  img = '$target_file'  WHERE id = '$id'"; // if file change, upload the new one

                if ($conn->query($sql_img) === TRUE) {
                    error_log("New record created successfully");
                    
                } else {
                    error_log( "Error: " . $sql_img . "<br>" . $conn->error);
                    echo "Error: " . $sql_img . "<br>" . $conn->error;
                    echo "Something went wrong :( (img_edit)";
                }
   
            }
        }
    }
}

$inclusion = mysqli_real_escape_string($conn, $inclusion);
   $sql = "UPDATE info_maison SET link = '$lien', prix = '$prix', chambre = '$chambre', bain = '$bain', autobus = '$autobus', adresse = '$adresse', year = '$year', habitable = '$habitable', taxe_m = '$taxe_m', taxe_s = '$taxe_m', inclusion = '$inclusion', exclusion = '$exclusion', pour = '$pour', contre = '$contre', autre = '$comment'  WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        error_log("New record created successfully");
        header('Location: add.php');
        
    } else {
        error_log( "Error: " . $sql . "<br>" . $conn->error);
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Something went wrong :( (Info)";
    }

?>