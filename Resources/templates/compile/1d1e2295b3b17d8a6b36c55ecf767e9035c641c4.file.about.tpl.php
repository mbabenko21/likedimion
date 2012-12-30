<?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 16:00:51
         compiled from "W:\domains\glor\Resources\templates\templates\game\char\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269150d6f273753861-05315262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d1e2295b3b17d8a6b36c55ecf767e9035c641c4' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\game\\char\\about.tpl',
      1 => 1356133352,
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
    'bf3b33b1b52cd37ad56789477c7de576eb32d9f3' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\layout\\char_name.tpl',
      1 => 1356132795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269150d6f273753861-05315262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d6f275d3ff59_35517945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d6f275d3ff59_35517945')) {function content_50d6f275d3ff59_35517945($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '269150d6f273753861-05315262');
content_50d6f2742fe9d6_41638479($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<?php /*  Call merged included template "layout/char_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '269150d6f273753861-05315262');
content_50d6f274876ae1_79705378($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_menu.tpl" */?>
<div class="about_char">
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"name"),$_smarty_tpl);?>
: <strong>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getName();?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getClass();?>
<?php $_tmp2=ob_get_clean();?><?php /*  Call merged included template "layout/char_name.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('char_name'=>$_tmp1,'class'=>$_tmp2), 0, '269150d6f273753861-05315262');
content_50d6f27516a057_61445015($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_name.tpl" */?>
</strong><br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"reg"),$_smarty_tpl);?>
: <strong><?php echo mb_strtolower(MB\Core\Kernel\SmartyService::format_date($_smarty_tpl->tpl_vars['view']->value['char']->getCreated()), 'UTF-8');?>
</strong><br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"class"),$_smarty_tpl);?>
:
    <span>
        <strong><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"classes",'line'=>$_smarty_tpl->tpl_vars['view']->value['char']->getClass()),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo mb_strtolower($_tmp3, 'UTF-8');?>
</strong>
    </span>
    <br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"level"),$_smarty_tpl);?>
:
    <span class="counter__brown">
    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getLevel();?>
</strong>
    </span>
    <br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"status"),$_smarty_tpl);?>
:
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 16:00:52
         compiled from "W:\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d6f2742fe9d6_41638479')) {function content_50d6f2742fe9d6_41638479($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 16:00:52
         compiled from "W:\domains\glor\Resources\templates\templates\layout\char_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d6f274876ae1_79705378')) {function content_50d6f274876ae1_79705378($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'W:\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 16:00:53
         compiled from "W:\domains\glor\Resources\templates\templates\layout\char_name.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d6f27516a057_61445015')) {function content_50d6f27516a057_61445015($_smarty_tpl) {?><span class="char-race__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16">
        <span class="char-class__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16"><?php echo $_smarty_tpl->tpl_vars['char_name']->value;?>
</span>
</span><?php }} ?>