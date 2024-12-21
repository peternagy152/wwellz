<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:58:44
  from '/home/wwellzc1/public_html/modules/ets_hotdeals/views/templates/hook/renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765be64ce7fc4_35472922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a07953f595d73b003df7e06f49a30d454ff6a99' => 
    array (
      0 => '/home/wwellzc1/public_html/modules/ets_hotdeals/views/templates/hook/renderJs.tpl',
      1 => 1676639152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765be64ce7fc4_35472922 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var day = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'day','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
    var hr = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hour','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
    var min = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'min','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
    var sec = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sec','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
    var days = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
    var hrs = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hrs','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
    var mins = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'mins','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
    var secs = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'secs','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
><?php }
}
