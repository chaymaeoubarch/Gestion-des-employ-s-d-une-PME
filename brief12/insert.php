
<?php 
include("connect.php");
if(isset($_POST['submit']))
{
  $Matricule=$_POST["matricule"];
  $Nom =$_POST["nom"];
  $Prenom=$_POST["prénom"];
  $Date =$_POST["date"];
  $Departement =$_POST["département"];
  $Salaire =$_POST["salaire"];
  $Fonction =$_POST["fonction"];
  $insert = "INSERT INTO employee  VALUES ('$Matricule','$Nom','$Prenom',
         '$DateNaiss','$Departement','$Salaire','$Fonction','$filename')";

  $TEST = mysqli_query($db,$insert);
  
      if($TEST){
          header('location:tbl.php');
      }      
      else{
          die(mysqli_error($db));
          }
}

?>


<?php include("header.php");?>
<div class="container">
      <form method="POST" action="">
      <h3 class="text-success center"></h3>
        <div class="row">
          <div class="col-5">
          <input type="text" class="form-control"  placeholder="Matricule" name="matricule" pattern="[A-Za-z]{1}[0-9]{1,3}" >
          </div>
          <div class="col-5">
          <input type="text" class="form-control" placeholder="Nom" name="nom" value=<?php echo $emp['Nom']?> >
          </div>
          <div class="col-5">
          <input type="text" class="form-control"  
          placeholder="Pénom" name="prénom" 
          value=<?php echo $emp['Prénom']?>>
          </div>
          <div class=" col-5">
          <input type="date" class="form-control"
          placeholder="Date de naissance" name="date"
          value=<?php echo $emp['DateDeNaissance']?> >
          </div>
          <div class=" col-5">
          <input type="text" class="form-control"  
          placeholder="Département" name="département"
          value=<?php echo $emp['Département']?>>
          </div>
          <div class="col-5">
          <input type="number" class="form-control"
            placeholder="Salaire" name="salaire"
            value=<?php echo $emp['Salaire']?> >
          </div>
          <div class="col-5">
          <input type="text" class="form-control" 
          placeholder="Fonction" name="fonction" 
          value=<?php echo $emp['Fonction']?>>
          </div>
          <div class="col-5">
          <input type="file" class="form-control" name="photo" >
          </div>
          <div class="col-5 mb-3">
          <button class="btn btn-success" type="submit" name="submit">Done</button>
          </div>
        </div>
      </form>
</div>