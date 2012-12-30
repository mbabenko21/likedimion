<?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 16:01:08
         compiled from "W:\domains\glor\Resources\templates\templates\errors\errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2536850d6f2840a2e07-46509487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96209edb637d054ee5ca1a2cb242f0cbfca5444e' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\errors\\errors.tpl',
      1 => 1356261463,
      2 => 'file',
    ),
    '4fd21625cd6fad4651f7d7f036f4fc485149a860' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\layout\\wrapper.html.tpl',
      1 => 1356259495,
      2 => 'file',
    ),
    '7475450a9b238d78b53e410802f44cdea9b717fc' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\layout\\errors.tpl',
      1 => 1355943354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2536850d6f2840a2e07-46509487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d6f284bf85e1_75730349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d6f284bf85e1_75730349')) {function content_50d6f284bf85e1_75730349($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '2536850d6f2840a2e07-46509487');
content_50d6f284631267_90400254($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"errors",'line'=>"errno"),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['errno'];?>
</strong>
<br/>
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"errors",'line'=>"err_message"),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['message'];?>
</strong>
<br/>
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"errors",'line'=>"err_file"),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['file'];?>
</strong>
<br/>
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"errors",'line'=>"err_line"),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['line'];?>
</strong>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 16:01:08
         compiled from "W:\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d6f284631267_90400254')) {function content_50d6f284631267_90400254($_smarty_tpl) {?><div class="errors">
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