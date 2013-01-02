<?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 12:00:59
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\errors\exceptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2407850d89759b1a6e1-45397512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e2e54e3fc23dcd9d9846130190df1700e23dbf7' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\errors\\exceptions.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
    '215698c7640cbb297996a8212b39a1e84ecfae22' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\wrapper.html.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
    '8d6e602103c68add83eac291ee4509c468d2de08' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\errors.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2407850d89759b1a6e1-45397512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d8975a21d338_21673011',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d8975a21d338_21673011')) {function content_50d8975a21d338_21673011($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '2407850d89759b1a6e1-45397512');
content_50dff4c3185de1_49923221($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"errors",'line'=>"exception"),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['e']->getMessage();?>
</strong>
<br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"errors",'line'=>"err_file"),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['e']->getFile();?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['e']->getLine();?>
</strong>
<ul class="err">
    <?php  $_smarty_tpl->tpl_vars['trace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['e']->getTrace(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trace']->key => $_smarty_tpl->tpl_vars['trace']->value){
$_smarty_tpl->tpl_vars['trace']->_loop = true;
?>
    <li class="error_item">
        <?php echo $_smarty_tpl->tpl_vars['trace']->value["function"];?>
(<?php echo $_smarty_tpl->tpl_vars['trace']->value["file"];?>
):<?php echo $_smarty_tpl->tpl_vars['trace']->value["line"];?>

    </li>
    <?php } ?>
</ul>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 12:01:07
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50dff4c3185de1_49923221')) {function content_50dff4c3185de1_49923221($_smarty_tpl) {?><div class="errors">
    <ul>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li class="error_item"><span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['error']->value, 'UTF-8');?>
</span></li>
    <?php } ?>
    </ul>
</div><?php }} ?>