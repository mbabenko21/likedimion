<?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 22:57:08
         compiled from "W:\domains\glor\Resources\templates\templates\game\skills\prof.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972950d7540419e2a0-98971176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fac816bdbc2e459afa1340790acaf723fccc66' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\game\\skills\\prof.tpl',
      1 => 1356167952,
      2 => 'file',
    ),
    'c760311d84cd384e3603e1db7cd2b2a238882f3a' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\layout\\skills_menu.tpl',
      1 => 1356260596,
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
  'nocache_hash' => '972950d7540419e2a0-98971176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d75404a79a83_45108051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d75404a79a83_45108051')) {function content_50d75404a79a83_45108051($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'W:\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '972950d7540419e2a0-98971176');
content_50d754044fccf3_36849002($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<div class="skills_menu">
    <ul class="menu">
        <li>
            <a href="/?do=skills:base&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"base_skills"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=skills:war&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"war_skills"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=skills:prof"&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"prof_skills"),$_smarty_tpl);?>

            </a>
        </li>
    </ul>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['study_points'])){?>
    <div class="study-points">
        <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"study_points"),$_smarty_tpl);?>
: <span class="counter__red">+<?php echo $_smarty_tpl->tpl_vars['view']->value['study_points'];?>
</span>
    </div>
    <hr/>
    <?php }?>
<div class="skills">
    <div class="skills_content">
        
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"alchemist"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->alchemist;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"carpenter"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->carpenter;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"miner"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->miner;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"juvelir"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->juvelir;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"smith"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->smith;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"tailor"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->tailor;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"stealer"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->stealer;?>
</strong>
<h6>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"help",'line'=>"prof_skill_up"),$_smarty_tpl);?>

</h6>

    </div>
</div>
<div class="back">
    <ul class="menu">
        <li>
            <a href="/?do=char:about&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"app",'line'=>"back"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 22:57:08
         compiled from "W:\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d754044fccf3_36849002')) {function content_50d754044fccf3_36849002($_smarty_tpl) {?><div class="errors">
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