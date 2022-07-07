<?php 

	class Unidad extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Unidad()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Grafico Unidad";
			$data['page_name'] = "Comparativa";
			$data['page_title'] = "Valores de la <small> UF</small>";
			$this->views->getView($this,"unidad",$data);
		}
    }
?>