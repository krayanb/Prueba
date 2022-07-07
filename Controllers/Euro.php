<?php 

	class Euro extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Euro()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Grafico Euros";
			$data['page_name'] = "Comparativa";
			$data['page_title'] = "Valores del <small>Euro</small>";
			$this->views->getView($this,"euro",$data);
		}
    }
?>