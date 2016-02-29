<<<<<<< HEAD
<?php
	class Zips {
		protected $conn;
		
		public function __construct($conn) {
			$this->conn = $conn;
		}
		
		public function search($q) {
			$sql = 'SELECT * FROM zips WHERE zip=? OR primary_city=?';
			$stmt = $this->conn->prepare($sql);
			$success = $stmt->execute(array($q,$q));
			if (!$success) {
				//trigger_error($stmt->errorInfo());
				var_dump($stmt->errorInfo());
				return false;
			} else {
				return $stmt->fetchAll();
			}
			
		}
	}
=======
<?php 
class Zips {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search($q) {
        $sql = 'select * from zips where zip=? or primary_city=?';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q,$q));
        if (!$success) {            
            var_dump($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
}
>>>>>>> 3c8515c4416a5c067735897bd2477625ce122fd5
?>