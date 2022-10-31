<?php
/* Smarty version 3.1.43, created on 2022-10-31 13:43:49
  from '/src/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635ffb454c61b4_82030262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c1d4863c50d75a3e480a4092dbc6214c7bae1a5' => 
    array (
      0 => '/src/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635ffb454c61b4_82030262 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
