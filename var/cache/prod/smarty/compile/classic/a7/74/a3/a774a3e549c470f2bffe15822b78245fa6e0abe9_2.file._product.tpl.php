<?php
/* Smarty version 4.3.4, created on 2024-12-20 20:58:45
  from '/home/wwellzc1/public_html/modules/ets_hotdeals/views/templates/hook/_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6765be65108783_74522554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a774a3e549c470f2bffe15822b78245fa6e0abe9' => 
    array (
      0 => '/home/wwellzc1/public_html/modules/ets_hotdeals/views/templates/hook/_product.tpl',
      1 => 1676639152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6765be65108783_74522554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18838717466765be650e1171_98738282', 'product_miniature_item');
?>

<?php }
/* {block 'product_flags'} */
class Block_19919258736765be650ec166_07463028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul class="product-flags">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'discount' && !$_smarty_tpl->tpl_vars['ets_hotdeals_display_discounted_amount']->value) {?>
                        <?php continue 1;?>
                    <?php }?>
                  <li class="product-flag <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['flag']->value['type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['flag']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php
}
}
/* {/block 'product_flags'} */
/* {block 'quick_view'} */
class Block_8509455696765be650f0fa5_32438053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <a class="quick-view" href="#" data-link-action="quickview">
                        <i class="material-icons search">&#xE8B6;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>

                    </a>
                <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_variants'} */
class Block_17070001756765be650f1d94_47379218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                    <?php }?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_thumbnail'} */
class Block_17849555346765be650e7665_87610712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product_special_img thumbnail-top">
            <a href="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['link']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" class="thumbnail product-thumbnail">
                <img src ="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link_image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
            </a>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19919258736765be650ec166_07463028', 'product_flags', $this->tplIndex);
?>

            <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8509455696765be650f0fa5_32438053', 'quick_view', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17070001756765be650f1d94_47379218', 'product_variants', $this->tplIndex);
?>

            </div>
        </div>
      <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_2272629746765be650f4320_84689107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h3 class="h3 product-title" itemprop="name">
              <a href="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['link']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 
                <?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_display_product_attribute']->value) {?> 
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product_attribute']['attributes']))) {?>
                        <span class="product-title-attribute">
                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['product_attribute']['attributes'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                        </span>
                    <?php }?>
                <?php }?>
              </a>
          </h3>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_9485554086765be650fa2f1_20157893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                <div class="product-price-and-shipping">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

    
                    <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
</span>
                    <span class="regular-price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['regular_price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php }?>
    
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

    
                  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'ets_hotdeals'),$_smarty_tpl ) );?>
</span>
                  <span itemprop="price" class="price"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
    
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

    
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

              </div>
            <?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_19677802516765be651004f7_94971033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_display_rating']->value) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php }?>
        <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_item'} */
class Block_18838717466765be650e1171_98738282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_18838717466765be650e1171_98738282',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_17849555346765be650e7665_87610712',
  ),
  'product_flags' => 
  array (
    0 => 'Block_19919258736765be650ec166_07463028',
  ),
  'quick_view' => 
  array (
    0 => 'Block_8509455696765be650f0fa5_32438053',
  ),
  'product_variants' => 
  array (
    0 => 'Block_17070001756765be650f1d94_47379218',
  ),
  'product_name' => 
  array (
    0 => 'Block_2272629746765be650f4320_84689107',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_9485554086765be650fa2f1_20157893',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_19677802516765be651004f7_94971033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature<?php if ($_smarty_tpl->tpl_vars['key']->value%$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_desktop']->value == 0) {?> desktop_first_line<?php }
if ($_smarty_tpl->tpl_vars['key']->value%$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tablet']->value == 0) {?> tablet_first_line<?php }
if ($_smarty_tpl->tpl_vars['key']->value%$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_tabletlarge']->value == 0) {?> tableth_first_line<?php }
if ($_smarty_tpl->tpl_vars['key']->value%$_smarty_tpl->tpl_vars['ets_hotdeals_product_per_row_mobile']->value == 0) {?> mobile_first_line<?php }
if ((isset($_smarty_tpl->tpl_vars['ets_hotdeals_display_type']->value)) && $_smarty_tpl->tpl_vars['ets_hotdeals_display_type']->value) {?> col-lg-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_item_desktop']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_item_tabletlarge']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_item_tablet']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_item_mobile']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17849555346765be650e7665_87610712', 'product_thumbnail', $this->tplIndex);
?>

      <div class="product-infomation-content">
      <div class="product-description">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2272629746765be650f4320_84689107', 'product_name', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9485554086765be650fa2f1_20157893', 'product_price_and_shipping', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19677802516765be651004f7_94971033', 'product_reviews', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_display_description']->value) {?>
              <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['description_short'])) && $_smarty_tpl->tpl_vars['product']->value['description_short'] != '') {?>
                <div class="short_description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],90,'...' ));?>
</div>
              <?php } else { ?>
                <div class="short_description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],90,'...' ));?>
</div>
              <?php }?>
        <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['ets_hotdeals_display_countdown_clock']->value && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {?>
            
            <div id="ets_clock_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" data-date-to="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ets_clock"></div>
          <?php }?>
      </div>

        </div>
    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
