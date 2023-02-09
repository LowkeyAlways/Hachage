<?php
    session_start();
    include_once("./src/connect_bdd.inc.php");
?>
<?php 
    include_once "./src/head.inc.php"
?>
<body>
        <header>
            <h1>
                
                Fidelio & Company
            </h1>
        </header>
        <main>
            <div class="formulaire" role="form" aria-labelledby="inscription">
                
                    <legend>
                    <span aria-hidden="true">
               	
                   &#9998;
               </span>
                        Inscription Rapide
                    </legend>
                    <form action="" method="post">
                    
                    <label for="email">E-mail</label><br>
                    <input type="email" id="email" name="mail" placeholder="E-mail" aria-required="true"><br>

                    <label for="email">Mot de passe</label><br>
                    <input type="password" id="password" name="psw" placeholder="Password" aria-required="true"> <br>
    
                    <input type="submit" value="Envoyer">
    
                    </form>
                    
            </div>
            <?php
            //inclusion
            include_once "./src/traitement.inc.php";
            ?>
        </main>
</body>
</html>