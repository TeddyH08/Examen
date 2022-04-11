<?php
    class Db {
        protected $db;

        public function connectDb() {
            try {
                $this->db = new PDO('mysql:host=db5006773220.hosting-data.io;dbname=dbs5603824;charset=utf8', 'dbu2228182', '5Jx6qdP6',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
    }

    class Chien extends Db {
        protected $_nom = "";
        protected $_age = "";
        protected $_race = "";

        public function __construct($nom, $age, $race) {
            $this->_nom = $nom;
            $this->_age = $age;
            $this->_race = $race;
        }

        public function insertDb() {
            $this->connectDb();

            $sqlRequest = "INSERT INTO `chien` (`nom_chien`, `age_chien`, `race_chien`) 
                        VALUES (?,?,?);";
            $pdoStat = $this->db -> prepare($sqlRequest);
            $pdoStat->execute(array($this->_nom,$this->_age,$this->_race));
            $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);

            return $row;
        }
    }

    $nom = $_POST['name'];
    $age = $_POST['age'];
    $race = $_POST['race'];

    $chien = new Chien($nom, $age, $race);

    $chien->insertDb();

    header('Location: tableau.php')
?>


