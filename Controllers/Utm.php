<?php 

	class Utm extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Utm()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Grafico UTM";
			$data['page_name'] = "Comparativa";
			$data['page_title'] = "Valores de la <small> UTM </small>";
			$this->views->getView($this,"utm",$data);
		}
    }
?>