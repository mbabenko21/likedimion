<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 18:02:54
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\speak\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306095353d38ec570c8-00725676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0c9607a356a0f238e62922fe849bf8aade763e1' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\speak\\main.tpl',
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
  'nocache_hash' => '306095353d38ec570c8-00725676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353d38ede1995_67769772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353d38ede1995_67769772')) {function content_5353d38ede1995_67769772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '306095353d38ec570c8-00725676');
content_5353d38ecf7366_28486387($_smarty_tpl);
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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 18:02:54
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353d38ecf7366_28486387')) {function content_5353d38ecf7366_28486387($_smarty_tpl) {?><div class="errors">
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