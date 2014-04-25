<?php /* Smarty version Smarty-3.1.12, created on 2014-04-26 00:02:44
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\main\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83445353d36ef26807-83510314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabd9e5254a90b52bf753baba950a248c5144afd' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\main\\index.tpl',
      1 => 1398456161,
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
    'f24b4f6009dc8fd7a4245c7c8c03b4d95313e068' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\menu.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    '45113faed8fe81054136f4131608e152cb75bcc3' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\journal.tpl',
      1 => 1398347703,
      2 => 'file',
    ),
    'f39e73a1b3c7bfea8d190c562a4f50a3c573409d' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\char_name.tpl',
      1 => 1398018092,
      2 => 'file',
    ),
    '8b8d6133fb1241f1489a62f846461fe7e5d84b8b' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\talant_image.tpl',
      1 => 1398196150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83445353d36ef26807-83510314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353d36f527fc4_13446298',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353d36f527fc4_13446298')) {function content_5353d36f527fc4_13446298($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '83445353d36ef26807-83510314');
content_535abf649528d5_06051924($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
    
        <?php if ($_smarty_tpl->tpl_vars['view']->value['info']!=''){?>
            <div class="loc_info">
                <?php echo $_smarty_tpl->tpl_vars['view']->value['info'];?>

            </div>
        <?php }?>
    
    
        <?php /*  Call merged included template "layout/menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '83445353d36ef26807-83510314');
content_535abf64a02586_02637188($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/menu.tpl" */?>
    
    
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
: <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->life;?>
 / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->maxLife;?>
</div>
            </div>
            <div class="mana_bar">
                <div class="persent <?php echo $_smarty_tpl->tpl_vars['clm']->value;?>
" style="width: <?php echo $_smarty_tpl->tpl_vars['view']->value['mana_p']*100;?>
%"></div>
                <div class="text"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"energy"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->energy;?>

                    / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->maxEnergy;?>
</div>
            </div>
            <div class="exp_bar">
                <div class="persent brown" style="width: <?php echo $_smarty_tpl->tpl_vars['view']->value['exp_p'];?>
