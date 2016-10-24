<?php
	require_once('database.php');
	class M_san_pham extends database
	{
	    public function danh_sach_san_pham()
		{
			$query="Select * from san_pham where san_pham_moi=1";
			$this->setQuery($query);
			return $this->loadAllRows();
		}

		public function danh_sach_san_pham_phan_trang($vt,$limit)
		{
			$query="SELECT * from san_pham where san_pham_moi=1 limit $vt,$limit";
			$this->setQuery($query);
			return $this->loadAllRows();
		}
		
		public function san_pham_theo_ma($ma_san_pham)
		{
			$query="Select * from san_pham where ma_san_pham=?";
			$this->setQuery($query);
			return $this->loadRow(array($ma_san_pham));
		}
		
		
		//loai sp
		public function lay_sp_theo_ma_loai($key)
		{
			$query = "Select * from san_pham where ma_loai =?";
			$this->setQuery($query);
			return $this->loadAllRows(array($key));
		}
		
		
		//
		public function timkiem($keyword)
		{
			/*$query = "Select * from sua where Ten_sua like '%$keyword%'";
        $this->setQuery($query);
        return $this->loadAllRows();*/
			$patterns = array('/\s+/');
			$replace = array('');
			$keyword = preg_replace($patterns, $replace, $keyword);	
			if($keyword!="")
			{
				$sql="select * from san_pham where ten_san_pham like '%$keyword%' ";
			}else
			{
				$sql="select * from san_pham where ten_san_pham=''";
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
	}
?>