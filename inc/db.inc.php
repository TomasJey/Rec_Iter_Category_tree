<?php
	//Best to hide this file behind www. folder.
    class dbconn_e {

		private $dbhost = "localhost"; 
		private $dbuser = "root"; 
		private $dbpass = "";
		private $dbname = "cat_db_t";
		private $charset = "utf8mb4";
      
		public function connect_db() {
			try {
				$dsn = "mysql:host=".$this->dbhost.";dbname=".$this->dbname.";charset=".$this->charset;
				$pdo = new PDO($dsn,$this->dbuser,$this->dbpass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $pdo;
			} catch (PDOException $e) {
				echo "Connection failled: ".$e->getMessage();
			}
			return;
		}

		public function getCatArray() {
			$statm = $this->connect_db()->prepare("SELECT * FROM categories ORDER BY pid"); 
			$statm->execute();
			$row = $statm->fetchAll();
			
			$parr = array();
			foreach($row as $key => $el) {
				$parr[] = array('id' => $el['id'], 'name' => $el['name'], 'parent' => $el['pid']); // put everything into a clean array.				
			}
			
		return $parr;	
		}
	}
	
	class categoryIn extends dbconn_e {
		 
		public $catpid;
		public $catname;
		
		public function categoryAdd() {
			$pid = $this->catpid;
			$name = $this->catname;
			
			$st = $this->connect_db()->prepare("INSERT INTO categories (pid, name) VALUES (:pid, :name)"); 
			$st->bindParam(':pid', $pid);
			$st->bindParam(':name', $name); 
			$st->execute();
			
		}
	}
	
?>