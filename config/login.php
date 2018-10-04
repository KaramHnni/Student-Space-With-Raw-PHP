<?php
 if(isset($_POST['login'])){
    $q="SELECT * FROM users WHERE username='$_POST[User]' AND password=SHA1('$_POST[password]')";
    $r=mysqli_query($dbc,$q);
    if(mysqli_num_rows($r) == 1){
        $data=mysqli_fetch_assoc($r);

        $_SESSION['username']=$data['Prenom'];
        $_SESSION['ID']=$data['ID'];
        header('Location: index.php');
    }
    else{
        echo "not found !";
    }
}
    ?>