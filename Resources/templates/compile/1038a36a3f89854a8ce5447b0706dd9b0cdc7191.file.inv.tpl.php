<?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 22:08:57
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\game\char\inv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:579050d89a39793408-75127522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1038a36a3f89854a8ce5447b0706dd9b0cdc7191' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\game\\char\\inv.tpl',
      1 => 1356292057,
      2 => 'file',
    ),
    '215698c7640cbb297996a8212b39a1e84ecfae22' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\wrapper.html.tpl',
      1 => 1356259495,
      2 => 'file',
    ),
    '8d6e602103c68add83eac291ee4509c468d2de08' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\errors.tpl',
      1 => 1355943354,
      2 => 'file',
    ),
    '0b873bcc32bc7ac748b2b77eb79003c5624de9f3' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\char_menu.tpl',
      1 => 1356260522,
      2 => 'file',
    ),
    '9efe8d0904104a8fb6921fcf32e5df1812bce1a1' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\item.tpl',
      1 => 1356260546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579050d89a39793408-75127522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d89a3a8e3f56_23381114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d89a3a8e3f56_23381114')) {function content_50d89a3a8e3f56_23381114($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '579050d89a39793408-75127522');
content_50d89a39ba91e7_11404776($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<?php /*  Call merged included template "layout/char_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '579050d89a39793408-75127522');
content_50d89a39efb390_50736613($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0, '579050d89a39793408-75127522');
content_50d89a3a64a666_50030250($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/item.tpl" */?>
        </li>
    <?php } ?>
</ul>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 22:08:57
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d89a39ba91e7_11404776')) {function content_50d89a39ba91e7_11404776($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 22:08:57
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\char_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d89a39efb390_50736613')) {function content_50d89a39efb390_50736613($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 22:08:58
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\item.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d89a3a64a666_50030250')) {function content_50d89a3a64a666_50030250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
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