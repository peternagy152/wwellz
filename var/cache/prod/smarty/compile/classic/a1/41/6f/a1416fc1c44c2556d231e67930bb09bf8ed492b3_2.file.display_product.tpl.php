<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:58:45
  from '/home/wwellzc1/public_html/modules/ets_hotdeals/views/templates/hook/display_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765be650db210_77332387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1416fc1c44c2556d231e67930bb09bf8ed492b3' => 
    array (
      0 => '/home/wwellzc1/public_html/modules/ets_hotdeals/views/templates/hook/display_product.tpl',
      1 => 1676639152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ets_hotdeals/views/templates/hook/_product.tpl' => 1,
  ),
),false)) {
function content_6765be650db210_77332387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('i', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_list']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19522690366765be650ccc53_43657379', 'product_miniature');
?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="clearfix"></div>
<?php if ($_smarty_tpl->tpl_vars['i']->value > 0) {?>
    <div class="ybc_countdown">
        <div id="ets_hotdeals" class="<?php if ((isset($_smarty_tpl->tpl_vars['ets_hotdeals_display_type']->value)) && $_smarty_tpl->tpl_vars['ets_hotdeals_display_type']->value) {?> ets_hotdeal_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_display_type']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
            <h3 class="h1 products-section-title text-uppercase">
                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            </h3>
            <div class="ets-product-specific products<?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_desktop']->value > $_smarty_tpl->tpl_vars['i']->value) {?> hidden_nav_des<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tabletlarge']->value > $_smarty_tpl->tpl_vars['i']->value) {?> hidden_nav_tablarge<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tablet']->value > $_smarty_tpl->tpl_vars['i']->value) {?> hidden_nav_tablet<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_mobile']->value > $_smarty_tpl->tpl_vars['i']->value) {?> hidden_nav_mobile<?php }?> row" data-desktop="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_desktop']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-tablet-horz="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tabletlarge']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-tablet="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tablet']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-mobile="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_mobile']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-speed="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_speed']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-play="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_auto_play_slider']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-stop="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_hotdeals_stop_hover']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
                <?php $_smarty_tpl->_assignInScope('ets_item_desktop', intval(12/$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_desktop']->value));?>
                <?php $_smarty_tpl->_assignInScope('ets_item_tabletlarge', intval(12/$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tabletlarge']->value));?>
                <?php $_smarty_tpl->_assignInScope('ets_item_tablet', intval(12/$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tablet']->value));?>
                <?php $_smarty_tpl->_assignInScope('ets_item_mobile', intval(12/$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_mobile']->value));?>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_list']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3474825396765be650d9604_31087668', 'product_miniature');
?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }
}
/* {block 'product_miniature'} */
class Block_19522690366765be650ccc53_43657379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_19522690366765be650ccc53_43657379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_miniature'} */
class Block_3474825396765be650d9604_31087668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_3474825396765be650d9604_31087668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:modules/ets_hotdeals/views/templates/hook/_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'key'=>$_smarty_tpl->tpl_vars['key']->value), 0, true);
?>
                    <?php
}
}
/* {/block 'product_miniature'} */
}
