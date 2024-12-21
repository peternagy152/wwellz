<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:44:28
  from '/home/wwellzc1/public_html/modules/ph_instagram/views/templates/hook/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765bb0cbc5058_63934440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4efc24f8638ac3d3b43277ef1f4d1fd6e44bd666' => 
    array (
      0 => '/home/wwellzc1/public_html/modules/ph_instagram/views/templates/hook/head.tpl',
      1 => 1690618472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765bb0cbc5058_63934440 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var PH_INSTA_LINK_AJAX = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkAjaxFront']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var PH_INSTA_TOKEN = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tokenFront']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkFancybox']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" defer="defer"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['jsFront']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" defer="defer"><?php echo '</script'; ?>
><?php }
}
