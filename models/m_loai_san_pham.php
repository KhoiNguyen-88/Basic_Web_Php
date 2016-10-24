<?php
	require_once('database.php');
	class M_loai_san_pham extends database
	{
		
		public  function lay_loai_san_pham()
        {
            $query="Select * from loai_san_pham";
        	$this->setQuery($query);
        	return $this->loadAllRows();
        }
		public function ten_loai($ma_loai)
		{
			$query = "Select ten_loai from  loai_san_pham where ma_loai=?";
			$this->setQuery($query);
			return $this->loadRow(array($ma_loai));
		}
		public function san_pham_theo_loai_cha($ma_loai_cha) 
		{
            $query = "SELECT * FROM loai_san_pham WHERE ma_loai_cha =?";
            $this->setQuery($query);
            return $this->loadAllRows(array($ma_loai_cha));
        }

		public function san_pham_theo_ma_loai($ma_loai) 
		{
            $query = "SELECT * FROM loai_san_pham WHERE ma_loai =?";
            $this->setQuery($query);
            return $this->loadAllRows(array($ma_loai));
        }
	}
?>