<?php

class Database_connect{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $charset;
        public function conn(){
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "github";
            $this->charset ="utf8mb4";
            try{
                $dsn ="mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
                $pdo = new PDO($dsn,$this->username,$this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(PDOException $e){
                echo "Connection failed: ". $e->getMessage();
            }
        }
}


class Userr extends Database_connect{

   
       
        public function check_existence($username,$password){
                $stmt = $this->conn()->query("SELECT * FROM userr WHERE username = '$username' and passwordd = '$password'");
                if($stmt->fetchColumn()>0){
                //     $this->valid= "<p style='color : red'>Client already exist !!</p>";
                    return FALSE;
                }else{
                    return TRUE;
                }
            }

          


}



?>
