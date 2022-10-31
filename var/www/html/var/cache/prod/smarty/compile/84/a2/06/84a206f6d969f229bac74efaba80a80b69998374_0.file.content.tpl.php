<?php
/* Smarty version 3.1.43, created on 2022-10-31 10:55:01
  from '/src/tiendadmin/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635fd3b5108587_83480399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a206f6d969f229bac74efaba80a80b69998374' => 
    array (
      0 => '/src/tiendadmin/themes/new-theme/template/content.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635fd3b5108587_83480399 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
