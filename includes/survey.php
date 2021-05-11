<?php
include_once 'db.php';

    class Survey extends DB{
        
        private $totalVotes;
        private $optionSelected;
        
        public function setOptionSelected($option){
            $this->optionSelected = $option;
        }

        public function getOptionSelected(){
            return $this->optionSelected;
        }

        public function vote(){
            $query = $this->connect()->prepare('UPDATE lenguajes SET votos = votos + 1 WHERE opcion = :opcion');
            $query->execute(['opcion'=>$this->optionSelected]);
        }
        
        public function cantidadVote(){
            $query = $this->connect()->prepare('SELECT votos FROM lenguajes *');
        }
    }
?>