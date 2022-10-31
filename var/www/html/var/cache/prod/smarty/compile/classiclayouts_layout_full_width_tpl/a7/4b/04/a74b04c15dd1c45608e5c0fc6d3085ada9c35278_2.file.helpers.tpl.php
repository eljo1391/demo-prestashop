<?php
/* Smarty version 3.1.43, created on 2022-10-31 13:43:29
  from '/src/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635ffb3140e544_08167611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74b04c15dd1c45608e5c0fc6d3085ada9c35278' => 
    array (
      0 => '/src/themes/classic/templates/_partials/helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635ffb3140e544_08167611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/src/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/a7/4b/04/a74b04c15dd1c45608e5c0fc6d3085ada9c35278_2.file.helpers.tpl.php',
    'uid' => 'a74b04c15dd1c45608e5c0fc6d3085ada9c35278',
    'call_name' => 'smarty_template_function_renderLogo_1989191475635ffb3140a0f0_33105223',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1989191475635ffb3140a0f0_33105223 */
if (!function_exists('smarty_template_function_renderLogo_1989191475635ffb3140a0f0_33105223')) {
function smarty_template_function_renderLogo_1989191475635ffb3140a0f0_33105223(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1989191475635ffb3140a0f0_33105223 */
}
