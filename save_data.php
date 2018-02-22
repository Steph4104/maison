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
    $year = ($_POST['year']) ? $_POST['year'] : 0;    
    $taxe_m = ($_POST['taxe_m']) ? $_POST['taxe_m'] : 0;    
    $taxe_s = ($_POST['taxe_s']) ? $_POST['taxe_s'] : 0;
    $inclusion = ($_POST['inclusion']) ? $_POST['inclusion'] : 'N/A';    
    $exclusion = ($_POST['exclusion']) ? $_POST['exclusion'] : 'N/A';
    $pour = ($_POST['pour']) ? $_POST['pour'] : 'N/A';
    $contre = ($_POST['contre']) ? $_POST['contre'] : 'N/A';
    $comment = ($_POST['commentaire']) ? $_POST['commentaire'] : 'N/A';
    
if($_FILES["fileToUpload"]){
    $target_dir = "image_house/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 0) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
$inclusion = mysqli_real_escape_string($conn, $inclusion);
   $sql = "INSERT INTO info_maison (link,chambre,prix,habitable,img,taxe_s,taxe_m,bain,autobus,adresse,year,inclusion,exclusion,pour,contre,autre,sold) VALUES ('$lien','$chambre','$prix','$habitable','$target_file','$taxe_s','$taxe_m','$bain','$autobus','$adresse','$year','$inclusion','$exclusion','$pour','$contre','$comment','dispo')";

    if ($conn->query($sql) === TRUE) {
        error_log("New record created successfully");
        
    } else {
        error_log( "Error: " . $sql . "<br>" . $conn->error);
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Something went wrong :( (Info)";
    }
    $last_id = $conn->insert_id;
    $max = mysqli_query($conn,"SELECT MAX(display_order) FROM `sort_save` ");
    $row = mysqli_fetch_array($max);

    $sql2 = "INSERT INTO sort_save (user_id, display_order) VALUES ('$last_id', $row[0]+1)";

    if ($conn->query($sql2) === TRUE) {
        error_log("New record created successfully");
        header('Location: add.php');
    } else {
        error_log( "Error: " . $sql2 . "<br>" . $conn->error);
        echo "Error: " . $sql2 . "<br>" . $conn->error;
        echo "Something went wrong :( (order)";
    }

?>