<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:44:32
  from '/home/wwellzc1/public_html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765bb10653872_36537083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6df69c2a6ca07bef772f37092572c054e9e04b' => 
    array (
      0 => '/home/wwellzc1/public_html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1709563664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765bb10653872_36537083 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {
echo '<script'; ?>
 type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

      });
<?php echo '</script'; ?>
>
<?php }
}
}
