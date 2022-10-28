<?php
/* Smarty version 3.1.43, created on 2022-10-28 14:56:37
  from '/var/www/html/tiendadmin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635c17d51dacd1_07042895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d661f412e9af63c14c51d16cb46e62713f6fc27' => 
    array (
      0 => '/var/www/html/tiendadmin/themes/default/template/content.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635c17d51dacd1_07042895 (Smarty_Internal_Template $_smarty_tpl) {
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
