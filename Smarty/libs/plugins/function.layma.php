<?php
function smarty_function_layma($str,&$smarty)
{
    $arr=explode('-',$str['noi_dung']);
    $arr=$arr[count($arr)-1];
    return $arr;                        	
}
?>