%"></div>
                <?php if ($_smarty_tpl->tpl_vars['view']->value['char']->studyPoints>0){?>
                    <?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"sp"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars["sp"])) {$_smarty_tpl->tpl_vars["sp"] = clone $_smarty_tpl->tpl_vars["sp"];
$_smarty_tpl->tpl_vars["sp"]->value = $_tmp1.": ".((string)$_smarty_tpl->tpl_vars['view']->value['char']->studyPoints); $_smarty_tpl->tpl_vars["sp"]->nocache = null; $_smarty_tpl->tpl_vars["sp"]->scope = 0;
} else $_smarty_tpl->tpl_vars["sp"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['view']->value['char']->studyPoints), null, 0);?>
                <?php }else{ ?>
                    <?php if (isset($_smarty_tpl->tpl_vars["sp"])) {$_smarty_tpl->tpl_vars["sp"] = clone $_smarty_tpl->tpl_vars["sp"];
$_smarty_tpl->tpl_vars["sp"]->value = ''; $_smarty_tpl->tpl_vars["sp"]->nocache = null; $_smarty_tpl->tpl_vars["sp"]->scope = 0;
} else $_smarty_tpl->tpl_vars["sp"] = new Smarty_variable('', null, 0);?>
                <?php }?>
                <div class="text"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"exp"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['exp_p'];?>

                    %, <?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"level"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo mb_strtolower($_tmp2, 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['view']->value['level'];?>
, <?php echo $_smarty_tpl->tpl_vars['sp']->value;?>
</div>
            </div>
        </div>
    
    
        <?php /*  Call merged included template "layout/journal.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/journal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('journal'=>$_smarty_tpl->tpl_vars['view']->value['player']->getJournal()->export()), 0, '83445353d36ef26807-83510314');
content_535abf64c86e90_44157790($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/journal.tpl" */?>
    
    
        <ul class="loc_doors">
            <?php  $_smarty_tpl->tpl_vars['man'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['man']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['mans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['man']->key => $_smarty_tpl->tpl_vars['man']->value){
$_smarty_tpl->tpl_vars['man']->_loop = true;
?>
                <li>
                    <a href="/?do=speak&npc=<?php echo $_smarty_tpl->tpl_vars['man']->value->getDialog();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['man']->value->name;?>
</a>
                </li>
            <?php } ?>
        </ul>
    

    
        <ul class="loc_doors">
            <?php  $_smarty_tpl->tpl_vars['character'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['character']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['char_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['character']->key => $_smarty_tpl->tpl_vars['character']->value){
$_smarty_tpl->tpl_vars['character']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['character']->value->getId()!=$_smarty_tpl->tpl_vars['view']->value['player']->getId()){?>
                    <li>
                        <div class="player">
                            <b>[<?php echo $_smarty_tpl->tpl_vars['character']->value->getLevel();?>
]</b>
                            <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['character']->value->getId();?>
<?php $_tmp3=ob_get_clean();?><?php echo MB\Core\Kernel\SmartyService::route(array('id'=>"char_info",'uid'=>$_tmp3),$_smarty_tpl);?>
">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['character']->value->getName();?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['character']->value->getClass();?>
<?php $_tmp5=ob_get_clean();?><?php /*  Call merged included template "layout/char_name.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('char_name'=>$_tmp4,'class'=>$_tmp5), 0, '83445353d36ef26807-83510314');
content_535abf64d94750_10166095($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_name.tpl" */?>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['character']->value->getCharParams()->life<$_smarty_tpl->tpl_vars['character']->value->getCharParams()->maxLife){?>

                                <b><?php echo smarty_function_math(array('equation'=>"(life / maxLife)*100",'life'=>$_smarty_tpl->tpl_vars['character']->value->getCharParams()->life,'maxLife'=>$_smarty_tpl->tpl_vars['character']->value->getCharParams()->maxLife,'format'=>"%.1f"),$_smarty_tpl);?>

                                    %</b>
                            <?php }?>
                        </div>
                        <div class="talants_panel">
                            <div class="talants">
                                <?php  $_smarty_tpl->tpl_vars['pointTalant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pointTalant']->_loop = false;
 $_smarty_tpl->tpl_vars['pointId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view']->value['points_talants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pointTalant']->key => $_smarty_tpl->tpl_vars['pointTalant']->value){
$_smarty_tpl->tpl_vars['pointTalant']->_loop = true;
 $_smarty_tpl->tpl_vars['pointId']->value = $_smarty_tpl->tpl_vars['pointTalant']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['view']->value['player']->getCooldown()->getTime($_smarty_tpl->tpl_vars['pointId']->value)<1){?>
                                        <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['character']->value->getId();?>
<?php $_tmp6=ob_get_clean();?><?php echo MB\Core\Kernel\SmartyService::route(array('id'=>"use_point_talant",'talantId'=>$_smarty_tpl->tpl_vars['pointId']->value,'to'=>$_tmp6),$_smarty_tpl);?>
"><?php /*  Call merged included template "layout/talant_image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/talant_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('talant'=>$_smarty_tpl->tpl_vars['pointTalant']->value,'name'=>$_smarty_tpl->tpl_vars['pointId']->value,'size'=>32), 0, '83445353d36ef26807-83510314');
content_535abf64e7ed89_14466589($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/talant_image.tpl" */?></a>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    

    
        <ul class="loc_doors">
            <?php  $_smarty_tpl->tpl_vars['other'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['other']->_loop = false;
 $_smarty_tpl->tpl_vars['npcId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view']->value['others']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['other']->key => $_smarty_tpl->tpl_vars['other']->value){
$_smarty_tpl->tpl_vars['other']->_loop = true;
 $_smarty_tpl->tpl_vars['npcId']->value = $_smarty_tpl->tpl_vars['other']->key;
?>
                <li>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['other']->value->getCharParams()->life/$_smarty_tpl->tpl_vars['other']->value->getCharParams()->maxLife;?>
<?php $_tmp7=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars["p"])) {$_smarty_tpl->tpl_vars["p"] = clone $_smarty_tpl->tpl_vars["p"];
$_smarty_tpl->tpl_vars["p"]->value = $_tmp7; $_smarty_tpl->tpl_vars["p"]->nocache = null; $_smarty_tpl->tpl_vars["p"]->scope = 0;
} else $_smarty_tpl->tpl_vars["p"] = new Smarty_variable($_tmp7, null, 0);?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<?php $_tmp8=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars["life_p"])) {$_smarty_tpl->tpl_vars["life_p"] = clone $_smarty_tpl->tpl_vars["life_p"];
$_smarty_tpl->tpl_vars["life_p"]->value = $_tmp8+"%"; $_smarty_tpl->tpl_vars["life_p"]->nocache = null; $_smarty_tpl->tpl_vars["life_p"]->scope = 0;
} else $_smarty_tpl->tpl_vars["life_p"] = new Smarty_variable($_tmp8+"%", null, 0);?>
                    <div class="life_bar npc">
                        <div class="persent yellowgreen" style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value*100;?>
