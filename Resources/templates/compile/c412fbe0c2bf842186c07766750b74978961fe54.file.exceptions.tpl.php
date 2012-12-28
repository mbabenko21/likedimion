<?php /* Smarty version Smarty-3.1.12, created on 2012-12-28 12:06:45
         compiled from "/home/mbabenko21/glor.dev/Resources/templates/templates/errors/exceptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92339047450dd53153d3c49-35481768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c412fbe0c2bf842186c07766750b74978961fe54' => 
    array (
      0 => '/home/mbabenko21/glor.dev/Resources/templates/templates/errors/exceptions.tpl',
      1 => 1356677409,
      2 => 'file',
    ),
    '6470856b0ee75fc079572ebfc44ce3171c77efcb' => 
    array (
      0 => '/home/mbabenko21/glor.dev/Resources/templates/templates/layout/wrapper.html.tpl',
      1 => 1356677409,
      2 => 'file',
    ),
    '3fa947ca934719474df7229c45a5fbef94c68a0d' => 
    array (
      0 => '/home/mbabenko21/glor.dev/Resources/templates/templates/layout/errors.tpl',
      1 => 1356677409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92339047450dd53153d3c49-35481768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50dd53161ecb35_59640522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dd53161ecb35_59640522')) {function content_50dd53161ecb35_59640522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '92339047450dd53153d3c49-35481768');
content_50dd5315c221e4_39338177($_smarty_tpl);
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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-28 12:06:45
         compiled from "/home/mbabenko21/glor.dev/Resources/templates/templates/layout/errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50dd5315c221e4_39338177')) {function content_50dd5315c221e4_39338177($_smarty_tpl) {?><div class="errors">
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