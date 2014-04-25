<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 18:03:30
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\char\inv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127825353d3b267f190-61307582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8456d9a05ee934ed872f91949c6201de174bbd87' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\char\\inv.tpl',
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
    '8dce4d4c771147761b733a7ae414a6bbbdb39755' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\char_menu.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    '6f4640ae9e4a50ece7a6831872245ed317b7dc73' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\item.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127825353d3b267f190-61307582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353d3b28e46a7_01000579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353d3b28e46a7_01000579')) {function content_5353d3b28e46a7_01000579($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '127825353d3b267f190-61307582');
content_5353d3b271f437_35483624($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<?php /*  Call merged included template "layout/char_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '127825353d3b267f190-61307582');
content_5353d3b277d056_49309584($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_menu.tpl" */?>
<ul class="item-list">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
            <div class="up-down-icons">
                <a href="/?do=char:inventory&up=<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><span
                        class="b-arrows b-icon__up_2"></span></a>
                <a href="/?do=char:inventory&down=<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><span
                        class="b-arrows b-icon__down_2"></span></a>
            </div>
            <?php /*  Call merged included template "layout/item.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0, '127825353d3b267f190-61307582');
content_5353d3b2863800_02787254($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/item.tpl" */?>
        </li>
    <?php } ?>
</ul>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 18:03:30
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353d3b271f437_35483624')) {function content_5353d3b271f437_35483624($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 18:03:30
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\char_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353d3b277d056_49309584')) {function content_5353d3b277d056_49309584($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><div class="char_menu">
    <ul class="menu">
        <li>
            <a href="/?do=char:about&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"char"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=char:inventory&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"inventory"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=skills:base&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"skills"),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->studyPoints>0){?>
                    <span class="counter__red">
                    +<?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->studyPoints;?>

                </span>
                <?php }?>
            </a>
        </li>
        <li>
            <a href="/?do=char:parameters&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
            <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"parameters"),$_smarty_tpl);?>

            </a>
        </li>
    </ul>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 18:03:30
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\item.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353d3b2863800_02787254')) {function content_5353d3b2863800_02787254($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><div class="b-item">
    <a href="/?do=item:about&id=<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
        <div class="b-item__icon"></div>
        <div class="b-item__name">
        <?php if ($_smarty_tpl->tpl_vars['item']->value->getCount()>1){?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->getName('p');?>

                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>

                        <?php }?>
        </div>
        <div class="b-item__counter">
        <?php echo $_smarty_tpl->tpl_vars['item']->value->getCount();?>

        </div>
    </a>
</div><?php }} ?>