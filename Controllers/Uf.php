<?php 

	class Uf extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Uf()
		{
			$data['page_id'] = 1;
			$data['page_tag'] = "UF";
			$data['page_name'] = "Valor de UF";
			$data['page_title'] = "Valores de la <small> UF</small>";
			$this->views->getView($this,"uf",$data);
		}

		public function get_Uf()
		{
			$arrData = $this->model->selectUf();

			for ($i=0; $i < count($arrData); $i++) {

				

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-primary btn-sm btnEdit" rl="'.$arrData[$i]['id'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDel" rl="'.$arrData[$i]['id'].'" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function getUf(int $id)
		{
			$intId = intval(strClean($id));
			if($intId > 0)
			{
				$arrData = $this->model->select_Uf($intId);
				if(empty($arrData))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	public function setUf(){
			
			$intId = intval($_POST['id']);
			$strFecha =  strClean($_POST['txtFecha']);
			$strValor = strClean($_POST['txtValor']);
			
			if($intId == 0)
			{
				//Crear
				$request_uf = $this->model->insertUf($strFecha, $strValor);
				$option = 1;
			}else{
				//Actualizar
				$request_uf = $this->model->updateUf($intId, $strFecha, $strValor);
				$option = 2;
			}

			if($request_uf > 0 )
			{
				if($option == 1)
				{
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				}else{
					$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
				}
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function delUf()
		{
			if($_POST){
				$intId = intval($_POST['id']);
				$requestDelete = $this->model->deleteUf($intId);
				if($requestDelete == 'ok')
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado ');
				}else { 					
                    $arrResponse = array('status' => false, 'msg' => 'Error al eliminar.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
 ?>