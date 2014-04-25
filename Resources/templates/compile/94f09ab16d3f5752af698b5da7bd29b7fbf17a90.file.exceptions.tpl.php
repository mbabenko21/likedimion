<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 17:25:26
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\errors\exceptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301835353cac68e1ec6-64687965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94f09ab16d3f5752af698b5da7bd29b7fbf17a90' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\errors\\exceptions.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    '4cf5b90fb6068b6cd2269f48079de19686d1d40f' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\wrapper.html.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    'e92d9f56ffe3193baa8c56bf2cbc449d7593fdde' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\errors.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301835353cac68e1ec6-64687965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353cac6a78326_63560226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353cac6a78326_63560226')) {function content_5353cac6a78326_63560226($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '301835353cac68e1ec6-64687965');
content_5353cac6982171_13666543($_smarty_tpl);
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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 17:25:26
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353cac6982171_13666543')) {function content_5353cac6982171_13666543($_smarty_tpl) {?><div class="errors">
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