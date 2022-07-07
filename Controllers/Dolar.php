<?php 

	class Dolar extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Dolar()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Grafico Dolar";
			$data['page_name'] = "Comparativa";
			$data['page_title'] = "Valores del <small>Dolar</small>";
			$this->views->getView($this,"dolar",$data);
		}
    }
?>