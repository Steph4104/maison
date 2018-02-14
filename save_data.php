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
    $taxe_m = ($_POST['taxe_m']) ? $_POST['taxe_m'] : 0;    
    $taxe_s = ($_POST['taxe_s']) ? $_POST['taxe_s'] : 0;
    $inclusion = ($_POST['inclusion']) ? $_POST['inclusion'] : 'N/A';    
    $exclusion = ($_POST['exclusion']) ? $_POST['exclusion'] : 'N/A';
    $pour = ($_POST['pour']) ? $_POST['pour'] : 'N/A';
    $contre = ($_POST['contre']) ? $_POST['contre'] : 'N/A';
    $comment = ($_POST['commentaire']) ? $_POST['commentaire'] : 'N/A';
    
   $sql = "INSERT INTO info_maison (link,chambre,prix,habitable,img,taxe_s,taxe_m,bain,autobus,adresse,inclusion,exclusion,pour,contre,autre) VALUES ('$lien','$chambre','$prix','$habitable','','$taxe_s','$taxe_m','$bain','$autobus','$adresse','$inclusion','$exclusion','$pour','$contre','$comment')";

    if ($conn->query($sql) === TRUE) {
        error_log("New record created successfully");
        header('Location: add.php');
    } else {
        error_log( "Error: " . $sql . "<br>" . $conn->error);
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Something went wrong :(";
    }

?>