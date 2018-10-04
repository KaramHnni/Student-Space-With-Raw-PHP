<?php 
    session_start();
    
    include ('../config/connection.php');  
    include ('functions/absencefunc.php');    


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <link href="css/Accueil_Student.css" type="text/css" rel="stylesheet">
       <?php include ('../config/head.php'); ?>

    </head>
    <body>
        <section class="hero_image">
        <header>
        <?php include('components/logo.php');?>
                <ul class="Nav">
                    <li><a href="#">Consultation</a>
                        <ul class="inside_li">
                            	<div class="tring">
                            <li><a href="Absences_Etudiant.html">Abscenes</a></li>
                            <li><a href="Notes_Etudiant.html">Notes</a></li>
                        </div>
                        </ul>
                    </li>
                    <li><a href="#">Information</a>
                        <ul class="inside_li">
                            <li><a href="Liste_Groupe.html">Liste du Groupe</a></li>
                            <li><a href="Liste_Ens.html">Liste des enseignants </a></li>
                        </ul>
                    </li>
                    <li><a href="Contact.html">Contactez nous</a></li>
                </ul>
                <ul class="Nav">
                    <li> <a href="#">Bonjour <?php echo $_SESSION['username']; ?></a>
                        <ul class="inside_li">
                            <li><a href="Profile.html">Profile</a></li>
                            <li><a href="../config/logout.php">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
               
        </header>
        <main>
                <section class="caption">
                    <h1 class="welcome">Bienvenue dans Votre Plateforme etudiant ! </h1>
                    <h3 class="Des">Une Aventure sympatique</h3>
                </section>
                <a href="#" class="button">Decouvrez Nos services</a>
        </main>
    </section>
    <section class="page2">
        <section class="captionline">
            <hr>
        <h1 class="caption_2">Consultez votre etat d'assiduité en ligne</h1>
        <hr>
        </section>
        <h3 class="sub_caption">Une experience qui derige votre cursus et qui stufstuf stuf stuf stuf stuf</h3>
        <section class="tables">
            <section class="Absences_semaine">
                <table>
                    <?php    
                     include('../config/abc.php');
?>
                    <tr class="first">
                        <th></th>
                        <th>Dimanche</th>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>Jeudi</th>
                    </tr>
                    <tr>
                        <td class="f">PS</td>
                        <td></td>
                        <td><?php if($data['jrAbs'] == 'Lundi' && $data['Module'] == 'PS' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Mardi' && $data['Module'] == 'PS' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Mercredi' && $data['Module'] == 'PS' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Jeudi' && $data['Module'] == 'PS' ){echo "1";}else{ echo "0"; } ?></td>
                    </tr>
                    <tr>
                            
                                    <td>TECHWEB</td>
                                    <td><?php if($data['jrAbs'] == 'Dimanche' && $data['Module'] == 'TW' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Lundi' && $data['Module'] == 'TW' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Mardi' && $data['Module'] == 'TW' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Mercredi' && $data['Module'] == 'TW' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Jeudi' && $data['Module'] == 'TW' ){echo "1";}else{ echo "0"; } ?></td>
                                
                    </tr>
                    <tr>
                            
                            <td>CO</td>
                            
                            <td><?php if($data['jrAbs'] == 'Dimanche' && $data['Module'] == 'CO' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Lundi' && $data['Module'] == 'CO' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php absFuncPerWeek('Mardi',$data,'CO'); ?></td>
                        <td><?php if($data['jrAbs'] == 'Mercredi' && $data['Module'] == 'CO' ){echo "1";}else{ echo "0"; } ?></td>
                        <td><?php if($data['jrAbs'] == 'Jeudi' && $data['Module'] == 'CO' ){echo "1";}else{ echo "0"; } ?></td>
                        
            </tr>
                </table>
                <h1 class="table_caption"> Vos Absences cette semaine</h1>
            </section>
            <section class="Absences_mois">
                    <table>
                            <tr class="first">
                                    <th></th>
                                    <th>Semaine1</th>
                                    <th>Semaine2</th>
                                    <th>Semaine3</th>
                                    <th>Semaine4</th>
                                    
                            </tr>
                            <tr>
                                <td class="f">PS</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                                
                            </tr>
                            <tr>
                                    
                                            <td>TECHWEB</td>
                                            
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                        
                            </tr>
                            <tr>
                                    
                                    <td>CO</td>
                                   
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                
                    </tr>
                        </table>
                        <h1 class="table_caption">Vos absences ce mois</h1>
            </section>
    </section>
</section>
    <section class="page3">
            <section class="captionline">
                    <hr>
                <h1 class="caption_2">Restez Branchez Avec vos notes !</h1>
                <hr>
                </section>
                <h3 class="sub_caption">Une experience qui derige votre cursus et qui stufstuf stuf stuf stuf stuf</h3>
                <section class="tables">
                        <section class="Notes_semaine">
                            <table>
                                <tr class="first">
                                    <th></th>
                                    <th>CC</th>
                                    <th>TD</th>
                                    <th>TP</th>
                                    <th>ES</th>
                                    
                                    
                                </tr>
                                <tr>
                                    <td class="f">PS</td>
                                    <td></td>
                                    <td>12</td>
                                    <td>14</td>
                                    <td>2</td>
                                   
                                </tr>
                                <tr>
                                        
                                                <td>TECHWEB</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                            
                                </tr>
                                <tr>
                                        
                                        <td>CO</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    
                        </tr>
                            </table>
                            <h1 class="table_caption"> Vos Notes de cette semaine</h1>
                        </section>
                        <section class="Notes_mois">
                                <table>
                                        <tr class="first">
                                                <th></th>
                                    <th>CC</th>
                                    <th>TD</th>
                                    <th>TP</th>
                                    <th>ES</th>
                                    
                                        </tr>
                                        <tr>
                                            <td class="f">PS</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            
                                        </tr>
                                        <tr>
                                                
                                                        <td>TECHWEB</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>1</td>
                                                        
                                                    
                                        </tr>
                                        <tr>
                                                
                                                <td>CO</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>1</td>
                                                
                                            
                                </tr>
                                    </table>
                                    <h1 class="table_caption">Vos Notes Affiché  ce mois</h1>
                        </section>
                </section>
                
    </section>
    <?php include ('../components/footer.php'); ?>
    
        </body>
        </html>