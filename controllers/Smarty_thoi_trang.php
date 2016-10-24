<?php
include_once("Smarty/libs/Smarty.class.php");

class Smarty_thoi_trang extends Smarty
{
	public function Smarty_thoi_trang()
	{
		parent::__construct();	
		$this->config_dir="Smarty/configs/";
		$this->cache_dir="Smarty/cache/";
		$this->template_dir="Smarty/templates/";
		$this->compile_dir="Smarty/templates_c/";
		include_once("models/m_loai_san_pham.php");
		$M_loai_san_pham=new M_loai_san_pham();
		$this->assign("ds_loai_sp",$M_loai_san_pham->lay_loai_san_pham());
		
	}
}

?>