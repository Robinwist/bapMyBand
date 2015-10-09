<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 16:14:24
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:729655f940c94e40b7-24024179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444313659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '729655f940c94e40b7-24024179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f940c9538c09_51971452',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f940c9538c09_51971452')) {function content_55f940c9538c09_51971452($_smarty_tpl) {?><body>
<header>
    <div id="headerimg">
    <img src="img/headerimg.jpg" alt="">
    </div>
    <nav>
        <ul>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='home') {?>class="selected"<?php }?>><a href="index.php">Home</a>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='about') {?>class="selected"<?php }?>><a href="?page=about">About</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='contact') {?>class="selected"<?php }?>><a href="?page=contact">Contact</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='tourdates') {?>class="selected"<?php }?>><a href="?page=tourdates">Tour dates</a></li>
        </ul>
    </nav>
    <br>
</header>
</body>
<?php }} ?>
