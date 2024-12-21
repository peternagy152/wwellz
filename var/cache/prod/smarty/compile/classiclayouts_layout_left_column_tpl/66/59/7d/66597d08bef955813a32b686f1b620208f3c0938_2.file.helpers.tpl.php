<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:44:32
  from '/home/wwellzc1/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765bb103599f0_43434760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66597d08bef955813a32b686f1b620208f3c0938' => 
    array (
      0 => '/home/wwellzc1/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1697838846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765bb103599f0_43434760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/wwellzc1/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/66/59/7d/66597d08bef955813a32b686f1b620208f3c0938_2.file.helpers.tpl.php',
    'uid' => '66597d08bef955813a32b686f1b620208f3c0938',
    'call_name' => 'smarty_template_function_renderLogo_1853154906765bb103561c6_36769577',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1853154906765bb103561c6_36769577 */
if (!function_exists('smarty_template_function_renderLogo_1853154906765bb103561c6_36769577')) {
function smarty_template_function_renderLogo_1853154906765bb103561c6_36769577(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1853154906765bb103561c6_36769577 */
}
