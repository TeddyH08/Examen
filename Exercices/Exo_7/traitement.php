<?php
    class Chien {
        protected $_nom = "";
        protected $_age = "";
        protected $_race = "";

        public function __construct($nom, $age, $race) {
            $this->_nom = $nom;
            $this->_age = $age;
            $this->_race = $race;
        }

        public function getNom() {
            return $this->_nom;
        }

        public function getAge() {
            return $this->_age;
        }

        public function getRace() {
            return $this->_race;
        }

        public function presentation() {
            echo "Bonjour, je m'appelle ". $this->getNom() .", j'ai ". $this->getAge() ." et je suis un ". $this->getRace();
        }
    }

    $nom = $_POST['name'];
    $age = $_POST['age'];
    $race = $_POST['race'];

    $nom = new Chien($nom, $age, $race);

    $nom->presentation();
    var_dump($nom);

    $nom2 = $_POST['name2'];
    $age2 = $_POST['age2'];
    $race2 = $_POST['race2'];

    $nom2 = new Chien($nom2, $age2, $race2);

    $nom2->presentation();
    var_dump($nom2);

    $nom3 = $_POST['name3'];
    $age3 = $_POST['age3'];
    $race3 = $_POST['race3'];

    $nom3 = new Chien($nom3, $age3, $race3);

    $nom3->presentation();
    var_dump($nom3);
?>

<br>
<br>
<a href="index.php">retour</a>