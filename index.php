<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison</title>

    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <p id='dynamic-content'> </p>
          </div>
        </div>
      </div>
      </div>
  <div class="row small-up-2 medium-up-3 large-up-4">
  <?php

include 'database.php';

echo'<ul id="sortable" class="sortable ui-sortable colomn">';
$sql = "SELECT * FROM info_maison AS info INNER JOIN sort_save AS sort ON info.id = sort.user_id AND info.sold = 'dispo' ORDER BY sort.display_order ASC ";

$result = $conn->query($sql);
$test = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
     echo'<li id="item-'.$row['id'].'" class="item">
     <div class="imgwrap">
     <img src="'.$row['img'].'">
</div>
     <div class="card-section">
       <h5 class="limit-two-line">'.$row['adresse'].'</h5>
       <h6>'.$row['prix'].'</h6>
       <p><button data-target="#exampleModal" data-toggle="modal" class="button info" id="'.$row['user_id'].'" style="float:left" >Info</button></p>
       <p><a href="add.php?action=edit&house_id='.$row['user_id'].'"style="float:right" class="button">Edit</a></p>
     </div>
  
</li>';

    }
} else {
    echo "0 results";
}


echo'<ul class="sortable ui-sortable colomn" style="border-top: black solid 2px;">';
$sql = "SELECT * FROM info_maison AS info INNER JOIN sort_save AS sort ON info.id = sort.user_id AND info.sold = 'vendu' ORDER BY sort.display_order ASC ";

$result = $conn->query($sql);
$test = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
     echo'<li id="item-'.$row['id'].'" class="item">
     <div class="imgwrap">
     <img class="grey_sold" src="'.$row['img'].'">
</div>
     <div class="card-section">
       <h5 class="limit-two-line">'.$row['adresse'].'</h5>
       <h6>'.$row['prix'].'</h6>
       <p><button class="button info" id="'.$row['user_id'].'" style="float:left" >Info</button></p>
       <p><a href="add.php?action=edit&house_id='.$row['user_id'].'"style="float:right" class="button">Edit</a></p>
     </div>
  
</li>';

    }
} else {
    echo "0 results";
}
//$conn->close();
?>
</ul>
</div>
  </article>

</div>

 
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/foundation.js"> </script>
<script src="js/notify.js"> </script>
   <script src="js/bootstrap.min.js"></script>

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

  
  $(".info").on('click',function () {
    var $modal = $('#myModal');
    var id = event.target.id;

$.ajax({
    type: "POST",
    url: 'modal.php',
    data: {
        'ID': id
    },
  success: function(resp){
    $('#myModal').modal('show')
   // alert(resp);
    $('#dynamic-content').html(resp);

   // $modal.html(resp).foundation('open');
    //  $('html, body').animate({
    //      scrollTop: $("#item-"+id).offset().top
    //  });
    
},     
error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      }
  });
});
});
</script>

<?php
if(!$_SESSION['success']){
  $_SESSION['success']='';
}

switch($_SESSION['success']){
   case 'new_add':
?><script>
    $.notify("Ajout avec success", "success");
</script><?php
    $_SESSION['success'] = '' ; 
    break;
  case 'edit':
?><script>
    $.notify("Modifier sans problème", "success");
</script><?php
    $_SESSION['success'] = '' ; 
    break;
  case 'vendu':
?><script>
    $.notify("C'est plate, je l'aimais", "success");
</script><?php
    $_SESSION['success'] = '' ; 
}
?>
</html>