<?php
class User1{
    private $nom;
    private $prenom;
        function __construct(string $nom, string $prenom){
            $this->nom = $nom;
            $this->prenom = $prenom;
            print "Je suis le constructeur<br>";
        }
        public function getOut(){
            return "Hello ".$this->nom." ".$this->prenom."!!!";
        }
    }
    $print_out = new User1("Rasmus","Ledorf");
    //print $print_out;
    $affiche = $print_out->getOut();
    print $affiche;
    
?>