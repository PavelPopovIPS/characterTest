<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-20 20:11:43
         compiled from "D:\characterTest\template\body.html" */ ?>
<?php /*%%SmartyHeaderCode:400050885dd58e46de08a9-95060590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b85dc5168ab847d33ef4c23b98c30b343e7a55' => 
    array (
      0 => 'D:\\characterTest\\template\\body.html',
      1 => 1574277101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '400050885dd58e46de08a9-95060590',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dd58e481dba85_59859902',
  'variables' => 
  array (
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd58e481dba85_59859902')) {function content_5dd58e481dba85_59859902($_smarty_tpl) {?>	<div class="blue">
	  <div class="number">#<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
      <img src="data/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png"/>
	  <div class="buttonView">
	    <a href="characterView.html?count=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" target="_blank">
		  <img src="resourse/button.png"/>
		</a>
	  </div>
	</div>
	<div class="black">
      <img src="data/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png"/>
	</div>
	<div class="white">
      <img src="data/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png"/>
	</div>
	<div class="clear"></div><?php }} ?>
