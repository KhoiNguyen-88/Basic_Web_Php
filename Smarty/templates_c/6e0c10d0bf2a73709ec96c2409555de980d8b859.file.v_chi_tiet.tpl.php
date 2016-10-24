<?php /* Smarty version Smarty-3.1.14, created on 2014-11-30 08:44:16
         compiled from "views\v_chi_tiet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23444547ad8e0c33948-85350342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0c10d0bf2a73709ec96c2409555de980d8b859' => 
    array (
      0 => 'views\\v_chi_tiet.tpl',
      1 => 1417336869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23444547ad8e0c33948-85350342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thongtin' => 0,
    'san_pham' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547ad8e0d7ba39_77665353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ad8e0d7ba39_77665353')) {function content_547ad8e0d7ba39_77665353($_smarty_tpl) {?>       
<h2><?php echo $_smarty_tpl->tpl_vars['thongtin']->value;?>
</h2>
		
      
        <div class="product_box" style="height:250px">
        
        <img src="public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="image" width="162px" height="125px" />
        <p></p>
        <div class="price">Giá:<span><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
 đ</span></div>
        <div class="buynow"><a href="shoppingcard.html">Mua</a></div>
        <a href="chi_tiet.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
">Chi Tiết</a> 		</div>
   <div class="cleaner_with_height">&nbsp;</div>
  <div style="clear:both"></div> 
>  

<?php }} ?>