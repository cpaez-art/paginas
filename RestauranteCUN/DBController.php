<?php
// La clase BDController
class DBController {
	private $hostname = "localhost";
	private $userDB = "root";
	private $passwordDB = "123456";
	private $nombreDB = "autoscun";
	private $conexion;
	
        function __construct() {
        $this->conexion = $this->connectDB();
	}	
	function connectDB() {
		$conexion = mysqli_connect($this->hostname,$this->userDB,$this->passwordDB,$this->nombreDB);
		return $conexion;
	}
        function runQuery($query) {
                $resultado = mysqli_query($this->conexion,$query);
                while($row=mysqli_fetch_assoc($resultado)) {
                $resultset[] = $row;
                }		
                if(!empty($resultset))
                return $resultset;
	}
}
?>