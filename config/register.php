<?php 
if(isset($_POST['register'])){
    $q="INSERT INTO users (Nom,Prenom,email,username,password) VALUES ('$_POST[Nom]','$_POST[Prenom]','$_POST[mail]','$_POST[username]',SHA1('$_POST[Pass]')) ";
    $r=mysqli_query($dbc,$q);
    
    if($r){
        $_SESSION['username']=$_POST['Prenom'];
        header('Location: index.php');
    }

}


?>