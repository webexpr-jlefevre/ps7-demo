<?php
/* Smarty version 3.1.39, created on 2021-05-12 10:09:14
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609b8d2a79d4c2_55904035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1620803458,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609b8d2a79d4c2_55904035 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\laragon\www\ps7-demo/themes/blck/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div>
  <div class="blockcart cart-preview header__rightitem <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="shopping-cart">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="u-link-body">
      <?php }?>
        <span><i class="material-icons blockcart__icon">shopping_cart</i></span>
        <span class="visible--desktop blockcart__label small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <span class="cart-products-count small blockcart__count">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<!-- end C:\laragon\www\ps7-demo/themes/blck/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}
