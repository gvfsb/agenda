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

      public function findBy($id){

        $stmt = $this->conn->prepare("SELECT * FROM contacts WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

        return $contact;

      }

      public function update($id, $name, $phone, $observations){

        $stmt = $this->conn->prepare("UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        $stmt->execute();

      }

      public function delete($id){

        $stmt = $this->conn->prepare("DELETE FROM contacts WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

      } 
    }
