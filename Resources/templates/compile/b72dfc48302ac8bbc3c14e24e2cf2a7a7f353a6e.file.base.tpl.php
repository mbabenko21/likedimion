<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 23:27:20
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\skills\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60065353d387c49c34-24902756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72dfc48302ac8bbc3c14e24e2cf2a7a7f353a6e' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\skills\\base.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    '671f43a769364db91db34d244ce4f120b55b889a' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\skills_menu.tpl',
      1 => 1398022009,
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
  'nocache_hash' => '60065353d387c49c34-24902756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353d387eed953_82498971',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353d387eed953_82498971')) {function content_5353d387eed953_82498971($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '60065353d387c49c34-24902756');
content_53541f9879d915_80858418($_smarty_tpl);
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
        <li>
            <a href="/?do=skills:talants"&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
            <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"talants_skills"),$_smarty_tpl);?>

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
        

<span class="skill__life__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"life"),$_smarty_tpl);?>
</span>:
<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->life;?>
</strong><br/>
<span class="skill__energy__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"energy"),$_smarty_tpl);?>
</span>:
<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->energy;?>
</strong>
<hr/>
<span class="skill__str__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"strenge"),$_smarty_tpl);?>
</span>:
<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->strenge;?>
</strong><br/>
<span class="skill__dex__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"dexterity"),$_smarty_tpl);?>
</span>:
<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->dexterity;?>
</strong><br/>
<span class="skill__int__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"intelligence"),$_smarty_tpl);?>
</span>:
<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->intelligence;?>
</strong><br/>
<hr/>
<span class="skill__reg__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"regeneration"),$_smarty_tpl);?>
</span>:
<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->regeneration;?>
</strong><br/>
<span class="skill__med__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"meditation"),$_smarty_tpl);?>
</span>:
<strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->meditation;?>
</strong><br/>
<h6>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"help",'line'=>"base_skill_up"),$_smarty_tpl);?>

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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 23:27:20
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53541f9879d915_80858418')) {function content_53541f9879d915_80858418($_smarty_tpl) {?><div class="errors">
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