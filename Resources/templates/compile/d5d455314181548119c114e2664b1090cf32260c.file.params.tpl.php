<?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 20:46:50
         compiled from "W:\domains\glor\Resources\templates\templates\game\char\params.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3091150d7357a7df857-20348331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5d455314181548119c114e2664b1090cf32260c' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\game\\char\\params.tpl',
      1 => 1356185244,
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
    '933d77647b025535ae4cae4ada6a78009c5f4cc1' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\layout\\char_menu.tpl',
      1 => 1356260522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3091150d7357a7df857-20348331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d7357c5d7397_72793053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d7357c5d7397_72793053')) {function content_50d7357c5d7397_72793053($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '3091150d7357a7df857-20348331');
content_50d7357ad75ee7_17351253($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<?php /*  Call merged included template "layout/char_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3091150d7357a7df857-20348331');
content_50d7357b120e09_36923960($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_menu.tpl" */?>
<div class="skills">
    <div class="skills_content">
        <div class="params">
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"damage"),$_smarty_tpl);?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['weapon'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>$_tmp1),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo mb_strtolower($_tmp2, 'UTF-8');?>
</span> <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->minDamage;?>
-<?php echo $_smarty_tpl->tpl_vars['view']->value['params']->maxDamage;?>
</strong>
            <br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"hit"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->hit;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from"),$_smarty_tpl);?>
</span>
            <ul class="armor">
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_crushing"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo mb_strtolower($_tmp3, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromCrushing;?>
</strong></li>
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_cutting"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo mb_strtolower($_tmp4, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromCutting;?>
</strong><br/></li>
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_pricking"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo mb_strtolower($_tmp5, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromPricking;?>
</strong><br/></li>
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_magic"),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo mb_strtolower($_tmp6, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromMagic;?>
</strong><br/></li>
            </ul>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"shield"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->shield;?>
</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"speed"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->speed;?>
 <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"app",'line'=>"sec"),$_smarty_tpl);?>
</strong>
            <hr/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"bias"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->bias;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"parring"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->parring;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_bias"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->magic_bias;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_parring"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->magic_parring;?>
%</strong><br/>
        </div>
    </div>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 20:46:50
         compiled from "W:\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d7357ad75ee7_17351253')) {function content_50d7357ad75ee7_17351253($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 20:46:51
         compiled from "W:\domains\glor\Resources\templates\templates\layout\char_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d7357b120e09_36923960')) {function content_50d7357b120e09_36923960($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'W:\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
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
<?php }} ?>