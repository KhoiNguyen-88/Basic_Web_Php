<?php
include_once("Smarty_thoi_trang.php");
include_once("models/m_san_pham.php");
include_once("models/m_loai_san_pham.php");
include_once("Pager.php");
class C_san_pham
{
	public function hien_thi_san_pham()
	{	
		$flag=0;
		if(isset($_GET["ma_loai"]))
		{
			$ma_loai=$_GET['ma_loai'];
			$m_loai_san_pham= new M_loai_san_pham();
			$hang=$m_loai_san_pham->ten_loai($ma_loai);
			
			$title="San Pham Theo ma loại";
			$thongtin="San Pham: " . $hang->ten_loai;
			$m_san_pham=new M_san_pham();
			$ds_san_pham=$m_san_pham->lay_sp_theo_ma_loai($ma_loai);	
		}
		elseif(isset($_GET["keyword"]))
		{
			$keyword=$_GET["keyword"];
			
			$title="Tìm kiếm";
			$thongtin="Sản phẩm: " .$keyword;
			$m_san_pham=new M_san_pham();
			$ds_san_pham=$m_san_pham->timkiem($keyword);
		}
		else{
			// Models
			$m_san_pham=new M_san_pham();
			$ds_san_pham=$m_san_pham->danh_sach_san_pham();
			// Phan trang
			$page=new pager();
			$tong=count($ds_san_pham);
			$limit=6;
			$vt=$page->findStart($limit);
			$tongPage=$page->findPages($tong,$limit);
			$lst=$page->pageList($_GET["page"],$tongPage);
			$ds_san_pham=$m_san_pham->danh_sach_san_pham_phan_trang($vt,$limit);
			
			$title="San Pham";
			$thongtin="Thời trang";
			$flag=1;
		}
		// Views
		$smarty =new Smarty_thoi_trang();
		$smarty->assign("title",$title);
		$smarty->assign("thongtin",$thongtin);
		$smarty->assign("ds_san_pham",$ds_san_pham);
		if($flag==1)
		$smarty->assign("lst",$lst);
		$smarty->assign("view","views/v_san_pham.tpl");
		$smarty->display("layout.tpl");	
	}
	public function hien_thi_chi_tiet_san_pham()
	{
		// Models
		$ma_san_pham=$_GET["ma_san_pham"];
		$m_san_pham=new M_san_pham();
		$san_pham=$m_san_pham->san_pham_theo_ma($ma_san_pham);
		$title="Chi tiết san pham";
		$thongtin="Chi tiết san pham";
		
		$smarty =new Smarty_thoi_trang();
		$smarty->assign("title",$title);
		$smarty->assign("thongtin",$thongtin);
		$smarty->assign("san_pham",$san_pham);
		$smarty->assign("view","views/v_chi_tiet.tpl");
		$smarty->display("layout.tpl");	
	}
	function hienthitimkiem()
	{
		$smarty=new Smarty_sanpham();
		if(!isset($_GET["keyword"]))
		{
			$smarty->assign("title","");
			//$smarty->assign("views","views/mon_an/v_timkiem.tpl");
			//$smarty->display("mon_an/layout_mon_an.tpl");
		}
		else
		{
			$keyword = $_GET["keyword"];
			//echo $keyword;
			$m_san_pham = new M_san_pham();
			$arr_san_pham = $m_san_pham->timkiem($keyword);
			if(count($arr_san_pham)>0)
			{
				$sp= '<table  class="bordered" width="700" border="1" cellpadding="1">
					  <tr>
						<td>hình </td>
						<td>Đơn giá</td>
					  </tr>';
				foreach($arr_san_pham as $ds)
				{
				
					//$mon.= '<td><img src="public/images/hinh_mon_an/'.$ds->hinh.'" width="50px"></td>';
					$sp.= '<td>'.$ds->don_gia.'</td>';
					$sp.= '</tr>';
				}
				$sp.='</table>';
				echo $sp;
			
			}else
			{
				echo "Không tìm thấy ";
			}
		}
	}
}
?>