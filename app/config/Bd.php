<?php 

	namespace App\Config;

	use PDO;
	use PDOException;

	define('DB_NAME', 'agenda');
	define('DB_HOST', 'localhost');
	define('DB_PORT', '3306');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	class Bd extends PDO{

		private $conn;
  
		public function __construct()
		{					
			try{
				$this->conn = new PDO("mysql:dbname=". DB_NAME .";host=;" . DB_HOST . "port=" . DB_PORT , DB_USER, DB_PASS);

				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $error){
				echo "Erro na conexão com o banco de dados: " . $error->getMessage();
			}

		return $this->conn;

		}
  
		public function create($data){
		  
			$stmt = $this->conn->prepare("INSERT INTO contacts(name_user, data_user, observations) VALUES(:name, :phone, :observations)");
	
			$stmt->bindParam(":name", $data["name_user"]);
			$stmt->bindParam(":phone", $data["data_user"]);
			$stmt->bindParam(":observations", $data["observations"]);
	
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
  
		public function update($id, $data){

			$stmt = $this->conn->prepare("UPDATE contacts SET name_user = :name, data_user = :phone, observations = :observations WHERE id = :id");
	
			$stmt->bindParam(":id", $id);
			$stmt->bindParam(":name", $data["name_user"]);
			$stmt->bindParam(":phone", $data["data_user"]);
			$stmt->bindParam(":observations", $data["observations"]);
	
			$stmt->execute();
  
		}
  
		public function delete($id){
  
			$stmt = $this->conn->prepare("DELETE FROM contacts WHERE id = :id");
	
			$stmt->bindParam(":id", $id);
	
			$stmt->execute();
	
		} 
	  }
?>