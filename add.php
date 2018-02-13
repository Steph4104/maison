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

?>
</ul>
<form>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Lien
          <input type="text" placeholder="lien">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Prix
          <input type="text" placeholder="prix">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Nmb de chambre
          <input type="text" placeholder="chambre">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Salle de bain
          <input type="text" placeholder="salle de bain">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Prix
          <input type="text" placeholder="prix">
        </label>
      </div>
    </div>
  </div>
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