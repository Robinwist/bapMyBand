<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 15:48:39
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22263560bb24f6c1e35-79311760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1443620888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22263560bb24f6c1e35-79311760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb24f6c3062_04580439',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb24f6c3062_04580439')) {function content_560bb24f6c3062_04580439($_smarty_tpl) {?><div id="search">
<form method="post" action="?page=search">
    <input type="text" name="searchString" onkeyup="showResult(this.value)">
    <input type="submit" value="search">
</form>
</div>

<div id="livesearch">

</div>
<?php }} ?>
