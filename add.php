<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>

    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="css/base.css">

  </head>
  <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Maison</li>
      <li><a href="index.php">List</a></li>
      <li><a href="add.php">Add</a></li>
    </ul>
  </div>
</div>

  <article class="grid-container">
    <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
 
</ul>
<?php
if(isset($_GET['action'])){
  if ($_GET['action'] == 'edit'){
    $action = 'edit_data.php';
  }else{
    $action = 'save_data.php';
  }
}else{
  $action = 'save_data.php';
}

if(isset($_GET['house_id'])){
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
  
  $id =$_GET['house_id'];
  
      $info = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM info_maison WHERE id = $id"));
  
}else{
  $info['link'] = '';
  $info['prix'] = '';
  $info['chambre'] = '';
  $info['bain'] = '';
  $info['autobus'] = '';
  $info['habitable'] = '';
  $info['adresse'] = '';
  $info['img'] = '';
  $info['taxe_m'] = '';
  $info['taxe_s'] = '';
  $info['inclusion'] = '';
  $info['exclusion'] = '';
  $info['pour'] = '';
  $info['contre'] = '';
  $info['autre'] = '';
}

?>
<form action='<?php echo $action; ?>' method="POST" enctype="multipart/form-data">
  <div class="grid-container">
  <input type="number" name='id' placeholder="id" class="hide" value="<?php echo (isset($id)) ?$id : ''; ?>">    
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Lien
          <input type="url" name='lien' placeholder="lien" value="<?php echo $info['link']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Prix
          <input type="number" name='prix' placeholder="prix" value="<?php echo $info['prix']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Nmb de chambre
          <input type="number" name='chambre' placeholder="chambre" value="<?php echo $info['chambre']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Salle de bain
          <input type="number" name='bain' placeholder="salle de bain" value="<?php echo $info['bain']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Temps en autobus
          <input type="number" name="autobus" placeholder="autobus" value="<?php echo $info['autobus']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Surface habitable
          <input type="number" name='habitable' placeholder="p2"  value="<?php echo $info['habitable']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Adresse
          <input type="text" name='adresse' placeholder="adresse"  value="<?php echo $info['adresse']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label for="fileToUpload">Upload an image</label>
        <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $info['img']; ?>">
       
      </div>
      <div class="medium-6 cell">
        <label>Taxes municipales
          <input type="number" name='taxe_m' placeholder="taxe"  value="<?php echo $info['taxe_m']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Taxes scolaires
          <input type="number" name='taxe_s' placeholder="taxe"  value="<?php echo $info['taxe_s']; ?>">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Inclusion
        <textarea name='inclusion' placeholder="None"> <?php echo $info['inclusion']; ?></textarea>
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Exclusion
        <textarea name='exclusion' placeholder="None"><?php echo $info['exclusion']; ?></textarea>
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Commentaires
        <textarea name='commentaire' placeholder="None"><?php echo $info['autre']; ?></textarea>
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Point pour
        <textarea name='pour' placeholder="None"><?php echo $info['pour']; ?></textarea>
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Point contre
        <textarea name='contre' placeholder="None"><?php echo $info['contre']; ?></textarea>
        </label>
      </div>
    </div>
  </div>
  <input type="submit" class="button" name='submit' value="Submit">
</form>
</div>


  </article>

</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/foundation.js"> </script>
<script>
 $(document).ready(function () {
  $('ul').sortable({
     // axis: 'y',
      stop: function (event, ui) {
        var data = $(this).sortable('serialize');
         // $('span').text(data);
          $.ajax({
                  data: data,
              type: 'POST',
              url: 'refresh_order.php'
          });
}
  });

  $(document).foundation();
});


     </script>

</html>