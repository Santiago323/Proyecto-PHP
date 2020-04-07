<?php
  class ControlUsuario{
    
    var $objUsuario;
    
    //Constructor
    function __construct($objUsuario){
      $this->objUsuario = $objUsuario;
    }

    function  validarIngreso(){
      $esValido=false;
      $objUsuario1 = new Usuario('','','');
			$usu = $this->objUsuario->getUsuario();
      $con = $this->objUsuario->getContrasena();
      $objConexion = new ControlConexion();

      //
      
			try{
				$objConexion->abrirBd($GLOBALS['serv'],$GLOBALS['usua'],$GLOBALS['pass'],$GLOBALS['bdat']);
				$comandoSql = "SELECT * FROM USUARIO  WHERE NOMBRE='".$usu."' AND CONTRASENA='".$con."'";
        $recordSet=$objConexion->ejecutarSelect($comandoSql);
        
        $registro = $recordSet->fetch_array(MYSQLI_BOTH);
				$objUsuario1->setUsuario($registro['nombre']);
        $objUsuario1->setContrasena($registro['contrasena']);
      } catch (Exception $e) {
          echo "ERROR ".$e->getMessage()."\n";
      }
            
      $objConexion->cerrarBd();

      if ($this->objUsuario->getUsuario() == $objUsuario1->getUsuario() &&
               $this->objUsuario->getContrasena()==$objUsuario1->getContrasena()  &&
               $this->objUsuario->getUsuario() != "" &&
               $this->objUsuario->getContrasena() != "")
			{
              $esValido = true;
            }
            else
            {
              $esValido = false;
            }
      return $esValido;
      }
 }
?>