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

        public function insertDb() {
            $this->connectDb();

            $sqlRequestusers = ("SELECT * FROM chien");
            $pdoStatusers = $this->db -> prepare($sqlRequestusers);
            $pdoStatusers->execute();
            
            $resultusers = $pdoStatusers->fetchAll(PDO::FETCH_ASSOC);

            return $resultusers;
        }
    }