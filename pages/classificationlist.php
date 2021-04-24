<?php
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
    }
  try
{
	$bdd = new PDO('mysql:host=localhost;dbname=youssef;charset=utf8', 'root', '');
        
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

  if(isset($_SESSION['employe'])){

 ?>
<form id="myform">
<div class="container-fluid">
    <div class="card bg-white"  >
        <div class="card-header card-color" style="background-color: #3a3f48">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Affichage des classes de filieres</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-4">
                    <label for="filiere">Choisissez Votre Filiere: </label>
                    <input class="form-control" type="text" id='filiere' name='filiere' required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" name="submit" value="Chercher" />
                </div>
            </div>
            <div class="row table-responsive m-auto rounded">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-uppercase bg-light">
                            <th scope="col">Id</th>
                            <th scope="col">Code</th>
                            <th scope="col">IdFiliere</th>
                        </tr>
                    </thead>
                    
                    <tbody id="table-content">
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</form>
<script src="script/classificationparlist.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>