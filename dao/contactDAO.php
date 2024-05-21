<?php

  include_once(__DIR__.'/../models/contact.php');

  class ContactDAO{

      private $conn;

      public function __construct(PDO $conn){
        $this->conn = $conn;
      }

      public function create(Contact $contact){
        
        $stmt = $this->conn->prepare("INSERT INTO contacts(name, phone, observations) VALUES(:name, :phone, :observations)");

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

      public function update(Contact $contact){

        $stmt = $this->conn->prepare("UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id");

        $stmt->bindParam(":id", $contact->getId());
        $stmt->bindParam(":name", $contact->getName());
        $stmt->bindParam(":phone", $contact->getPhone());
        $stmt->bindParam(":observations", $contact->getObservations());

        $stmt->execute();

      }

      public function delete(Contact $contact){

        $stmt = $this->conn->prepare("DELETE FROM contacts WHERE id = :id");

        $stmt->bindParam(":id", $contact->getId());

        $stmt->execute();

      } 
    }
