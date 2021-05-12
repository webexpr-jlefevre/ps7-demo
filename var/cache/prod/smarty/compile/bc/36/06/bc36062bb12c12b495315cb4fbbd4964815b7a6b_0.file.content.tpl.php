<?php
/* Smarty version 3.1.39, created on 2021-05-12 09:48:14
  from 'C:\laragon\www\ps7-demo\adminps7demo\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609b883ea38534_64846837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc36062bb12c12b495315cb4fbbd4964815b7a6b' => 
    array (
      0 => 'C:\\laragon\\www\\ps7-demo\\adminps7demo\\themes\\new-theme\\template\\content.tpl',
      1 => 1620741666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609b883ea38534_64846837 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
