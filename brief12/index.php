<?php include("header.php");?>
    <div class="container">
        <h3 class="text-success center">Ajouter Employé</h3>
    <form method="post" action="tbl.php">
        <div class="row">
                <div class="col-md-6 mb-3">
                <input type="text" class="form-control"  placeholder="Matricule" name="matricule" pattern="[A-Za-z]{1}[0-9]{1,3}" >
                 </div>

            <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Nom" name="nom" >
             </div>

            <div class="col-md-6 mb-3">
            <input type="text" class="form-control"  placeholder="Pénom" name="prénom" >
            </div>

            <div class="col-md-6 mb-3">
              <input type="date" class="form-control" placeholder="Date de naissance" name="date" >
             </div>

          <div class="col-md-6 mb-3">
            <input type="text" class="form-control"  placeholder="Département" name="département" >
          </div>

          <div class="col-md-6 mb-3">
            <input type="number" class="form-control"  placeholder="Salaire" name="salaire" >
          </div>

          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Fonction" name="fonction" >
          </div>

            <div class="col-md-6 mb-3">
            <input type="file" class="form-control" name="photo" >
          </div>
      </div>    
    <button class="btn btn-success" type="submit" name="submit">Submit form</button>
      </form>
    </div>
</body>
</html>