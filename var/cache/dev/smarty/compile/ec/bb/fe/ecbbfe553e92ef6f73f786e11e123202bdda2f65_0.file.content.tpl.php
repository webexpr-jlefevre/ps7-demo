<?php
/* Smarty version 3.1.39, created on 2021-05-12 17:40:24
  from 'C:\laragon\www\ps7-demo\adminps7demo\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609bf6e84b5923_40368327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecbbfe553e92ef6f73f786e11e123202bdda2f65' => 
    array (
      0 => 'C:\\laragon\\www\\ps7-demo\\adminps7demo\\themes\\default\\template\\content.tpl',
      1 => 1620741667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609bf6e84b5923_40368327 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
