<?php
/* Smarty version 4.3.4, created on 2024-12-20 21:05:59
  from '/home/wwellzc1/public_html/themes/classic/templates/customer/password-infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765c01737e0d0_02667841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6fa792925bac3da84ee398e1328d13b5fe65a93' => 
    array (
      0 => '/home/wwellzc1/public_html/themes/classic/templates/customer/password-infos.tpl',
      1 => 1697838846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765c01737e0d0_02667841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13113860336765c01737b119_82952739', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8484358046765c01737bf40_83279915', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7448383666765c01737d3e3_66482214', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_13113860336765c01737b119_82952739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_13113860336765c01737b119_82952739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_8484358046765c01737bf40_83279915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_8484358046765c01737bf40_83279915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul class="ps-alert-success">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['successes']->value, 'success');
$_smarty_tpl->tpl_vars['success']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->do_else = false;
?>
      <li class="item">
        <i>
          <svg viewBox="0 0 24 24">
            <path fill="#fff" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
          </svg>
        </i>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['success']->value, ENT_QUOTES, 'UTF-8');?>
</p>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_7448383666765c01737d3e3_66482214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_7448383666765c01737d3e3_66482214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul>
    <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></li>
  </ul>
<?php
}
}
/* {/block 'page_footer'} */
}
