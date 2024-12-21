<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:46:17
  from '/home/wwellzc1/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765bb79967904_28038762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52536c1d585fdb9e86d0e1a370cce3027d805d81' => 
    array (
      0 => '/home/wwellzc1/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1697838846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765bb79967904_28038762 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
