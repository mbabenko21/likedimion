<?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:31:38
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\game\speak\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2382250d8bdad6d6166-00885932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e37451dd607aee33196b6147295a9b4f565436f' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\game\\speak\\main.tpl',
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
  'nocache_hash' => '2382250d8bdad6d6166-00885932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d8bdaf3f99f8_77584459',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d8bdaf3f99f8_77584459')) {function content_50d8bdaf3f99f8_77584459($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '2382250d8bdad6d6166-00885932');
content_50dfeddb61bd65_67248622($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<div class="npc_reply">
    <?php echo $_smarty_tpl->tpl_vars['view']->value['npc_reply'];?>

</div>
    <?php if (MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['answers'])>0){?>
    <ul class="loc_doors">
        <?php  $_smarty_tpl->tpl_vars['reply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reply']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['answers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->key => $_smarty_tpl->tpl_vars['reply']->value){
$_smarty_tpl->tpl_vars['reply']->_loop = true;
?>
            <li>
                <a href="/?do=speak&npc=<?php echo $_smarty_tpl->tpl_vars['view']->value['dig'];?>
&section=<?php echo $_smarty_tpl->tpl_vars['reply']->value[1];?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                    <span class="b-arrows b-icon__right_1"></span>
                    <?php echo $_smarty_tpl->tpl_vars['reply']->value[0];?>

                </a>
            </li>
        <?php } ?>
    </ul>
        <?php }else{ ?>
    <ul class="loc_doors">
        <li>
            <a href="/?do=main&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <span class="b-arrows b-icon__right_1"></span>
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"dialog",'line'=>"end"),$_smarty_tpl);?>

            </a>
        </li>
    </ul>
    <?php }?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:31:39
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50dfeddb61bd65_67248622')) {function content_50dfeddb61bd65_67248622($_smarty_tpl) {?><div class="errors">
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