<?php

  class Contacts{

      private $conn;

      public function __construct(PDO $conn){
        $this->conn = $conn;
      }

      public function create($name, $phone, $observations){
        
        $stmt = $this->conn->prepare("INSERT INTO contacts(name, phone, observations) VALUES(:name, :phone, :observations)");

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        $stmt->execute();

      }

      public function findAll(){

        $stmt = $this->conn->prepare("SELECT * FROM contacts");

        $stmt->execute();

        $contacts = $stmt->fetchAll();

        return $contacts;
      }

      public function update($id, $value){

        $stmt = $this->conn->prepare("");

        $stmt->execute();

      }

      public function delete($id){

        $stmt = $this->conn->prepare("");

        $stmt->execute();

      } 
    }