%"></div>
                        <div class="text">
                            <span><a href=<?php echo MB\Core\Kernel\SmartyService::route(array('id'=>"attack_npc",'to'=>$_smarty_tpl->tpl_vars['npcId']->value),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['other']->value->name;?>
</a></span>
                            <span id="p"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['p']->value*100;?>
<?php $_tmp9=ob_get_clean();?><?php echo sprintf("%.2f",$_tmp9);?>
%</span>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    
    
        <div class="talants_panel">
            <?php  $_smarty_tpl->tpl_vars['talant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['talant']->_loop = false;
 $_smarty_tpl->tpl_vars['talantId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view']->value['aoe_talants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['talant']->key => $_smarty_tpl->tpl_vars['talant']->value){
$_smarty_tpl->tpl_vars['talant']->_loop = true;
 $_smarty_tpl->tpl_vars['talantId']->value = $_smarty_tpl->tpl_vars['talant']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['view']->value['player']->getCooldown()->getTime($_smarty_tpl->tpl_vars['talantId']->value)<1){?>
                    <a href=<?php echo MB\Core\Kernel\SmartyService::route(array('id'=>"use_aoe_talant",'talantId'=>$_smarty_tpl->tpl_vars['talantId']->value),$_smarty_tpl);?>
><?php /*  Call merged included template "layout/talant_image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/talant_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('talant'=>$_smarty_tpl->tpl_vars['talant']->value,'name'=>$_smarty_tpl->tpl_vars['talantId']->value,'size'=>32), 0, '83445353d36ef26807-83510314');
content_535abf651098f8_46292365($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/talant_image.tpl" */?></a>
                <?php }?>
            <?php } ?>
        </div>
    
    
        <ul class="loc_doors">
            <?php  $_smarty_tpl->tpl_vars["door"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["door"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['doors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["door"]->key => $_smarty_tpl->tpl_vars["door"]->value){
$_smarty_tpl->tpl_vars["door"]->_loop = true;
?>
            <li>
                <a href=<?php echo MB\Core\Kernel\SmartyService::route(array('id'=>"move_char",'locId'=>$_smarty_tpl->tpl_vars['door']->value->getTargetLocation()),$_smarty_tpl);?>
>
                    <span class="b-go b-part b-<?php echo $_smarty_tpl->tpl_vars['door']->value->getDirection();?>
"></span>
                    <?php echo $_smarty_tpl->tpl_vars['door']->value->getName();?>

                </a>
            </li>
            <?php } ?>
        </ul>
    

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-26 00:02:44
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_535abf649528d5_06051924')) {function content_535abf649528d5_06051924($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-26 00:02:44
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_535abf64a02586_02637188')) {function content_535abf64a02586_02637188($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-26 00:02:44
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\journal.tpl" */ ?>
<?php if ($_valid && !is_callable('content_535abf64c86e90_44157790')) {function content_535abf64c86e90_44157790($_smarty_tpl) {?><div class="journal">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['journal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li class="journal_item"><span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['item']->value['message'], 'UTF-8');?>
</span></li>
        <?php } ?>
    </ul>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-26 00:02:44
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\char_name.tpl" */ ?>
<?php if ($_valid && !is_callable('content_535abf64d94750_10166095')) {function content_535abf64d94750_10166095($_smarty_tpl) {?><span class="char-race__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16">
        &nbsp;<span class="char-class__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16"><?php echo $_smarty_tpl->tpl_vars['char_name']->value;?>
</span>
</span><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-26 00:02:44
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\talant_image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_535abf64e7ed89_14466589')) {function content_535abf64e7ed89_14466589($_smarty_tpl) {?><div class="talant-image">
    <div class="<?php if ($_smarty_tpl->tpl_vars['talant']->value->getClass()!=''){?><?php echo $_smarty_tpl->tpl_vars['talant']->value->getClass();?>
<?php }else{ ?>a-skills<?php if ($_smarty_tpl->tpl_vars['size']->value){?>_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
<?php }?> a-icon__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['size']->value){?>_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['size']->value>32){?><span
                id="light-span"><?php echo $_smarty_tpl->tpl_vars['talant']->value->getLevel();?>
</span><?php }?></div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-26 00:02:45
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\talant_image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_535abf651098f8_46292365')) {function content_535abf651098f8_46292365($_smarty_tpl) {?><div class="talant-image">
    <div class="<?php if ($_smarty_tpl->tpl_vars['talant']->value->getClass()!=''){?><?php echo $_smarty_tpl->tpl_vars['talant']->value->getClass();?>
<?php }else{ ?>a-skills<?php if ($_smarty_tpl->tpl_vars['size']->value){?>_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
<?php }?> a-icon__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['size']->value){?>_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['size']->value>32){?><span
                id="light-span"><?php echo $_smarty_tpl->tpl_vars['talant']->value->getLevel();?>
</span><?php }?></div>
</div><?php }} ?>