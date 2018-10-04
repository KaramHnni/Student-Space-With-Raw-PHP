<?php 

    session_start();
    include ('../config/connection.php');    
    include ('../config/login.php');
    include ('../config/register.php');


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Inscrivez-vous connectez</title>
        <link href="css/Student.css" type="text/css" rel="stylesheet">
        <?php include ('../config/head.php'); ?>

    </head>
    <body>
        <header>
                <?php include ('components/Logo.php'); ?>
        </header>
        <main>
            <section class="captions">
                <h1 class="title">Student Space</h1>
                <h2 class="description">Connectez et commencez votre experience<br> Inscrivez vous pour etre a jour </h2>
            </section>
            <section class="form">
                        <ul class="menu">
                            <li><a href="#connexion">Connexion</a></li>
                            <li><a href="#inscription">Inscrivez-vous</a></li>
                        </ul>
                        <form id="connexion" class="boxes" method="POST" action="Student.php#connexion">
                            <section class="group">
                                <label for="User">Nom d'Utilisateur</label>
                                <input type="text" class="champ" name="User" required>
                            </section>
                           <section class="group"> 
                                <label for="pass">Mot de Passe</label>
                                <input type="password" class="champ" name="password" required>   
                          </section>    
                          <span class="lien">Vous n'avez pas de compte?<a href="#inscription">Inscrivez Vous</a></span>  
                                  <input type="submit" value="connexion "class="Sign" name="login">
                                 
                         
                        </form>
                        <form id="inscription" class="boxes" action="Student.php#inscription" method="POST">
                                <section class="group">
                                <label for="Noom">Nom</label>
                                <input type="text" class="champ" name="Nom"  required>
                                </section>
                                <section class="group">
                                <label for="Prenom">Prenom</label>
                                <input type="text" class="champ" name="Prenom" required>
                                </section>
                                <section class="group">
                                <label for="mail">E-mail</label>
                                <input type="text" class="champ" name="mail" required>
                                </section>
                                <section class="group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="champ" name="username" required>
                                </section>
                                <section class="group">
                                <label for="pass">Mot de Passe</label>
                                <input type="password" class="champ" name="pass" required>
                                </section>
                                <span class="lien">Vous avez deja un compte? <a href="#connexion">Connectez Maintenant</a></span>
                                 <input type="submit" value="Inscrivez-vous" class="Sign" name="register">
                            
                        </form>
            </section>
        </main>
        <?php include ('../components/footer.php'); ?>
</html>