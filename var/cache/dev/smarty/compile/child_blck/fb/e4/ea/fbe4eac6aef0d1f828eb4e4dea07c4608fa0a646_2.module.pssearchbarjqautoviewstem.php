<?php
/* Smarty version 3.1.39, created on 2021-05-12 16:58:45
  from 'module:pssearchbarjqautoviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609bed255bad47_20867391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe4eac6aef0d1f828eb4e4dea07c4608fa0a646' => 
    array (
      0 => 'module:pssearchbarjqautoviewstem',
      1 => 1620803458,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609bed255bad47_20867391 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\laragon\www\ps7-demo/themes/blck/modules/ps_searchbarjqauto/views/templates/hook/ps_searchbarjqauto.tpl --><!-- Block search module TOP -->
<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="search-widget" data-search-widget data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="controller" value="search">
    <div class="search-widget__group">
        <input class="form-control search-widget__input-right" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <button type="submit" class="search-widget__btn btn btn-link">
            <i class="material-icons search">&#xE8B6;</i>
            <span class="d-none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
        </button>
    </div>
</form>
<!-- /Block search module TOP -->
<!-- end C:\laragon\www\ps7-demo/themes/blck/modules/ps_searchbarjqauto/views/templates/hook/ps_searchbarjqauto.tpl --><?php }
}
