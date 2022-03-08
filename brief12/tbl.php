<?php include("header.php");?>
<?php

 include 'connect.php';
$sql = 'SELECT * FROM employee';
$result = mysqli_query($db,$sql);
$result = $db->query($sql);
?>
<div style="height:10vh">
<div class="container-fluid p-1 text-white text-center h-75 text-dark">
   <h1 class="text-success center ">Gestion Des Employés PME</h1>
</div>
</div>

<div class="table-responsive container">
<table class="table table-hover">
<thead class="thead-light">
  <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Pénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Département</th>
      <th scope="col">Salaire</th>
      <th scope="col">Fonction</th>
      <th scope="col">photo</th>
      <th scope="col"></th>
    </tr>
    </thead>
   
    <tbody>

<?php 

$sql = 'SELECT * FROM employee';
$result = mysqli_query($db,$sql);
$result = $db->query($sql);

if($result){
  while($row= mysqli_fetch_assoc($result)){
      echo '<tr>
          <td>'.$row['Matricule'].'</td>
          <td>'.$row['Nom'].'</td>
          <td>'.$row['Prénom'].'</td>
          <td>'.$row['DateNaissance'].'</td>
          <td>'.$row['Département'].'</td>
          <td>'.$row['Salaire'].'</td>
          <td>'.$row['Fonction'].'</td>
          <td><img src="'.$row['Photo'].'"></td>
         <td> <a href="edit.php?holly='.$row['Matricule'].' " class="btn btn-success ">Editer</a></td>
          <td><a href="delete.php?holly='.$row['Matricule'].'" class="btn btn-success " >Supprimer</a></td>
          </tr>';
     }    
    }

?>
    </tbody>
  </table>
</div>
</body>
</html>