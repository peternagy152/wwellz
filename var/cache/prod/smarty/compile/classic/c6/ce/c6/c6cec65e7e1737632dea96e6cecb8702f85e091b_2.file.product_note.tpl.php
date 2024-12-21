<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:46:17
  from '/home/wwellzc1/public_html/modules/ets_productnote/views/templates/hook/product_note.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765bb79978e09_31203772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6cec65e7e1737632dea96e6cecb8702f85e091b' => 
    array (
      0 => '/home/wwellzc1/public_html/modules/ets_productnote/views/templates/hook/product_note.tpl',
      1 => 1676475526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6765bb79978e09_31203772 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product_notes']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_notes']->value, 'product_note');
$_smarty_tpl->tpl_vars['product_note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_note']->value) {
$_smarty_tpl->tpl_vars['product_note']->do_else = false;
?>
        <div class="ets_pn_block" style="<?php if ($_smarty_tpl->tpl_vars['product_note']->value['text_color']) {?> color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_note']->value['text_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product_note']->value['background_color']) {?> background:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_note']->value['background_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product_note']->value['border_color']) {?>border:1px solid <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_note']->value['border_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product_note']->value['box_padding']) {?> padding:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_note']->value['box_padding'] )), ENT_QUOTES, 'UTF-8');?>
px;<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product_note']->value['shadown_size'] && $_smarty_tpl->tpl_vars['product_note']->value['shadown_size'] > 0) {?>
            <?php if ($_smarty_tpl->tpl_vars['product_note']->value['shadown_size'] > 2) {?>
                    box-shadow: 2px 2px <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_note']->value['shadown_size'] )), ENT_QUOTES, 'UTF-8');?>
px 0px rgba(0, 0, 0, 0.2);
            <?php } else { ?>
                    box-shadow: 0px 0px <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_note']->value['shadown_size'] )), ENT_QUOTES, 'UTF-8');?>
px 0px rgba(0, 0, 0, 0.2);
            <?php }?>
        <?php }?>
        ">
            <?php echo $_smarty_tpl->tpl_vars['product_note']->value['note'];?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
