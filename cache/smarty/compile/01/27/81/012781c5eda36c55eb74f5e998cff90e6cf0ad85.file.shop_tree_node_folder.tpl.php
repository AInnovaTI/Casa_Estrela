<?php /* Smarty version Smarty-3.1.19, created on 2017-03-31 00:50:11
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175935761358dd8ba3abfaa9-33001639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '012781c5eda36c55eb74f5e998cff90e6cf0ad85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_node_folder.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175935761358dd8ba3abfaa9-33001639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dd8ba3b174d1_23385617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dd8ba3b174d1_23385617')) {function content_58dd8ba3b174d1_23385617($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
