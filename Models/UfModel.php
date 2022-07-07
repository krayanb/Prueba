<?php 

	class UfModel extends Mysql
	{
		public $intId;
		public $strFecha;
		public $strValor;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectUf()
		{
			//EXTRAE ROLES SELECT DATE_FORMAT(fecha,'%d %m %Y') FROM `uf`;
			//$sql = "SELECT id,DATE_FORMAT(fecha,'%d-%m-%Y'),valor FROM uf";
			$sql = "SELECT * FROM uf";
			$request = $this->select_all($sql);
			return $request;
		}

		public function select_Uf(int $id)
		{
			//BUSCAR ROLE
			$this->intId = $id;
			$sql = "SELECT * FROM uf WHERE id = $this->intId";
			$request = $this->select($sql);
			return $request;
		}

		public function insertUf(string $fecha, string $valor){

			$return = "";
			$this->strFecha = $fecha;
			$this->strValor = $valor;

			if(empty($request))
			{
				$query_insert  = "INSERT INTO uf(fecha,valor) VALUES(?,?)";
	        	$arrData = array($this->strFecha, $this->strValor);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "no se pudo registrar";
			}
			return $return;
		}	

		public function updateUf(int $id,string $fecha, string $valor){
			$this->intId = $id;
			$this->strFecha = $fecha;
			$this->strValor = $valor;

			if(empty($request))
			{
				$sql = "UPDATE uf SET fecha = ?, valor = ? WHERE id = $this->intId ";
				$arrData = array($this->strFecha, $this->strValor);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "No se pudo actualizar";
			}
		    return $request;			
		}

		public function deleteUf(int $id)
		{
			$this->intId = $id;
				$sql = "DELETE FROM uf WHERE id = $this->intId";
				$request = $this->delete($sql);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			return $request;
		}
	}
 ?>