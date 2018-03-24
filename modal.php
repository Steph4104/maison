
<?php
include 'database.php'; 

$id =$_POST['ID'];

    $info = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM info_maison WHERE id = $id"));

?>

<?php echo '<img src="'.$info['img'].'" >'; ?>
<div style='overflow-x:auto;'>
<table>
  <thead>
    <tr>
      <th width="200">Type</th>
      <th>Info</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Lien</td>
      <td><a target="_blank" href='<?php echo $info['link']; ?>'><?php echo $info['link']; ?></a></td>
    </tr>
    <tr>
      <td>Chambre</td>
      <td><?php echo $info['chambre']; ?></td>
    </tr>
    <tr>
      <td>Salle de bain</td>
      <td><?php echo $info['bain']; ?></td>
    </tr>
    <tr>
      <td>Prix</td>
      <td><?php echo $info['prix']; ?></td>
    </tr>
    <tr>
      <td>Habitable</td>
      <td><?php echo $info['habitable']; ?></td>
    </tr>
    <tr>
      <td>Année</td>
      <td><?php echo $info['year']; ?></td>
    </tr>
    <tr>
      <td>Taxes scolaires</td>
      <td><?php echo $info['taxe_s']; ?></td>
    </tr>
    <tr>
      <td>Taxes municipales</td>
      <td><?php echo $info['taxe_m']; ?></td>
    </tr>
    <tr>
      <td>Temps en autobus</td>
      <td><?php echo $info['autobus']; ?></td>
    </tr>
    <tr>
      <td>Adresse</td>
      <td><?php echo $info['adresse']; ?></td>
    </tr>
    <tr>
      <td>Inclusion</td>
      <td><?php echo $info['inclusion']; ?></td>
    </tr>
    <tr>
      <td>Exclusion</td>
      <td><?php echo $info['exclusion']; ?></td>
    </tr>
    <tr>
      <td>Pour</td>
      <td><?php echo $info['pour']; ?></td>
    </tr>
    <tr>
      <td>Contre</td>
      <td><?php echo $info['contre']; ?></td>
    </tr>
    <tr>
      <td>Commentaires</td>
      <td><?php echo $info['autre']; ?></td>
    </tr>
  </tbody>
</table>
</div>
  