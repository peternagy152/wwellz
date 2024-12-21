<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:44:28
  from '/home/wwellzc1/public_html/modules/ets_searchbycategory/views/templates/hook/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765bb0cbbdee6_24510107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adf9211940b499dfaa46aeb6108f2652f52f6c13' => 
    array (
      0 => '/home/wwellzc1/public_html/modules/ets_searchbycategory/views/templates/hook/head.tpl',
      1 => 1676636460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765bb0cbbdee6_24510107 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>

    <?php if ((isset($_smarty_tpl->tpl_vars['ETS_DISPLAY_PRICE']->value)) && (isset($_smarty_tpl->tpl_vars['ETS_DISPLAY_RATING']->value))) {?>
    .sbc-product-price {
        display:<?php if ($_smarty_tpl->tpl_vars['ETS_DISPLAY_PRICE']->value) {
} else { ?>none !important<?php }?>;
    }
    .sbc-item-wrapper .product-list-reviews{
    display:<?php if ($_smarty_tpl->tpl_vars['ETS_DISPLAY_RATING']->value) {
} else { ?>none !important<?php }?>;
    }
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_COLOR']->value))) {?>
    #search_block_top .button-search, .sbc_show_more.ac_over,
    .searched_category option:hover
    {
        background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR']->value))) {?>
    #search_block_top .button-search:hover,.sbc_show_more:hover {
        background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    <?php }?>
</style><?php }
}
