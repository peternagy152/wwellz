<?php
/* Smarty version 4.3.4, created on 2024-12-20 21:06:02
  from '/home/wwellzc1/public_html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765c01acd29c8_61367726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc2974380cf4dab52e1edceb8ef593b48f8bd645' => 
    array (
      0 => '/home/wwellzc1/public_html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account.tpl',
      1 => 1697838846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765c01acd29c8_61367726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="emailsalerts"
   href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
  <span class="link-item">
  <i class="material-icons">&#xE151;</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </span>
</a>
<?php }
}
