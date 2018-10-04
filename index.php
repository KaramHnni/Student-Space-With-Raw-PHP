<!DOCTYPE html>
<html>
    <head>
        <title>Student Space : Un espace pour vous</title>
        <link href="css/Home.css" type="text/css" rel="stylesheet">
        <?php include ('config/head.php'); ?>
        
    </head>
    <body>
        <header>
                <?php include ('components/Logo.php'); ?>
            
        </header>
        <main>
            <section class="content">
                <p class="title">STUDENT SPACE</p>
                <p class="description">Decouvrez vos informations dans un clic</p>
                <p class="date"><?php echo date("Y");?>  </p>
                <a href="Choix.php" class="start">Start</a>
        </section>
        </main>
        <?php include ('components/footer.php'); ?>
        
    </body>
</html>