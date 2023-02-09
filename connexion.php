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
        <main>
            <div class="formulaire" role="form" aria-labelledby="inscription">
                
                    <legend>
                    <span aria-hidden="true">
               	
                   &#9998;
               </span>
                        Connexion
                    </legend>
                    <form action="./src/log.inc.php" method="post">
                    
                    <label for="email">E-mail</label><br>
                    <input type="email" id="email" name="mail" placeholder="E-mail" aria-required="true"><br>

                    <label for="email">Mot de passe</label><br>
                    <input type="password" id="password" name="psw" placeholder="Password" aria-required="true"> <br>
    
                    <input type="submit" value="Envoyer">
    
                    </form>
                    
            </div>
            
        </main>
</body>
</html>