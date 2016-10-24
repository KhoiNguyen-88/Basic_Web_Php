<?php /* Smarty version Smarty-3.1.14, created on 2014-11-30 08:43:06
         compiled from "views\v_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4295547ac96f03d846-52113435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40fcdfd0a43da8dbe5ccf7c696e0286a27f4bfc6' => 
    array (
      0 => 'views\\v_san_pham.tpl',
      1 => 1417336757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4295547ac96f03d846-52113435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547ac96f0452c2_33395604',
  'variables' => 
  array (
    'thongtin' => 0,
    'ds_san_pham' => 0,
    'san_pham' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ac96f0452c2_33395604')) {function content_547ac96f0452c2_33395604($_smarty_tpl) {?>       
<h2><?php echo $_smarty_tpl->tpl_vars['thongtin']->value;?>
</h2>
		
 <?php  $_smarty_tpl->tpl_vars['san_pham'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['san_pham']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->key => $_smarty_tpl->tpl_vars['san_pham']->value){
$_smarty_tpl->tpl_vars['san_pham']->_loop = true;
?>       
        <div class="product_box" style="height:250px">
        
        <img src="public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="image" width="162px" height="125px" />
        <p></p>
        <div class="price">Giá:<span><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
 đ</span></div>
        <div class="buynow"><a href="shoppingcard.html">Mua</a></div>
        <a href="chi_tiet.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
">Chi Tiết</a> 		</div>
   <?php } ?>  
   <div class="cleaner_with_height">&nbsp;</div>
  <div style="clear:both"></div> 
<div align="center">
<?php if (isset($_smarty_tpl->tpl_vars['lst']->value)){?> <?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
<?php }?>
</div>  

<?php }} ?>