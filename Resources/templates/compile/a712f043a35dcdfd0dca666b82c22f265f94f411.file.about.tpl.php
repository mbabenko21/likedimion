<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 23:25:00
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\char\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241715353d37c945bb8-57225276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a712f043a35dcdfd0dca666b82c22f265f94f411' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\char\\about.tpl',
      1 => 1398021897,
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
    'f39e73a1b3c7bfea8d190c562a4f50a3c573409d' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\char_name.tpl',
      1 => 1398018092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241715353d37c945bb8-57225276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353d37cbd6048_82661349',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353d37cbd6048_82661349')) {function content_5353d37cbd6048_82661349($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '241715353d37c945bb8-57225276');
content_53541f0ccb64d9_92712476($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['view']->value['include_menu']==true){?>
        <?php /*  Call merged included template "layout/char_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '241715353d37c945bb8-57225276');
content_53541f0cdbff16_47255711($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_menu.tpl" */?>
    <?php }?>
    <div class="about_char">
        <strong>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getName();?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getClass();?>
<?php $_tmp2=ob_get_clean();?><?php /*  Call merged included template "layout/char_name.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('char_name'=>$_tmp1,'class'=>$_tmp2), 0, '241715353d37c945bb8-57225276');
content_53541f0d085417_45522398($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_name.tpl" */?>
        </strong><br/>
        <?php if ($_smarty_tpl->tpl_vars['view']->value['attack']==1){?>
            ---  <br />
            <div class="char_status">
                <?php if ($_smarty_tpl->tpl_vars['view']->value['life_p']>0.66){?>
                    <?php if (isset($_smarty_tpl->tpl_vars["cl"])) {$_smarty_tpl->tpl_vars["cl"] = clone $_smarty_tpl->tpl_vars["cl"];
$_smarty_tpl->tpl_vars["cl"]->value = "red"; $_smarty_tpl->tpl_vars["cl"]->nocache = null; $_smarty_tpl->tpl_vars["cl"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cl"] = new Smarty_variable("red", null, 0);?>
                <?php }elseif($_smarty_tpl->tpl_vars['view']->value['life_p']<=0.66&&$_smarty_tpl->tpl_vars['view']->value['life_p']>0.33){?>
                    <?php if (isset($_smarty_tpl->tpl_vars["cl"])) {$_smarty_tpl->tpl_vars["cl"] = clone $_smarty_tpl->tpl_vars["cl"];
$_smarty_tpl->tpl_vars["cl"]->value = "yellow"; $_smarty_tpl->tpl_vars["cl"]->nocache = null; $_smarty_tpl->tpl_vars["cl"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cl"] = new Smarty_variable("yellow", null, 0);?>
                <?php }else{ ?>
                    <?php if (isset($_smarty_tpl->tpl_vars["cl"])) {$_smarty_tpl->tpl_vars["cl"] = clone $_smarty_tpl->tpl_vars["cl"];
$_smarty_tpl->tpl_vars["cl"]->value = "yellowgreen"; $_smarty_tpl->tpl_vars["cl"]->nocache = null; $_smarty_tpl->tpl_vars["cl"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cl"] = new Smarty_variable("yellowgreen", null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view']->value['mana_p']>0.66){?>
                    <?php if (isset($_smarty_tpl->tpl_vars["clm"])) {$_smarty_tpl->tpl_vars["clm"] = clone $_smarty_tpl->tpl_vars["clm"];
$_smarty_tpl->tpl_vars["clm"]->value = "blue"; $_smarty_tpl->tpl_vars["clm"]->nocache = null; $_smarty_tpl->tpl_vars["clm"]->scope = 0;
} else $_smarty_tpl->tpl_vars["clm"] = new Smarty_variable("blue", null, 0);?>
                <?php }elseif($_smarty_tpl->tpl_vars['view']->value['mana_p']<=0.66&&$_smarty_tpl->tpl_vars['view']->value['mana_p']>0.33){?>
                    <?php if (isset($_smarty_tpl->tpl_vars["clm"])) {$_smarty_tpl->tpl_vars["clm"] = clone $_smarty_tpl->tpl_vars["clm"];
$_smarty_tpl->tpl_vars["clm"]->value = "bluelight"; $_smarty_tpl->tpl_vars["clm"]->nocache = null; $_smarty_tpl->tpl_vars["clm"]->scope = 0;
} else $_smarty_tpl->tpl_vars["clm"] = new Smarty_variable("bluelight", null, 0);?>
                <?php }else{ ?>
                    <?php if (isset($_smarty_tpl->tpl_vars["clm"])) {$_smarty_tpl->tpl_vars["clm"] = clone $_smarty_tpl->tpl_vars["clm"];
$_smarty_tpl->tpl_vars["clm"]->value = "bluelightlight"; $_smarty_tpl->tpl_vars["clm"]->nocache = null; $_smarty_tpl->tpl_vars["clm"]->scope = 0;
} else $_smarty_tpl->tpl_vars["clm"] = new Smarty_variable("bluelightlight", null, 0);?>
                <?php }?>
                <div class="life_bar">
                    <div class="persent <?php echo $_smarty_tpl->tpl_vars['cl']->value;?>
" style="width: <?php echo $_smarty_tpl->tpl_vars['view']->value['life_p']*100;?>
%"></div>
                    <div class="text"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"life"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->life;?>
 / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->maxLife;?>
</div>
                </div>
                <div class="mana_bar">
                    <div class="persent <?php echo $_smarty_tpl->tpl_vars['clm']->value;?>
" style="width: <?php echo $_smarty_tpl->tpl_vars['view']->value['mana_p']*100;?>
%"></div>
                    <div class="text"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"energy"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->energy;?>

                        / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->maxEnergy;?>
</div>
                </div>
            </div>
            --- <br/>
        <?php }?>
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
: <strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['status'];?>
<?php $_tmp4=ob_get_clean();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"stats",'line'=>$_tmp4),$_smarty_tpl);?>
</strong>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['view']->value['attack']){?>
        --- <br />
        <?php if ($_smarty_tpl->tpl_vars['view']->value['territory']==1){?>
            <a href="/?do=attack&to=<?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getId();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><b><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"attack"),$_smarty_tpl);?>
</b></a>
        <?php }?>
        <br /><a href="/?do=mail:send&to=<?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getId();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><b><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"mail",'line'=>"send"),$_smarty_tpl);?>
</b></a>
    <?php }?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 23:25:00
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53541f0ccb64d9_92712476')) {function content_53541f0ccb64d9_92712476($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 23:25:00
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\char_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53541f0cdbff16_47255711')) {function content_53541f0cdbff16_47255711($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 23:25:01
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\char_name.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53541f0d085417_45522398')) {function content_53541f0d085417_45522398($_smarty_tpl) {?><span class="char-race__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16">
        &nbsp;<span class="char-class__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16"><?php echo $_smarty_tpl->tpl_vars['char_name']->value;?>
</span>
</span><?php }} ?>