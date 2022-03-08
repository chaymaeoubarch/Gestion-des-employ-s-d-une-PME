<?php 
include("connect.php");

$matr  = $_GET['holly'];
if(isset($_GET['holly'])){
$query = "DELETE FROM employee WHERE Matricule='$matr'";
    $result = mysqli_query($db,$query);
    if($result){
        header('location:tbl.php');
    }else{
        echo"error";
    }
}
?>
