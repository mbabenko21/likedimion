<?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 10:19:02
         compiled from "W:\domains\glor\Resources\templates\templates\game\main\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129150d6f26868f8e4-24432497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e42daee708466e4747969f52abc11a059eea1ec5' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\game\\main\\index.tpl',
      1 => 1356329576,
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
    'f3bc07edaedc78ff424b88911d9992ddbf6859f7' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\layout\\menu.tpl',
      1 => 1356329934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129150d6f26868f8e4-24432497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d6f269455275_12479775',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d6f269455275_12479775')) {function content_50d6f269455275_12479775($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'W:\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '129150d6f26868f8e4-24432497');
content_50d7f3d6937572_72580356($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
    
        <?php if ($_smarty_tpl->tpl_vars['view']->value['info']!=''){?>
        <div class="loc_info">
            <?php echo $_smarty_tpl->tpl_vars['view']->value['info'];?>

        </div>
        <?php }?>
    
    
        <?php /*  Call merged included template "layout/menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '129150d6f26868f8e4-24432497');
content_50d7f3d6b58427_60209925($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/menu.tpl" */?>
    
    
    <div class="char_status">
        <span class="life"><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->life;?>
 / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->maxLife;?>
</span>
        <span class="energy"><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->energy;?>
 / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->maxEnergy;?>
</span>
        <span class="expir"><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->expirience;?>
/<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['need_exp'];?>
</strong></span>
    </div>
    

    
    <ul class="loc_doors">
        <?php  $_smarty_tpl->tpl_vars["door"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["door"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['doors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["door"]->key => $_smarty_tpl->tpl_vars["door"]->value){
$_smarty_tpl->tpl_vars["door"]->_loop = true;
?>
        <li>
            <a href="/?do=main&go=<?php echo $_smarty_tpl->tpl_vars['door']->value->getTargetLocation();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0000,9999)'),$_smarty_tpl);?>
">
                <span class="b-go b-part b-<?php echo $_smarty_tpl->tpl_vars['door']->value->getDirection();?>
"></span>
                <?php echo $_smarty_tpl->tpl_vars['door']->value->getName();?>

            </a>
        <?php } ?>
    </ul>
    

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 10:19:02
         compiled from "W:\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d7f3d6937572_72580356')) {function content_50d7f3d6937572_72580356($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 10:19:02
         compiled from "W:\domains\glor\Resources\templates\templates\layout\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d7f3d6b58427_60209925')) {function content_50d7f3d6b58427_60209925($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'W:\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><div class="main_menu">
    <ul class="menu list_menu_main">
        <li>
            <a href="/?do=char:about&<?php echo smarty_function_math(array('equation'=>'rand(1000,99999)'),$_smarty_tpl);?>
">

                <span class="b-set__1 b-part b-char"></span>
            </a>
        </li>
        <li>
            <a href="/?do=service:main&<?php echo smarty_function_math(array('equation'=>'rand(1000,99999)'),$_smarty_tpl);?>
">
            
                <span class="b-set__1 b-part b-service"></span>
            </a>
        </li>
    </ul>
</div><?php }} ?>