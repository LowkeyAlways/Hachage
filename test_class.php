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
            <div>
                <h2>TEST</h2>
            </div>
            <?php
            //inclusion
            include_once "./src/first_class.php";
            ?>
        </main>
</body>
</html>