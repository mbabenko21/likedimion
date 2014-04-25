<?php /* Smarty version Smarty-3.1.12, created on 2014-04-21 00:14:55
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\skills\talants.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322335354223ae1fe02-77879305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb5a70a338bcd017d3a91ed99d383e16e586d2d3' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\skills\\talants.tpl',
      1 => 1398024855,
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
    '00f98fe2ea2c23b57e3cebb1f8963ba6730139c3' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\talant_info.tpl',
      1 => 1398024672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322335354223ae1fe02-77879305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5354223b0ba375_79595276',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354223b0ba375_79595276')) {function content_5354223b0ba375_79595276($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '322335354223ae1fe02-77879305');
content_53542abf529c93_32871829($_smarty_tpl);
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
        
    <ul class="menu">
        <li>
            <a href="/?do=skills:talants&type=fire"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_fire"),$_smarty_tpl);?>
</a>
        </li>
        <li>
            <a href="/?do=skills:talants&type=cold"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_cold"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
    <div>
        <span class="skill__firearrow__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"firearrow"),$_smarty_tpl);?>
</span>
        :
        <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->firearrow;?>
</strong>
        <h6>
            <?php /*  Call merged included template "layout/talant_info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/talant_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('talant'=>$_smarty_tpl->tpl_vars['view']->value['firearrow']), 0, '322335354223ae1fe02-77879305');
content_53542abf679be2_31332640($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/talant_info.tpl" */?>
        </h6>
    </div>
    <div>
        <span class="skill__fireball__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"fireball"),$_smarty_tpl);?>
</span>
        :
        <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->fireball;?>
</strong>
        <h6>
            <?php /*  Call merged included template "layout/talant_info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/talant_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('talant'=>$_smarty_tpl->tpl_vars['view']->value['fireball']), 0, '322335354223ae1fe02-77879305');
content_53542abf679be2_31332640($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/talant_info.tpl" */?>
        </h6>
    </div>
    <div>
        <span class="skill__firecolumn__16"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"firecolumn"),$_smarty_tpl);?>
</span>
        :
        <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->firecolumn;?>
</strong>
        <h6>
            <?php /*  Call merged included template "layout/talant_info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/talant_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('talant'=>$_smarty_tpl->tpl_vars['view']->value['firecolumn']), 0, '322335354223ae1fe02-77879305');
content_53542abf679be2_31332640($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/talant_info.tpl" */?>
        </h6>
    </div>
    <h6>
        <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"help",'line'=>"talants_skill_up"),$_smarty_tpl);?>

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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-21 00:14:55
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53542abf529c93_32871829')) {function content_53542abf529c93_32871829($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-21 00:14:55
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\talant_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53542abf679be2_31332640')) {function content_53542abf679be2_31332640($_smarty_tpl) {?><ul>
    <li><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"damage"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['talant']->value['damage'];?>
</li>
    <li><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"mana_points"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['talant']->value['mana_points'];?>
</li>
    <li><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"skill_type"),$_smarty_tpl);?>
: <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"skill_".((string)$_smarty_tpl->tpl_vars['talant']->value['type'])),$_smarty_tpl);?>
</li>
    <li><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"cooldown"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['talant']->value['cooldown'];?>
 <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"sec"),$_smarty_tpl);?>
</li>
</ul><?php }} ?>