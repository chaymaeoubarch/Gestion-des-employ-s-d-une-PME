<?php
 include ('connect.php');

 $matricul = $_GET['holly'];
 $select = "SELECT * FROM employee where Matricule = '$matricul'";
 $result = mysqli_query($db,$select);
 $emp = mysqli_fetch_assoc($result);

  if(isset($_POST['submit']))
  {
    $Nom =$_POST["nom"];
    $Prénom=$_POST["prénom"];
    $Date =$_POST["date"];
    $Département =$_POST["département"];
    $Salaire =$_POST["salaire"];
    $Fonction =$_POST["fonction"];
    $update= "UPDATE employee SET Nom='$Nom',
    Prénom='$Prénom', DateNaissance='$Date',
    Département='$Département', Salaire='$Salaire',
    Fonction='$Fonction' WHERE Matricule='$matricul'";
    $TEST = mysqli_query($db,$update);
    
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
      <form method="POST" >
      <h3 class="text-success center">Modifier</h3>
        <div class="row">
          <!-- <div class="col-5">
          <input type="text" class="form-control"  placeholder="Matricule" name="matricule" pattern="[A-Za-z]{1}[0-9]{1,3}" >
          </div> -->
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
          value=<?php echo $emp['DateNaissance']?> >
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
</body>
</html>
