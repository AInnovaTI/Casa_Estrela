<?php /* Smarty version Smarty-3.1.19, created on 2017-03-31 00:50:03
         compiled from "C:\xampp\htdocs\prestashop\themes\default-bootstrap\modules\referralprogram\views\templates\hook\shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46777726958dd8b9bc62611-44420771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f72c72da3837857b63ac1668d0d234963904fb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\hook\\shopping-cart.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46777726958dd8b9bc62611-44420771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discount_display' => 0,
    'discount' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dd8b9bd58368_72310350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dd8b9bd58368_72310350')) {function content_58dd8b9bd58368_72310350($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<p id="referralprogram">
	<i class="icon-flag"></i>
	<?php echo smartyTranslate(array('s'=>'You have earned a voucher worth %s thanks to your sponsor!','sprintf'=>$_smarty_tpl->tpl_vars['discount_display']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Enter voucher name %s to receive the reduction on this order.','sprintf'=>$_smarty_tpl->tpl_vars['discount']->value->name,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View your referral program.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
</p>
<br />
<!-- END : MODULE ReferralProgram --><?php }} ?>