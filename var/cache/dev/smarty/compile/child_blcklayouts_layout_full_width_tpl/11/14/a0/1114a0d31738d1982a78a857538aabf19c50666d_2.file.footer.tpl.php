<?php
/* Smarty version 3.1.39, created on 2021-05-12 16:58:45
  from 'C:\laragon\www\ps7-demo\themes\blck\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609bed25645cb9_64008267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1114a0d31738d1982a78a857538aabf19c50666d' => 
    array (
      0 => 'C:\\laragon\\www\\ps7-demo\\themes\\blck\\templates\\_partials\\footer.tpl',
      1 => 1620803458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609bed25645cb9_64008267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883855807609bed2563e4d6_71281048', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1229412857609bed2563f601_26713458', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172344311609bed25640173_95760632', 'hook_footer_after');
?>

    </div>
    <p class="text-center mb-0 mt-5 pb-3">
      <small>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102773741609bed25640b56_59007523', 'copyright_link');
?>

      </small>
    </p>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_883855807609bed2563e4d6_71281048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_883855807609bed2563e4d6_71281048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_1229412857609bed2563f601_26713458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_1229412857609bed2563f601_26713458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_172344311609bed25640173_95760632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_172344311609bed25640173_95760632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_102773741609bed25640b56_59007523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_102773741609bed25640b56_59007523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
          <a class="_blank" href="https://www.prestashop.com" target="_blank" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop???','%year%'=>date('Y'),'%copyright%'=>'??'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          </a>
          <span> - </span>
          <a class="_blank" href="https://www.arnaud-merigeau.fr" target="_blank">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Freelance PrestaShop','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          </a>
        <?php } else { ?>
          <span> - </span>
          <a class="_blank" href="https://www.prestashop.com" target="_blank" rel="nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop???','%year%'=>date('Y'),'%copyright%'=>'??'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          </a>
        <?php }?>
      <?php
}
}
/* {/block 'copyright_link'} */
}
