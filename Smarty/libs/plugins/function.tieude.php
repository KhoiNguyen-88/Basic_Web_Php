<?php
function smarty_function_tieude($str,&$smarty)
{
    $arr=explode(' ',$str['noi_dung']);
    $chuoi='';
    if(count($arr)>=12)
    {
      for($j=0;$j<11;$j++)
      {
        $chuoi.=' ' . $arr[$j];
      }
    }
    else
        $chuoi=$str['noi_dung'];
    
    if(strlen($chuoi)<20)
        $chuoi .='<br/>';
    return $chuoi;                        	
}
?>