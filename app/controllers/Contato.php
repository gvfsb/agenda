<?php

  namespace App\Controllers;

  use PDO;

  class Contato{

      private $conn;
      private $id;
      private string $name;
      private $phone;
      private $observations;

      public function __construct(PDO $conn){
        $this->conn = $conn;
      }

      public function create($contact){
        
        $stmt = $this->conn->prepare("INSERT INTO contacts(name_user, data_user, observations) VALUES(:name, :phone, :observations)");

        $stmt->bindParam(":name", $contact->getName());
        $stmt->bindParam(":phone", $contact->getPhone());
        $stmt->bindParam(":observations", $contact->getObservations());

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

      public function update(){

        $stmt = $this->conn->prepare("UPDATE contacts SET name_user = :name, data_user = :phone, observations = :observations WHERE id = :id");

        $stmt->bindParam(":id", $this->getId());
        $stmt->bindParam(":name", $this->getName());
        $stmt->bindParam(":phone", $this->getPhone());
        $stmt->bindParam(":observations", $this->getObservations());

        $stmt->execute();

      }

      public function delete(){

        $stmt = $this->conn->prepare("DELETE FROM contacts WHERE id = :id");

        $stmt->bindParam(":id", $this->getId());

        $stmt->execute();

      } 

      public function setId($id){
        $this->id = $id;
      }

      public function getId(){
        return $this->id;
      }

      public function setName(string $name){
        $this->name = $name;
      }

      public function getName(){
        return $this->name;
      }

      public function setPhone($phone){
        $this->phone = $phone;
      }

      public function getPhone(){
        return $this->phone;
      }

      public function setObservations($observations){
        $this->observations = $observations;
      }

      public function getObservations(){
        return $this->observations;
      }

    }
