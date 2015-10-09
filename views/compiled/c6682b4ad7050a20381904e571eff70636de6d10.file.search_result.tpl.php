<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 08:56:28
         compiled from "views\search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22477560bb7dd3603d2-02845948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6682b4ad7050a20381904e571eff70636de6d10' => 
    array (
      0 => 'views\\search_result.tpl',
      1 => 1444287382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22477560bb7dd3603d2-02845948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb7dd38d287_25534035',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb7dd38d287_25534035')) {function content_560bb7dd38d287_25534035($_smarty_tpl) {?><h1>Search results:</h1>

    
        
            
            
            
        
    


<?php echo $_smarty_tpl->getSubTemplate ("search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="newsWrapper">
    <section>
        <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
            <article>
                <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
                <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
                <?php if ($_smarty_tpl->tpl_vars['newsitem']->value['image']) {?>
                    <img src="img/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>
">
                <?php }?>
            </article>
        <?php } ?>
    </section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
